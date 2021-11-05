<template>
	<Head title="Users" />

	<BreezeAuthenticatedLayout>
		<template #header>Users</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto">
				<div class="bg-white overflow-hidden shadow-sm xl:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">You're logged in!</div>
				</div>
			</div>
		</div>
	</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
	},
};
</script>
