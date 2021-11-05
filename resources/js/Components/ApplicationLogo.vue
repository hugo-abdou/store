<template>
	<div class="overflow-hidden w-32">
		<img
			:src="isDark ?'/images/logo-light.png':'/images/logo-dark.png'"
			class="w-full object-cover duration-200"
			alt="groadis logo"
		/>
	</div>
</template>
<script>
import { isDark } from "@/Composables";

export default {
	setup() {
		return { isDark };
	},
};
</script>
