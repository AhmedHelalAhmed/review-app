<template>
    <Head title="Welcome"/>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <Link :href="route('login')" class="text-gray-700 underline">
                            Log in
                        </Link>
                    </div>
                </div>

                <div class="ml-4 text-center text-gray-500  sm:ml-0">
                    <div v-if="canLogin">
                        <Link v-if="$page.props.user" :href="route('dashboard')" class="text-gray-700 underline">
                            Dashboard
                        </Link>
                    </div>

                    <Link v-if="canRegister" :href="route('register')" class="ml-4 text-gray-700 underline">
                        Register
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import {defineComponent} from 'vue'
import {Head, Link} from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

export default defineComponent({
    components: {
        AppLayout,
        Head,
        Link,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
})
</script>
