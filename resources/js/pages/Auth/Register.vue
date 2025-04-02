<script setup lang="ts">
import RegisterForm from '@/components/forms/auth/RegisterForm.vue';
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
                <h1 class="card-title text-2xl font-bold">Criar uma conta</h1>
                <p class="card-description text-muted-foreground mb-4 text-sm">
                    Crie uma conta para começar a usar o Contask
                </p>
                <RegisterForm />
                <div class="form-group mb-4 grid gap-2">
                    <span class="text-muted-foreground text-sm"
                        >Já tem uma conta?
                        <a href="/login" class="text-primary hover:underline"
                            >Faça login</a
                        ></span
                    >
                </div>
            </div>
        </div>
    </div>
</template>
