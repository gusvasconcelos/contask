<script setup lang="ts">
import Navbar from '@/components/Navbar.vue';
import { useToast } from '@/composables/useToast';
import { useForm, usePage } from '@inertiajs/vue3';

const user = usePage().props.auth.user;

const toast = useToast();

const logout = () => {
    useForm({}).post(route('logout'), {
        onSuccess: () => {
            toast.success('Logout realizado com sucesso!');
        },
        onError: () => {
            toast.error('Erro ao realizar logout!');
        },
    });
};
</script>

<template>
    <div class="relative min-h-screen">
        <!-- Navbar - fixed at top -->
        <Navbar
            :showSearch="true"
            :showDrawerButton="true"
            class="fixed left-0 right-0 top-0 z-30"
        />

        <div class="drawer lg:drawer-open">
            <!-- Drawer toggle checkbox -->
            <input id="drawer" type="checkbox" class="drawer-toggle" />

            <!-- Page content -->
            <div class="drawer-content flex min-h-screen flex-col bg-base-200">
                <!-- Main content with padding for navbar -->
                <main class="flex-1 p-6 pt-20">
                    <div class="mx-auto w-full">
                        <slot />
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>

<style>
.drawer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow-y: auto;
}

/* Ajusta o padding do conteúdo para não ficar sob o footer */
.drawer-content {
    padding-bottom: 4rem; /* Ajuste conforme a altura do seu footer */
}
</style>
