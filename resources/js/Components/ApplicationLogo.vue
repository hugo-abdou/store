<template>
	<img
		:src="isDark ?'/images/logo-light.png':'/images/logo-dark.png'"
		class="w-full duration-200"
		alt="groadis logo"
	/>
</template>
<script>
import { isDark } from "@/Composables";

export default {
	setup() {
		return { isDark };
	},
};
</script>
