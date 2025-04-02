<script setup lang="ts">
import { useToast, type Toast } from '@/composables/useToast';
import { XMarkIcon } from '@heroicons/vue/24/outline';

const { toasts, removeToast } = useToast();

const getToastClasses = (type: Toast['type']) => {
    const baseClasses = 'alert shadow-lg';
    switch (type) {
        case 'success':
            return `${baseClasses} alert-success`;
        case 'error':
            return `${baseClasses} alert-error`;
        case 'warning':
            return `${baseClasses} alert-warning`;
        case 'info':
            return `${baseClasses} alert-info`;
        default:
            return baseClasses;
    }
};

const getToastIcon = (type: Toast['type']) => {
    switch (type) {
        case 'success':
            return 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z';
        case 'error':
            return 'M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z';
        case 'warning':
            return 'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z';
        case 'info':
            return 'M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z';
        default:
            return '';
    }
};
</script>

<template>
    <div
        class="toast-container fixed bottom-4 right-4 z-50 flex flex-col gap-2"
    >
        <TransitionGroup
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="transform translate-y-4 opacity-0"
            enter-to-class="transform translate-y-0 opacity-100"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="transform translate-y-0 opacity-100"
            leave-to-class="transform translate-y-4 opacity-0"
        >
            <div
                v-for="toast in toasts"
                :key="toast.id"
                :class="getToastClasses(toast.type)"
                class="min-w-[300px] max-w-[600px]"
            >
                <div class="flex w-full items-center justify-between gap-2">
                    <div class="flex items-center gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 shrink-0 stroke-current"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                :d="getToastIcon(toast.type)"
                            />
                        </svg>
                        <span>{{ toast.message }}</span>
                    </div>
                    <button
                        @click="removeToast(toast.id)"
                        class="btn btn-circle btn-ghost btn-sm"
                    >
                        <XMarkIcon class="h-5 w-5" />
                    </button>
                </div>
            </div>
        </TransitionGroup>
    </div>
</template>

<style scoped>
.toast-container {
    pointer-events: none;
}

.toast-container > * {
    pointer-events: auto;
}
</style>
