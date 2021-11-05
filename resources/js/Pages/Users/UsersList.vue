<template>
	<Head title="Users" />

	<BreezeAuthenticatedLayout>
		<template #header>Users</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto px-2">
				<div class="bg-white dark:bg-dark-eval-3 shadow-sm rounded-lg overflow-hidden">
					<m-table :data="users" :fields="fields" />
				</div>
			</div>
		</div>
	</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import MTable from "@/Components/Table/MTable.vue";
import useGetUsers from "./Composables/useGetUsers";

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
		MTable,
	},
	setup() {
		const { users, fields } = useGetUsers();

		return { users, fields };
	},
};
</script>
