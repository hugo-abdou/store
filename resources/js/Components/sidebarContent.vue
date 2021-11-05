<template>
	<PerfrectScrollbar
		tagname="nav"
		aria-label="main"
		class="relative flex flex-col flex-1 max-h-full gap-4 px-3 overflow-hidden"
	>
		<SidebarLink title="Dashboard" :href="route('dashboard')" :active="route().current('dashboard')">
			<template #icon>
				<DatabaseIcon class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
			</template>
		</SidebarLink>

		<SidebarCollapsible title="Dropdown">
			<SidebarCollapsibleItem href="#" title="Link 1" :active="false" />
			<SidebarCollapsibleItem href="#" title="Link 2" :active="true" />
			<SidebarCollapsibleItem href="#" title="Link 3" :active="false" />
		</SidebarCollapsible>
	</PerfrectScrollbar>
</template>

<script>
import PerfrectScrollbar from "@/Components/PerfectScrollbar.vue";
import SidebarLink from "@/Components/SidebarLink.vue";
import { DatabaseIcon } from "@heroicons/vue/outline";

import SidebarCollapsible from "@/Components/SidebarCollapsible.vue";
import SidebarCollapsibleItem from "@/Components/SidebarCollapsibleItem.vue";

export default {
	components: {
		PerfrectScrollbar,
		DatabaseIcon,
		SidebarLink,
		SidebarCollapsible,
		SidebarCollapsibleItem,
	},
};
</script>
