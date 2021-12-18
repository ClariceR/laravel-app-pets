<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-slate-100 dark:bg-slate-800 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-200 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-200 underline">
                    Register
                </Link>
            </template>
        </div>

        <article>
            <h1 class="text-9xl text-slate-100">mapets</h1>
            <h1 class="text-3xl text-red-500">🌱 🌱 🌱 🌻 🌱 🌱 🌱 🌱 🌱 🌱 🌱 🌱</h1>

            <!-- <button class="bg-slate-100 rounded-full text-xl uppercase px-6 py-2">Login</button> -->
        </article>

        
    </div>
</template>



<script>
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
      Head,
      Link,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
}
</script>
