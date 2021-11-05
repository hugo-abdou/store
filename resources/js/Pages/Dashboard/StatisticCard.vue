<template>
	<div class="p-4 md:w-1/4 sm:w-1/2 w-full">
		<card class="font-medium">
			<slot name="icon" />

			<h2 class="text-3xl">{{value}}</h2>
			<p class="leading-relaxed text-lg">{{text}}</p>
		</card>
	</div>
</template>

<script>
import Card from "@/Components/Card.vue";
export default {
	props: {
		value: String | Number,
		text: String,
	},
	components: { Card },
};
</script>