<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
</script>

<template>
    <HomeLayout>
        <div class="flex min-h-screen flex-col items-center justify-center">
            <main class="flex-1">
                <section class="md:py-18 w-full py-12 lg:py-24 xl:py-32">
                    <div class="container px-4 md:px-6">
                        <div
                            class="grid gap-6 lg:grid-cols-2 lg:gap-12 xl:grid-cols-2"
                        >
                            <div class="flex flex-col justify-center space-y-4">
                                <div class="space-y-2">
                                    <h1
                                        class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none"
                                    >
                                        Simplifique a gestão do seu escritório
                                        de contabilidade
                                    </h1>
                                    <p
                                        class="text-muted-foreground max-w-[600px] md:text-xl"
                                    >
                                        Gerencie equipes, tarefas e prazos com
                                        eficiência. Comunique-se com seus
                                        clientes de forma integrada.
                                    </p>
                                </div>
                                <div
                                    class="flex flex-col gap-2 min-[400px]:flex-row"
                                >
                                    <a href="/register" class="btn btn-primary">
                                        Começar agora
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right"
                                        >
                                            <path d="M5 12h14" />
                                            <path d="M12 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-center justify-center">
                                <img
                                    src="/dashboard-preview.svg"
                                    alt="Dashboard Preview"
                                    width="{550}"
                                    height="{550}"
                                    class="rounded-lg object-cover"
                                />
                            </div>
                        </div>
                    </div>
                </section>
                <section class="md:py-18 bg-muted w-full py-12 lg:py-24">
                    <div class="container px-4 md:px-6">
                        <div
                            class="flex flex-col items-center justify-center space-y-4 text-center"
                        >
                            <div class="space-y-2">
                                <h2
                                    class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl"
                                >
                                    Recursos principais
                                </h2>
                                <p
                                    class="text-muted-foreground max-w-[900px] md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed"
                                >
                                    Tudo o que você precisa para gerenciar seu
                                    escritório de contabilidade com eficiência
                                </p>
                            </div>
                        </div>
                        <div
                            class="mx-auto grid max-w-5xl grid-cols-1 gap-6 py-12 md:grid-cols-2 lg:grid-cols-3"
                        >
                            <div
                                class="flex flex-col items-center space-y-2 rounded-lg border p-6"
                            >
                                <div
                                    class="text-primary-foreground flex h-12 w-12 items-center justify-center rounded-lg bg-primary"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        strokeWidth="2"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        className="h-6 w-6"
                                    >
                                        <path
                                            d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                                        ></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path
                                            d="M22 21v-2a4 4 0 0 0-3-3.87"
                                        ></path>
                                        <path
                                            d="M16 3.13a4 4 0 0 1 0 7.75"
                                        ></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">
                                    Gestão de Equipes
                                </h3>
                                <p class="text-muted-foreground text-center">
                                    Organize sua equipe, atribua tarefas e
                                    acompanhe o desempenho.
                                </p>
                            </div>
                            <div
                                class="flex flex-col items-center space-y-2 rounded-lg border p-6"
                            >
                                <div
                                    class="text-primary-foreground flex h-12 w-12 items-center justify-center rounded-lg bg-primary"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        strokeWidth="2"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        className="h-6 w-6"
                                    >
                                        <rect
                                            x="3"
                                            y="4"
                                            width="18"
                                            height="18"
                                            rx="2"
                                            ry="2"
                                        ></rect>
                                        <line
                                            x1="16"
                                            y1="2"
                                            x2="16"
                                            y2="6"
                                        ></line>
                                        <line
                                            x1="8"
                                            y1="2"
                                            x2="8"
                                            y2="6"
                                        ></line>
                                        <line
                                            x1="3"
                                            y1="10"
                                            x2="21"
                                            y2="10"
                                        ></line>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">
                                    Gerenciamento de Tarefas
                                </h3>
                                <p class="text-muted-foreground text-center">
                                    Crie, atribua e acompanhe tarefas com prazos
                                    e prioridades.
                                </p>
                            </div>
                            <div
                                class="flex flex-col items-center space-y-2 rounded-lg border p-6"
                            >
                                <div
                                    class="text-primary-foreground flex h-12 w-12 items-center justify-center rounded-lg bg-primary"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        strokeWidth="2"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        className="h-6 w-6"
                                    >
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                        ></path>
                                        <polyline
                                            points="22,6 12,13 2,6"
                                        ></polyline>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">
                                    Comunicação com Clientes
                                </h3>
                                <p class="text-muted-foreground text-center">
                                    Envie e-mails, compartilhe documentos e
                                    mantenha um histórico de comunicação.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </HomeLayout>
</template>
