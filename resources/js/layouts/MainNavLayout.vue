<template>
    <header
        class="bg-background/95 supports-[backdrop-filter]:bg-background/60 sticky top-0 z-50 w-full border-b backdrop-blur"
    >
        <div class="container mx-auto flex h-16 items-center justify-between">
            <div class="mr-4 flex items-center">
                <a href="/" class="text-primary text-xl font-bold">Contask</a>
            </div>
            <div class="ml-auto flex items-center space-x-4">
                <a href="/login" class="btn btn-outline">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts"></script>
