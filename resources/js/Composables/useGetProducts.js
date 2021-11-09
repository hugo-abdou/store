import { usePage } from "@inertiajs/inertia-vue3";

const fields = [
    { key: "title", name: "title" },
    { key: "slug", name: "slug" },
    // { key: "summary", name: "summary" },
    // { key: "condition", name: "condition" },
    { key: "status", name: "status" },
];

export default function useGetProducts() {
    const products = usePage().props.value.products || [];

    return { products, fields };
}
