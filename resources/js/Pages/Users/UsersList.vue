<template>
	<Head title="Users" />

	<BreezeAuthenticatedLayout>
		<template #header>Users</template>

		<card class="!p-0">
			<m-table :data="users" :fields="fields" />
		</card>
	</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import MTable from "@/Components/Table/MTable.vue";
import useGetUsers from "@/Composables/useGetUsers";
import Card from "@/Components/Card.vue";

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
		MTable,
		Card,
	},
	setup() {
		const { users, fields } = useGetUsers();

		return { users, fields };
	},
};
</script>
