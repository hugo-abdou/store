import { usePage } from "@inertiajs/inertia-vue3";

const fields = [
    { key: "name", name: "name" },
    { key: "price", name: "price" },
];

export default function useGetProducts() {
    const products = usePage().props.value.products || [];

    return { products, fields };
}
