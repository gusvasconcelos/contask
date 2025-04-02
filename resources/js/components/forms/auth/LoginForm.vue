<script setup lang="ts">
import { useToast } from '@/composables/useToast';
import { useForm } from '@inertiajs/vue3';

const toast = useToast();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
        onError: () => {
            toast.error('Erro ao realizar login!');
        },
        onSuccess: () => {
            toast.success('Login realizado com sucesso!');
        },
    });
};
</script>

<template>
    <form @submit.prevent="submit">
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
            <div class="flex items-center justify-between">
                <label for="password">Senha</label>
                <a href="/forgot-password" class="text-primary hover:underline"
                    >Esqueceu sua senha?</a
                >
            </div>
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
            <button type="submit" class="btn btn-primary w-full">Entrar</button>
        </div>
    </form>
</template>
