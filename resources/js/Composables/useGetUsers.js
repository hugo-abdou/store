import { usePage } from "@inertiajs/inertia-vue3";

const fields = [
    { key: "name", name: "name" },
    { key: "email", name: "email" },
];

export default function useGetUsers() {
    const users = usePage().props.value.users || [];

    return { users, fields };
}
