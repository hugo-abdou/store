<template>
	<Head title="Register" />
	<a
		href="#"
		class="flex items-center justify-center mt-4 text-gray-600 border rounded-lg dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
	>
		<div class="px-4 py-2">
			<svg class="w-6 h-6" viewBox="0 0 40 40">
				<path
					d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
					fill="#FFC107"
				/>
				<path
					d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
					fill="#FF3D00"
				/>
				<path
					d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
					fill="#4CAF50"
				/>
				<path
					d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
					fill="#1976D2"
				/>
			</svg>
		</div>

		<span class="w-5/6 px-4 py-3 font-bold text-center">Sign in with Google</span>
	</a>
	<div class="flex items-center justify-between mt-4">
		<span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

		<div
			class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline"
		>or login with email</div>

		<span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
	</div>
	<BreezeValidationErrors class="mb-4" />

	<form @submit.prevent="submit">
		<div>
			<BreezeLabel for="name" value="Name" />
			<BreezeInput
				id="name"
				type="text"
				class="mt-1 block w-full"
				v-model="form.name"
				required
				autofocus
				autocomplete="name"
			/>
		</div>

		<div class="mt-4">
			<BreezeLabel for="email" value="Email" />
			<BreezeInput
				id="email"
				type="email"
				class="mt-1 block w-full"
				v-model="form.email"
				required
				autocomplete="username"
			/>
		</div>

		<div class="mt-4">
			<BreezeLabel for="password" value="Password" />
			<BreezeInput
				id="password"
				type="password"
				class="mt-1 block w-full"
				v-model="form.password"
				required
				autocomplete="new-password"
			/>
		</div>

		<div class="mt-4">
			<BreezeLabel for="password_confirmation" value="Confirm Password" />
			<BreezeInput
				id="password_confirmation"
				type="password"
				class="mt-1 block w-full"
				v-model="form.password_confirmation"
				required
				autocomplete="new-password"
			/>
		</div>

		<div class="flex items-center justify-end mt-4">
			<Link
				:href="route('login')"
				class="underline text-sm text-gray-600 hover:text-gray-900"
			>Already registered?</Link>

			<BreezeButton
				class="ml-4"
				:class="{ 'opacity-25': form.processing }"
				:disabled="form.processing"
			>Register</BreezeButton>
		</div>
	</form>
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
	layout: BreezeGuestLayout,

	components: {
		BreezeButton,
		BreezeInput,
		BreezeLabel,
		BreezeValidationErrors,
		Head,
		Link,
	},

	data() {
		return {
			form: this.$inertia.form({
				name: "",
				email: "",
				password: "",
				password_confirmation: "",
				terms: false,
			}),
		};
	},

	methods: {
		submit() {
			this.form.post(this.route("register"), {
				onFinish: () =>
					this.form.reset("password", "password_confirmation"),
			});
		},
	},
};
</script>
