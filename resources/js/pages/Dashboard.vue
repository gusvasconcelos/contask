<script setup lang="ts">
import DashboardLayout from '@/layouts/DashboardLayout.vue';

defineOptions({
    layout: DashboardLayout,
    title: 'Dashboard',
});
</script>

<template>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Stats Cards -->
            <div class="stats shadow">
                <div class="stat">
                    <div class="stat-title">Tarefas Pendentes</div>
                    <div class="stat-value text-primary">12</div>
                    <div class="stat-desc">21% mais que no mês passado</div>
                </div>
            </div>

            <div class="stats shadow">
                <div class="stat">
                    <div class="stat-title">Tarefas Concluídas</div>
                    <div class="stat-value text-success">48</div>
                    <div class="stat-desc">↗︎ 35% mais que no mês passado</div>
                </div>
            </div>

            <div class="stats shadow">
                <div class="stat">
                    <div class="stat-title">Equipes Ativas</div>
                    <div class="stat-value">5</div>
                    <div class="stat-desc">↘︎ 1 nova equipe este mês</div>
                </div>
            </div>

            <div class="stats shadow">
                <div class="stat">
                    <div class="stat-title">Membros</div>
                    <div class="stat-value text-secondary">24</div>
                    <div class="stat-desc">↗︎ 3 novos membros</div>
                </div>
            </div>
        </div>

        <!-- Recent Tasks -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Tarefas Recentes</h2>
                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <thead>
                            <tr>
                                <th>Tarefa</th>
                                <th>Status</th>
                                <th>Prazo</th>
                                <th>Responsável</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Implementar novo design</td>
                                <td>
                                    <div class="badge badge-warning">
                                        Em progresso
                                    </div>
                                </td>
                                <td>2024-03-20</td>
                                <td>João Silva</td>
                            </tr>
                            <tr>
                                <td>Revisar documentação</td>
                                <td>
                                    <div class="badge badge-success">
                                        Concluído
                                    </div>
                                </td>
                                <td>2024-03-18</td>
                                <td>Maria Santos</td>
                            </tr>
                            <tr>
                                <td>Corrigir bugs reportados</td>
                                <td>
                                    <div class="badge badge-error">
                                        Atrasado
                                    </div>
                                </td>
                                <td>2024-03-15</td>
                                <td>Pedro Oliveira</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
