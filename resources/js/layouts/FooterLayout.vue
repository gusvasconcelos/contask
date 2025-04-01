<template>
    <footer class="w-full border-t py-6">
        <div class="container flex flex-col items-center justify-between gap-4 md:flex-row mx-auto">
            <p class="text-center text-sm text-muted-foreground md:text-left">
                &copy; {{ new Date().getFullYear() }} Contask. Todos os direitos reservados.
            </p>
            <div class="flex gap-4">
                <a href="/terms" class="text-sm text-muted-foreground hover:underline">
                    Termos de Serviço
                </a>
                <a href="/privacy" class="text-sm text-muted-foreground hover:underline">
                    Política de Privacidade
                </a>
            </div>
        </div>
    </footer>
</template>

<script setup>

</script>
