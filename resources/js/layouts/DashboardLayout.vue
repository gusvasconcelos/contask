<script setup lang="ts">
import Navbar from '@/components/Navbar.vue';
import Sidebar from '@/components/Sidebar.vue';
</script>

<template>
    <div class="drawer lg:drawer-open">
        <input id="main-drawer" type="checkbox" class="drawer-toggle" />

        <!-- Navbar - Fixed on top -->
        <Navbar
            :showSearch="true"
            :showDrawerButton="true"
            class="fixed left-0 right-0 top-0 z-50 border-b bg-base-100 shadow-sm"
        />

        <!-- Page content -->
        <div class="drawer-content flex flex-col">
            <!-- Navbar spacer -->
            <div class="h-16"></div>

            <main class="flex-1 overflow-y-auto bg-base-200 p-6">
                <div class="mx-auto w-full">
                    <slot />
                </div>
            </main>
        </div>

        <!-- Sidebar -->
        <div class="drawer-side z-40">
            <label
                for="main-drawer"
                aria-label="close sidebar"
                class="drawer-overlay"
            ></label>
            <Sidebar class="pt-16" />
        </div>
    </div>
</template>

<style scoped>
.drawer-side {
    position: fixed;
    height: 100vh;
}

@media (min-width: 1024px) {
    .drawer-side {
        position: sticky;
    }
}
</style>
