<!-- ProductItem.vue -->
<template>
    <div class="flex flex-col">
        <!-- Product Image -->
        <div class="mb-2 h-full w-full overflow-hidden rounded bg-gray-100">
            <slot name="image">
                <div class="flex h-full w-full items-center justify-center bg-gray-200">
                    <span class="text-gray-400">Product Image</span>
                </div>
            </slot>
        </div>

        <!-- Product Info -->
        <div class="flex items-baseline justify-between">
            <div>
                <h3 class="font-bold">{{ title }}</h3>
                <p class="text-bold text-2xl font-bold">{{ price }}</p>
            </div>
            <div v-if="sizes" class="text-sm text-gray-500">
                {{ sizes }}
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    price: String,
    sizes: String,
});
</script>
