<template>
    <LayoutWrapper>
        <ProductHero />
        <section class="bg-white px-8 py-16 md:px-16 lg:px-48">
            <!-- Product Header -->
            <div class="mb-16 flex flex-col items-start gap-12 md:flex-row">
                <!-- Left: Product Image -->
                <div class="flex-1">
                    <div class="rounded-xl bg-gray-100 p-6">
                        <img src="/images/mockup4.png" alt="Saareküla Vaike hoodie" class="w-full object-contain" />
                    </div>
                </div>

                <!-- Right: Product Info -->
                <div class="flex-1 space-y-6">
                    <h1 class="text-3xl font-bold">Saareküla vaike hoodie</h1>
                    <div class="flex items-center space-x-1"><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div>
                    <div class="text-3xl font-extrabold">70€</div>

                    <!-- Size Selection -->
                    <div class="space-y-2">
                        <h2 class="font-semibold">Suurus</h2>
                        <div class="flex space-x-2">
                            <img src="/images/sizes.png" alt="small hoodie preview" class="w-48 rounded-md" />
                        </div>
                        <p class="text-sm text-gray-500 italic">saadaval ka valges</p>
                        <img src="/images/mockup6.png" alt="white hoodie preview" class="w-16 rounded-md" />
                    </div>

                    <!-- Buy Button -->
                    <button class="mt-4 rounded-lg bg-[#2f3e29] px-8 py-3 font-bold text-white transition hover:bg-[#24321f]">Osta</button>
                </div>
            </div>

            <!-- Footer Links -->
        </section>
    </LayoutWrapper>
</template>

<script setup>
import LayoutWrapper from '../components/LayoutWrapper.vue';
import ProductHero from '../components/ProductHero.vue';
</script>

<style scoped>
.size-btn {
    /* @apply rounded-full border border-gray-300 px-4 py-2 text-lg font-medium transition hover:bg-gray-100; */
}
</style>
