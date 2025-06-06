<!-- E-Pood.vue -->
<template>
    <LayoutWrapper>
        <EStoreHero />
        <ProductFilters />
        <ProductGrid />
    </LayoutWrapper>
</template>

<script setup>
import EStoreHero from '../components/EStore.vue';
import LayoutWrapper from '../components/LayoutWrapper.vue';
import ProductFilters from '../components/ProductFilters.vue';
import ProductGrid from '../components/ProductGrid.vue';
</script>
