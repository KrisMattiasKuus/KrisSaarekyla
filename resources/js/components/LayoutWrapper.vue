<template>
    <div class="min-h-screen bg-[#ABCA9E] font-sans text-gray-900">
        <Navbar />
        <slot />
        <Footer />
    </div>
</template>

<script setup>
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';
</script>
