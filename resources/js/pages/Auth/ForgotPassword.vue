<script setup lang="ts">
import ForgotPasswordForm from '@/components/forms/auth/ForgotPasswordForm.vue';

defineProps({
    status: {
        type: String,
    },
});
</script>

<template>
    <div
        class="bg-muted/40 flex min-h-screen flex-col items-center justify-center p-4"
    >
        <a
            href="/"
            class="mb-8 flex items-center text-2xl font-bold text-primary"
        >
            Contask
        </a>
        <div class="card w-full max-w-md bg-base-100 shadow-lg">
            <div class="card-body">
                <h1 class="card-title text-2xl font-bold">
                    Esqueceu sua senha?
                </h1>
                <p class="card-description text-muted-foreground mb-4 text-sm">
                    Digite seu email para receber um link de redefinição de
                    senha.
                </p>
                <ForgotPasswordForm />
                <p class="text-muted-foreground text-sm">
                    Lembrou sua senha?
                    <a href="/login" class="text-primary">Faça login</a>
                </p>
            </div>
        </div>
    </div>
</template>
