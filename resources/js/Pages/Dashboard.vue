<template>
	<Head title="Dashboard" />

	<BreezeAuthenticatedLayout>
		<template #header>Dashboard</template>

		<div class="py-12">
			<div class="max-w-4xl mx-auto">
				<div class="bg-white dark:bg-dark-eval-3 overflow-hidden shadow-sm xl:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">Welcome to your store</div>
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
