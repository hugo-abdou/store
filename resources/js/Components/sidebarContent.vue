<template>
	<PerfrectScrollbar
		tagname="nav"
		aria-label="main"
		class="relative flex flex-col flex-1 max-h-full gap-4 px-3 pt-1 overflow-hidden"
	>
		<SidebarLink title="Dashboard" :href="route('dashboard')" :active="route().current('dashboard')">
			<template #icon>
				<HomeIcon class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
			</template>
		</SidebarLink>
		<SidebarLink title="Users" :href="route('users')" :active="route().current('users')">
			<template #icon>
				<UserGroupIcon class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
			</template>
		</SidebarLink>

		<SidebarCollapsible title="Dropdown">
			<SidebarCollapsibleItem href="#" title="Link 1" :active="false" />
		</SidebarCollapsible>
	</PerfrectScrollbar>
</template>

<script>
import PerfrectScrollbar from "@/Components/PerfectScrollbar.vue";
import SidebarLink from "@/Components/SidebarLink.vue";
import { HomeIcon, UserGroupIcon } from "@heroicons/vue/outline";

import SidebarCollapsible from "@/Components/SidebarCollapsible.vue";
import SidebarCollapsibleItem from "@/Components/SidebarCollapsibleItem.vue";

export default {
	components: {
		PerfrectScrollbar,
		HomeIcon,
		UserGroupIcon,
		SidebarLink,
		SidebarCollapsible,
		SidebarCollapsibleItem,
	},
};
</script>
