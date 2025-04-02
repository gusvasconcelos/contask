<script setup lang="ts">
import { useForm, usePage } from '@inertiajs/vue3';

interface User {
    id: number;
    name: string;
    email: string;
}

interface Props {
    showDrawerButton?: boolean;
    showSearch?: boolean;
    showAuthButtons?: boolean;
}

const props = withDefaults(defineProps<Props>(), {
    showDrawerButton: false,
    showSearch: false,
    showAuthButtons: false,
});

const user = usePage().props.auth.user as User;
const isAuthenticated = !!user;

const logout = () => {
    useForm({}).post(route('logout'));
};
</script>

<template>
    <div
        class="navbar fixed top-0 z-50 w-full border-b bg-base-100 backdrop-blur-sm supports-[backdrop-filter]:bg-base-100/60"
    >
        <div class="container mx-auto">
            <div class="flex-1">
                <label
                    v-if="showDrawerButton"
                    for="drawer"
                    class="btn btn-ghost drawer-button lg:hidden"
                >
                    <i class="feather-menu h-5 w-5"></i>
                </label>
                <a
                    v-if="isAuthenticated"
                    href="/dashboard"
                    class="btn btn-ghost text-xl font-bold text-primary"
                    >Contask</a
                >
                <a
                    v-else
                    href="/"
                    class="btn btn-ghost text-xl font-bold text-primary"
                    >Contask</a
                >
            </div>
            <div class="flex gap-4">
                <div v-if="showSearch" class="form-control">
                    <input
                        type="text"
                        placeholder="Pesquisar..."
                        class="input input-bordered w-24 md:w-auto"
                    />
                </div>

                <div
                    v-if="showAuthButtons && !isAuthenticated"
                    class="flex gap-2"
                >
                    <a href="/login" class="btn btn-outline">Login</a>
                    <a href="/register" class="btn btn-primary">Register</a>
                </div>

                <div v-if="isAuthenticated" class="dropdown dropdown-end">
                    <div
                        tabindex="0"
                        role="button"
                        class="avatar btn btn-circle btn-ghost"
                    >
                        <div class="w-10 rounded-full">
                            <img
                                alt="Avatar do usuário"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                            />
                        </div>
                    </div>
                    <ul
                        tabindex="0"
                        class="menu dropdown-content menu-sm z-[1] mt-3 w-52 rounded-box bg-base-100 p-2 shadow"
                    >
                        <li>
                            <a class="justify-between">
                                Perfil
                                <span class="badge badge-primary">Novo</span>
                            </a>
                        </li>
                        <li><a>Configurações</a></li>
                        <li><a @click="logout">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.feather-menu {
    width: 20px;
    height: 20px;
}
</style>
