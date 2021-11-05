<template>
	<Head title="Products" />

	<BreezeAuthenticatedLayout>
		<template #header>Products</template>
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

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
		Card,
		MTable,
	},
	setup() {
		const { fields, products } = useGetProducts();
		return { fields, products };
	},
};
</script>
