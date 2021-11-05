<!-- This example requires Tailwind CSS v2.0+ -->
<template>
	<PerfrectScrollbar tagname="nav" aria-label="main" class="overflow-hidden">
		<table class="min-w-full divide-y divide-gray-200 dark:divide-dark-eval-1">
			<thead class="bg-gray-50 dark:bg-dark-eval-1">
				<tr>
					<template v-for="(field, index) in fields" :key="index">
						<th
							scope="col"
							class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
						>
							<slot
								:name="`head(${field.key})`"
								:row="{...field,index,value: field.name}"
								v-if="$slots[`head(${field.key})`]"
							/>
							<slot
								v-else-if="$slots['head()']"
								:row="{...field,index,value: field.name}"
								:name="`head()`"
							/>
							<span v-else>{{field.name}}</span>
						</th>
					</template>
				</tr>
			</thead>
			<tbody class="bg-white dark:bg-dark-eval-3 divide-y divide-gray-200 dark:divide-dark-eval-1">
				<tr v-if="!data.length">
					<td
						class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-200 text-center"
						colspan="12"
					>no records found</td>
				</tr>
				<tr v-else v-for="(row,index) in data" :key="index">
					<template v-for="(field, index) in fields" :key="index">
						<td class="px-6 py-3 text-left text-gray-500 dark:text-gray-300 tracking-wider">
							<slot
								:name="`cell(${field.key})`"
								:row="{...row,index, value: row[field.name]}"
								v-if="$slots[`cell(${field.key})`]"
							/>
							<slot
								v-else-if="$slots['cell()']"
								:row="{...row,index,value: row[field.name]}"
								:name="`cell()`"
							/>
							<span v-else>{{row[field.name]}}</span>
						</td>
					</template>
				</tr>
			</tbody>
		</table>
	</PerfrectScrollbar>
</template>

<script lang='ts'>
import PerfrectScrollbar from "@/Components/PerfectScrollbar.vue";
export default {
	components: { PerfrectScrollbar },
	props: {
		fields: {
			type: Array,
			default: [{ key: "name", name: "name" }],
		},
		data: Array,
	},
};
</script>