<template>
    <Head title="Dashboard" />
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <template #breadcrumb>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">
                    Dashboard
                </li>
            </ol>
        </template>
        <template #subTitle>
            subTitle
        </template>
        <div class="row m-2 mb-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                Hello world
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
    },
})
</script>
