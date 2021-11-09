<template>
	<Head title="Products" />
	<BreezeAuthenticatedLayout>
		<template #header>Product - Create</template>
		<card>
			<h2 class="text-xl border-b">Products Details</h2>
			<div class="grid grid-cols-1 md:grid-cols-2">
				<div class>
					<VInput placeholder="test" />
				</div>
			</div>
		</card>
	</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import useGetProducts from "@/Composables/useGetProducts";
import Card from "@/Components/Card.vue";
import VInput from "@/Components/Input.vue";

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
		Card,
		VInput,
	},
	setup() {
		const test = "test";
	},
};
</script>
