<script setup lang="ts">
import { useToast } from '@/composables/useToast';
import { useForm } from '@inertiajs/vue3';

const toast = useToast();

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'), {
        onFinish: () => form.reset('email'),
        onError: () => {
            toast.error('Erro ao enviar link de redefinição!');
        },
        onSuccess: () => {
            toast.success('Link de redefinição enviado com sucesso!');
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
                placeholder="seu-email@email.com"
            />
            <div v-if="form.errors.email" class="text-sm text-error">
                {{ form.errors.email }}
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-4">
            Enviar link de redefinição
        </button>
    </form>
</template>
