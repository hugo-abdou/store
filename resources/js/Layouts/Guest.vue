<template>
	<div class="min-h-screen flex flex-col justify-center items-center pt-6 bg-gray-100">
		<div
			class="flex max-w-sm w-full mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl"
		>
			<div
				class="hidden bg-cover lg:block lg:w-1/2"
				style="background-image:url('https://images.unsplash.com/photo-1606660265514-358ebbadc80d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80')"
			></div>
			<div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
				<Link href="/" class="mx-auto w-max block">
					<BreezeApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
				</Link>

				<p class="text-xl text-center text-gray-600 dark:text-gray-200">Welcome back!</p>
				<slot />
			</div>
		</div>
	</div>
</template>

<script>
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
	components: {
		BreezeApplicationLogo,
		Link,
	},
};
</script>
