<template>
	<div>
		<div class="min-h-screen bg-style bg-gray-100 dark:bg-dark-bg">
			<nav-bar />
			<!-- side bar -->
			<side-bar />

			<!-- Page Heading -->
			<header
				:class="[
					'duration-100',
					{
                		'md:ml-64': sidebarState.isOpen || sidebarState.isHovered,
                		'md:ml-16':!sidebarState.isOpen && !sidebarState.isHovered,
            		}
				]"
				v-if="$slots.header"
			>
				<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
					<h2 class="font-semibold text-xl text-gray-500 leading-tight">
						<slot name="header" />
					</h2>
				</div>
			</header>

			<!-- Page Content -->
			<main
				:class="[
					'duration-100',
					{
                		'md:ml-64': sidebarState.isOpen || sidebarState.isHovered,
                		'md:ml-16':!sidebarState.isOpen && !sidebarState.isHovered,
            		}
				]"
			>
				<slot />
			</main>
		</div>
	</div>
</template>

<script>
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";
import SideBar from "@/Components/SideBar.vue";
import NavBar from "@/Components/NavBar.vue";
import { sidebarState } from "@/Composables";

export default {
	components: {
		BreezeApplicationLogo,
		BreezeDropdown,
		BreezeDropdownLink,
		BreezeNavLink,
		BreezeResponsiveNavLink,
		Link,
		SideBar,
		NavBar,
	},

	setup() {
		return { sidebarState };
	},
};
</script>

