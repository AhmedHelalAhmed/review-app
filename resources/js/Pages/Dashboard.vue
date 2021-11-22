<template>
    <Head title="Dashboard"/>
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
            {{ languages.reviews }}
        </template>
        <div class="row m-2">
            <div class="col-12 m-2 mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Reviews search"
                           aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary  c-primary" type="button" id="button-addon2"><i
                            class="fab fas fa-search"></i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-2 m-2">
                <button type="button" class="btn shade f-primary btn-block fnt-xxs">primary
                    <div class="ripple-container"></div>
                </button>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col col-xl-12 col-md-12 col-sm-12 p-2">
                    <div class="card shade c-grey">
                        <h5 class="card-header c-primary">
                            Title
                        </h5>
                        <div class="card-body">
                            <p class="c-main fnt-code">Author name</p>
                            <p>here is the review</p>
                        </div>

                        <div class="card-footer text-muted c-white">
                            <a href="http://www.google.com" class="inline">
                                Link
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import {Head} from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        AppLayout,
        Head,
    },
    props: {
        languages: Object,

    }
})
</script>
