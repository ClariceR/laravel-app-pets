<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <!-- <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Pets
            </h2>
        </template> -->

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <Link
                                class="
                                    px-6
                                    py-2
                                    mb-2
                                    text-green-100
                                    bg-green-500
                                    rounded
                                "
                                :href="route('pets.create')"
                            >
                                Create a Pet
                            </Link>
                        </div>
                        <table>
                            <thead class="font-bold bg-gray-300 border-b-2">
                                <td class="px-4 py-2">ID</td>
                                <td class="px-4 py-2">Avatar</td>
                                <td class="px-4 py-2">Name</td>
                                <td class="px-4 py-2">Action</td>
                            </thead>
                            <tbody>
                                <tr v-for="pet in pets.data" :key="pet.id">
                                    <td class="px-4 py-2">{{ pet.id }}</td>
                                    <td class="px-4 py-2">{{ pet.avatar }}</td>
                                    <td class="px-4 py-2">
                                        {{ pet.name }}
                                    </td>
                                    <td class="px-4 py-2 font-extrabold">
                                        <Link
                                            class="text-green-700"
                                            :href="route('pets.edit', pet.id)"
                                        >
                                            Edit
                                        </Link>
                                        <Link
                                            @click="destroy(pet.id)"
                                            class="text-red-700"
                                            >Release</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <pagination :links="pets.links" />
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeNavLink,
        Link,
    },
    props: {
        pets: Object,
    },
    methods: {
        destroy(id) {
            this.$inertia.delete(route("pets.destroy", id));
        },
    },
};
</script>