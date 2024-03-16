<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '../Components/ApplicationLogo.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('hidden');
    document.getElementById('docs-card')?.classList.add('row-span-1');
    document.getElementById('docs-card-content')?.classList.add('flex-row');
    document.getElementById('background')?.classList.add('hidden');
}
</script>
<template>
    <Head title="Welcome" />
    <div class="flex flex-col animate-fade-in">
        <nav class="bg-slate-200 shadow-sm" v-if="canLogin">
            <div class="py-2 mx-10 flex justify-between">
                <section>
                    <a :href="route('dashboard')" class="flex items-center">
                        <ApplicationLogo class="h-7 w-7 mr-2" />
                    </a>
                </section>
                <section class="flex space-x-4">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-gray-800 hover:text-blue-600 fade-in-link">
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link :href="route('login')" class="text-gray-800 hover:text-blue-600 fade-in-link">
                            Log in
                        </Link>
                        <Link v-if="canRegister" :href="route('register')" class="text-gray-800 hover:text-blue-600 fade-in-link">
                            Register
                        </Link>
                    </template>
                </section>
            </div>
        </nav>
        <main class="mt-20 flex flex-col items-center">
            <section class="text-end my-10">
                <h1 id="header" class="text-6xl font-bold text-gray-900 animate-fade-left">Welcome to TMS</h1>
                <p id="sub-header" class="text-xl text-gray-600 animate-fade-left">A simple Thesis Management System</p>
                <p id="subtitle" class="font-light text-sm text-gray-600 animate-fade-left">An open source project by KenPrz</p>
            </section>
            <section class="w-1/2 flex justify-around">
                <a class="text-black hover:text-blue-500 hover:-translate-y-1 transition-all duration-300 ease-in-out fade-in-link" href="#">docs</a>
                <a class="text-black hover:text-blue-500 hover:-translate-y-1 transition-all duration-300 ease-in-out fade-in-link" href="#">github</a>
                <a class="text-black hover:text-blue-500 hover:-translate-y-1 transition-all duration-300 ease-in-out fade-in-link" href="#">about</a>
                <a class="text-black hover:text-blue-500 hover:-translate-y-1 transition-all duration-300 ease-in-out fade-in-link" href="#">contact</a>
            </section>
        </main>
    </div>
</template>

<style scoped>
    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate-fade-left {
        animation: fadeInLeft 1s ease-out;
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fade-in-link {
        opacity: 0;
        animation: fadeInLink 1.5s forwards;
    }

    @keyframes fadeInLink {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>

