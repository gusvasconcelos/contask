<script setup lang="ts">
import LoginForm from '@/components/forms/auth/LoginForm.vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
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
                <h1 class="card-title text-2xl font-bold">Entrar</h1>
                <p class="card-description text-muted-foreground mb-4 text-sm">
                    Entre com seu e-mail e senha para acessar sua conta
                </p>
                <LoginForm />
                <div class="form-group mb-4 grid gap-2">
                    <span class="text-muted-foreground text-sm"
                        >Não tem uma conta?
                        <a href="/register" class="text-primary hover:underline"
                            >Registre-se</a
                        ></span
                    >
                </div>
            </div>
        </div>
    </div>
</template>
