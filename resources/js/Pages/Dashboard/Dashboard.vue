<template>
	<Head title="Dashboard" />

	<BreezeAuthenticatedLayout>
		<template #header>Dashboard</template>

		<div class="container px-5 mx-auto">
			<div class="flex flex-wrap text-center">
				<statistic-card :value="usersCount" text="Users">
					<template #icon>
						<svg
							fill="none"
							stroke="currentColor"
							stroke-width="2"
							class="text-indigo-500 w-12 h-12 mb-3 inline-block"
							viewBox="0 0 24 24"
						>
							<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
							<circle cx="9" cy="7" r="4" />
							<path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75" />
						</svg>
					</template>
				</statistic-card>
			</div>
		</div>
	</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import StatisticCard from "./StatisticCard.vue";
import useGetDashboardData from "@/Composables/useGetDashboardData";

export default {
	components: {
		BreezeAuthenticatedLayout,
		Head,
		StatisticCard,
	},
	setup() {
		const { usersCount } = useGetDashboardData();
		return { usersCount };
	},
};
</script>
