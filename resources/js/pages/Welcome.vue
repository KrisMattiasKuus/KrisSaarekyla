<script setup lang="ts">
import FooterSection from '../components/Footer.vue';
import HeroSection from '../components/HeroSection.vue';
import HistorySection from '../components/HistorySection.vue';
import JaanusVaike from '../components/JaanusSection.vue';
import NavBar from '../components/NavBar.vue';
import ProductsSection from '../components/ProductsSection.vue';
import ScheduleSection from '../components/ScheduleSection.vue';
</script>

<template>
    <div class="min-h-screen bg-[#ABCA9E] font-sans text-gray-900">
        <NavBar />
        <HeroSection />
        <HistorySection />
        <JaanusVaike />
        <ScheduleSection />
        <ProductsSection />
        <FooterSection />
    </div>
</template>
