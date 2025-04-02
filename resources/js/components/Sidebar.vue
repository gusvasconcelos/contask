<script setup lang="ts">
import {
    CalendarIcon,
    ChartBarIcon,
    ChatBubbleLeftRightIcon,
    ChevronLeftIcon,
    ChevronRightIcon,
    ClipboardDocumentListIcon,
    EnvelopeIcon,
    HomeIcon,
    UserGroupIcon,
} from '@heroicons/vue/24/outline';
import { ref } from 'vue';

const isCollapsed = ref(false);
const activeItem = ref('Dashboard');

const toggleSidebar = () => {
    isCollapsed.value = !isCollapsed.value;
};

const setActiveItem = (itemName: string) => {
    activeItem.value = itemName;
};

const menuItems = [
    {
        name: 'Dashboard',
        icon: HomeIcon,
        href: route('dashboard'),
    },
    {
        name: 'Tarefas',
        icon: ClipboardDocumentListIcon,
        href: '#',
    },
    {
        name: 'Equipes',
        icon: UserGroupIcon,
        href: '#',
    },
    {
        name: 'Calendário',
        icon: CalendarIcon,
        href: '#',
    },
    {
        name: 'Comunicação',
        icon: ChatBubbleLeftRightIcon,
        href: '#',
    },
    {
        name: 'E-mails',
        icon: EnvelopeIcon,
        href: '#',
    },
    {
        name: 'Relatórios',
        icon: ChartBarIcon,
        href: '#',
    },
];
</script>

<template>
    <aside
        class="h-screen bg-base-100 transition-all duration-300"
        :class="{ 'w-64': !isCollapsed, 'w-20': isCollapsed }"
    >
        <div class="flex h-16 items-center justify-between px-4">
            <h1
                class="text-xl font-semibold text-primary"
                v-show="!isCollapsed"
            >
                Contask
            </h1>
            <div class="hidden lg:block">
                <button
                    @click="toggleSidebar"
                    class="btn btn-ghost btn-sm"
                    :class="{ 'btn-circle': !isCollapsed }"
                >
                    <span class="sr-only">Toggle sidebar</span>
                    <component
                        :is="isCollapsed ? ChevronRightIcon : ChevronLeftIcon"
                        class="h-5 w-5"
                    />
                </button>
            </div>
        </div>

        <div class="menu w-full p-2">
            <ul class="menu menu-md gap-2">
                <li v-for="item in menuItems" :key="item.name">
                    <a
                        :href="item.href"
                        @click="setActiveItem(item.name)"
                        class="transition-colors duration-200"
                        :class="{
                            'justify-center': isCollapsed,
                            'bg-primary/90 text-primary-content hover:bg-primary':
                                activeItem === item.name,
                            'hover:bg-base-200': activeItem !== item.name,
                        }"
                    >
                        <component
                            :is="item.icon"
                            class="h-5 w-5 transition-colors duration-200"
                            :class="{
                                'text-primary-content':
                                    activeItem === item.name,
                            }"
                        />
                        <span
                            v-show="!isCollapsed"
                            class="ml-3 transition-colors duration-200"
                            :class="{
                                'font-medium': activeItem === item.name,
                            }"
                        >
                            {{ item.name }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>
