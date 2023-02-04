<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const cards = [
    {id: 1, name: "All Visitors"},
    {id: 2, name: "Today's Visitors"},
    {id: 3, name: "All Offices"},
    {id: 4, name: "Open Offices"},
];
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white hover:bg-gray-100/90 ring-1 ring-gray-100 overflow-hidden shadow-md rounded-md" v-for="card in cards" :key="card.id">
                    <div class="p-6 text-gray-900">{{ card.name }}</div>
                    <div class="h-8 w-full bg-gray-100 text-sm hover:text-gray-900 flex items-center text-left pl-4 hover:bg-gray-200 cursor-pointer transition ease-in delay-150">
                        View More
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
