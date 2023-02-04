<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';
import {Table} from "@protonemedia/inertiajs-tables-laravel-query-builder";
import PrimaryButton from "@/Components/PrimaryButton.vue";

defineProps(["offices"])
</script>

<template>
    <Head title="Offices"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Offices</h2>
        </template>


        <div class="px-4 md:px-16 mt-8">
            <PrimaryButton class="mb-2" @click="">
                <Link :href="route('office.create')">
                    Create Office
                </Link>
            </PrimaryButton>
            <Table :resource="offices"/>
        </div>
    </AuthenticatedLayout>
</template>
