<template>
    <LayoutWrapper>
        <section class="bg-white px-8 py-16 md:px-16 lg:px-48">
            <!-- Header -->
            <div class="mb-12 max-w-2xl">
                <h1 class="mb-4 text-4xl leading-tight font-black">Annetus</h1>
                <p class="text-lg">Aita säilitada meie ajaloolist tuulikut tulevastele põlvedele. Iga annetus loeb.</p>
            </div>

            <!-- Form and Image Side-by-Side -->
            <div class="mb-16 flex flex-col gap-12 md:flex-row">
                <!-- Form and Description -->
                <div class="flex-1 space-y-12">
                    <!-- Donation Form -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h2 class="text-2xl font-bold">Nimi</h2>
                            <input
                                type="text"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                            />
                        </div>

                        <div class="space-y-4">
                            <h2 class="text-2xl font-bold">E-post</h2>
                            <input
                                type="email"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                            />
                        </div>

                        <div class="space-y-4">
                            <h2 class="text-2xl font-bold">Annetuse summa</h2>
                            <input
                                type="number"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                                placeholder="€"
                            />
                        </div>

                        <button class="rounded-lg bg-[#2f3e29] px-6 py-3 font-bold text-white transition-colors hover:bg-[#24321f]">Toeta</button>
                    </div>

                    <!-- Description Text Below Form -->
                    <div class="prose space-y-4">
                        <p>Vaike tuulik on haruldane osa Saaremaa pärandist — ehitatud 1920. aastatel, taastatud armastuse ja hoolega.</p>
                        <p>Et see ajalooline paik jääks avatuks külastajatele, haridusprogrammidele ja tulevastele põlvedele, vajame ka sinu tuge.</p>
                    </div>
                </div>

                <!-- Image on Right -->
                <div class="flex-1">
                    <div class="h-full overflow-hidden rounded-lg">
                        <img src="/images/donate.png" alt="Vaike tuulik" class="h-auto w-full rounded-lg object-contain md:h-[500px]" />
                    </div>
                </div>
            </div>
        </section>
    </LayoutWrapper>
</template>
<script setup>
import LayoutWrapper from '../components/LayoutWrapper.vue';
</script>
