<script setup lang="ts">
import { useToast } from '@/composables/useToast';
import { useForm } from '@inertiajs/vue3';

const toast = useToast();

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password'),
        onError: () => {
            toast.error('Erro ao registrar!');
        },
        onSuccess: () => {
            toast.success('Registro realizado com sucesso!');
        },
    });
};
</script>

<template>
    <form @submit.prevent="submit">
        <div class="form-group mb-4 grid gap-2">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                v-model="form.name"
                class="input input-bordered w-full"
                :class="{ 'input-error': form.errors.name }"
                required
                placeholder="Seu nome"
            />
            <div v-if="form.errors.name" class="text-sm text-error">
                {{ form.errors.name }}
            </div>
        </div>
        <div class="form-group mb-4 grid gap-2">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                v-model="form.email"
                class="input input-bordered w-full"
                :class="{ 'input-error': form.errors.email }"
                required
                placeholder="seu-email@email.com"
            />
            <div v-if="form.errors.email" class="text-sm text-error">
                {{ form.errors.email }}
            </div>
        </div>
        <div class="form-group mb-4 grid gap-2">
            <label for="password">Senha</label>
            <input
                type="password"
                id="password"
                v-model="form.password"
                class="input input-bordered w-full"
                :class="{ 'input-error': form.errors.password }"
                required
                placeholder="********"
            />
            <div v-if="form.errors.password" class="text-sm text-error">
                {{ form.errors.password }}
            </div>
        </div>
        <div class="form-group mb-4 grid gap-2">
            <label for="password_confirmation">Confirmar senha</label>
            <input
                type="password"
                id="password_confirmation"
                v-model="form.password_confirmation"
                class="input input-bordered w-full"
                :class="{ 'input-error': form.errors.password_confirmation }"
                required
                placeholder="********"
            />
            <div
                v-if="form.errors.password_confirmation"
                class="text-sm text-error"
            >
                {{ form.errors.password_confirmation }}
            </div>
        </div>
        <div class="form-group mb-4 grid gap-2">
            <button type="submit" class="btn btn-primary w-full">
                Registrar
            </button>
        </div>
    </form>
</template>
