<!-- ProductGrid.vue -->
<template>
    <section class="bg-white px-8 py-8 md:px-16 lg:px-48">
        <section class="py-4">
            <div class="flex items-center gap-4">
                <h3 class="font-bold">Filter</h3>
                <button class="rounded px-4 py-1 text-sm">Värv</button>
                <button class="rounded px-4 py-1 text-sm">Hind</button>
            </div>
        </section>
        <div class="grid h-full grid-cols-2 gap-6 sm:grid-cols-2 md:grid-cols-3">
            <ProductItem title="Saareküla Vaike Tuuliku fän t-särk" price="35€" sizes="S M L">
                <template #image>
                    <img src="/images/mockup1.png" alt="Fän t-särk" class="h-full w-full object-cover" />
                </template>
            </ProductItem>

            <ProductItem title="Saareküla Vaike t-särk" price="15€" sizes="S M L">
                <template #image>
                    <img src="/images/mockup2.png" alt="Basic t-särk" class="h-full w-full object-cover" />
                </template>
            </ProductItem>

            <ProductItem title="Saareküla Vaike hoodie" price="70€" sizes="S M L">
                <template #image>
                    <img src="/images/mockup3.png" alt="Hoodie" class="h-full w-full object-cover" />
                </template>
            </ProductItem>
        </div>
        <div class="mt-12 grid grid-cols-2 gap-6 sm:grid-cols-2 md:grid-cols-2">
            <a :href="route('product', 'hoodie')">
                <ProductItem title="Saareküla Vaike hoodie" price="40€" sizes="S M L">
                    <template #image>
                        <img src="/images/mockup4.png" alt="Hoodie" class="h-full w-full object-cover" />
                    </template>
                </ProductItem>
            </a>
            <ProductItem title="Saareküla Vaike hoodie" price="40€" sizes="S M L">
                <template #image>
                    <img src="/images/mockup5.png" alt="Hoodie" class="h-full w-full object-cover" />
                </template>
            </ProductItem>
        </div>
    </section>
</template>

<script setup>
import ProductItem from './ProductItem.vue';
</script>
