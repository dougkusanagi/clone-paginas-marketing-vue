<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import FormClonePage from "@/Components/FormClonePage.vue";
import { Head, router } from "@inertiajs/vue3";
import { ref } from "vue";

const link_url_editor = ref("");

function clone() {
    router.post(
        route("cloned-page.store"),
        { url: url.value },
        {
            onSuccess: () => alert("Pagina clonada com sucesso!"),
        }
    );
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="p-6 overflow-hidden text-gray-900 bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg dark:text-gray-100"
                >
                    <form-clone-page />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
