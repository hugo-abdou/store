<template>
	<div class="flex items-center justify-between overflow-hidden flex-shrink-0 px-3">
		<Link :href="route('dashboard')" class="inline-flex items-center gap-2">
			<span class="sr-only">K-UI</span>

			<ApplicationLogo aria-hidden="true" class="min-w-[12rem] h-auto" />
		</Link>

		<Button
			iconOnly
			variant="secondary"
			type="button"
			v-slot="{ iconSizeClasses }"
			v-show="sidebarState.isOpen || sidebarState.isHovered"
			@click="sidebarState.isOpen = !sidebarState.isOpen"
			:srText="sidebarState.isOpen ? 'Close sidebar' : 'Open sidebar'"
		>
			<svg
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				:class="['hidden hover:text-indigo-400 lg:block', iconSizeClasses]"
			>
				<circle cx="12" cy="12" r="8" />
				<circle v-show="sidebarState.isOpen" cx="12" cy="12" r="3" />
			</svg>
			<XIcon aria-hidden="true" v-show="sidebarState.isOpen" :class="['lg:hidden', iconSizeClasses]" />
		</Button>
	</div>
</template>

<script>
import { Link, usePage } from "@inertiajs/inertia-vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Button from "@/Components/Button.vue";
import { XIcon, ArrowLeftIcon, ArrowRightIcon } from "@heroicons/vue/outline";

import { sidebarState } from "@/Composables";

export default {
	components: {
		Link,
		ApplicationLogo,
		Button,
		ArrowLeftIcon,
		ArrowRightIcon,
		XIcon,
	},

	setup() {
		return {
			sidebarState,
		};
	},
};
</script>
