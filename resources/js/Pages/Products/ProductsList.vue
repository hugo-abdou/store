<template>
	<Head title="Products" />
	<BreezeAuthenticatedLayout>
		<template #header>
			<div class="flex items-center justify-between">
				<span>Products</span>
				<div>
					<Button :href="route('products.create')" variant="primary">Create</Button>
				</div>
			</div>
		</template>
		<card class="!p-0">
			<m-table :data="products" :fields="fields" />
		</card>
	</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Card from "@/Components/Card.vue";
import MTable from "@/Components/Table/MTable.vue";
import useGetProducts from "@/Composables/useGetProducts";
import Button from "@/Components/Button.vue";

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
		Card,
		MTable,
		Button,
	},
	setup() {
		const { fields, products } = useGetProducts();
		return { fields, products };
	},
};
</script>
