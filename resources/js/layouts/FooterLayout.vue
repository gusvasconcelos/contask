<template>
    <footer class="w-full border-t py-6">
        <div
            class="container mx-auto flex flex-col items-center justify-between gap-4 md:flex-row"
        >
            <p class="text-muted-foreground text-center text-sm md:text-left">
                &copy; {{ new Date().getFullYear() }} Contask. Todos os direitos
                reservados.
            </p>
            <div class="flex gap-4">
                <a
                    href="/terms"
                    class="text-muted-foreground text-sm hover:underline"
                >
                    Termos de Serviço
                </a>
                <a
                    href="/privacy"
                    class="text-muted-foreground text-sm hover:underline"
                >
                    Política de Privacidade
                </a>
            </div>
        </div>
    </footer>
</template>

<script setup lang="ts"></script>
