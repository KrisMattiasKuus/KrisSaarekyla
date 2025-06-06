<template>
    <LayoutWrapper>
        <EContactHero />

        <section class="bg-white px-8 py-16 md:px-16 lg:px-48">
            <!-- Header -->
            <div class="mb-12">
                <h1 class="mb-4 text-4xl leading-tight font-black">Kontakt</h1>
                <p class="text-lg">Võta meiega ühendust – vastame rõõmuga<br />kõigile küsimustele!</p>
            </div>

            <!-- Flash Messages -->
            <div v-if="props.success" class="mb-8 rounded-lg bg-green-100 p-4 text-green-800">
                {{ props.success }}
            </div>
            <div v-if="props.error" class="mb-8 rounded-lg bg-red-100 p-4 text-red-800">
                {{ props.error }}
            </div>

            <form @submit.prevent="submit" class="mb-16 grid grid-cols-1 gap-12 lg:grid-cols-2">
                <!-- Left Column - Contact Info -->
                <div class="space-y-6">
                    <!-- Name -->
                    <div class="space-y-2">
                        <h2 class="text-2xl font-bold">Nimi</h2>
                        <input
                            v-model="form.name"
                            type="text"
                            class="w-full rounded-lg border px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                            :class="{ 'border-red-500': errors.name }"
                        />
                        <p v-if="errors.name" class="text-sm text-red-600">{{ errors.name }}</p>
                    </div>

                    <!-- Email -->
                    <div class="space-y-2">
                        <h2 class="text-2xl font-bold">E-post</h2>
                        <input
                            v-model="form.email"
                            type="email"
                            class="w-full rounded-lg border px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                            :class="{ 'border-red-500': errors.email }"
                        />
                        <p v-if="errors.email" class="text-sm text-red-600">{{ errors.email }}</p>
                    </div>

                    <!-- Phone -->
                    <div class="space-y-2">
                        <h2 class="text-2xl font-bold">Telefoni number</h2>
                        <input
                            v-model="form.phone"
                            type="tel"
                            class="w-full rounded-lg border px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                        />
                    </div>

                    <button
                        type="submit"
                        class="rounded-lg bg-[#2f3e29] px-6 py-3 font-bold text-white transition hover:bg-[#24321f]"
                        :disabled="processing"
                    >
                        Saada sõnum
                    </button>
                </div>

                <!-- Right Column - Message -->
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold">Sõnum</h2>
                    <textarea
                        v-model="form.message"
                        class="h-64 w-full rounded-lg border px-4 py-3 focus:ring-2 focus:ring-[#2f3e29] focus:outline-none"
                        :class="{ 'border-red-500': errors.message }"
                    ></textarea>
                    <p v-if="errors.message" class="text-sm text-red-600">{{ errors.message }}</p>
                </div>
            </form>

            <!-- Map -->
            <div class="h-96 w-full overflow-hidden rounded-lg bg-gray-200">
                <div class="flex h-full w-full items-center justify-center bg-gray-300">
                    <img src="/images/map.png" alt="Map" class="object-fill" />
                </div>
            </div>

            <!-- Footer Links -->
            <div class="mt-16 grid grid-cols-2 gap-8 md:grid-cols-4">
                <!-- Same as before... -->
            </div>
        </section>
    </LayoutWrapper>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import EContactHero from '../components/EContact.vue';
import LayoutWrapper from '../components/LayoutWrapper.vue';

const props = defineProps({
    success: String,
    fail: String,
});

const form = useForm({
    name: '',
    email: '',
    phone: '',
    message: '',
});

const errors = ref({});
const processing = ref(false);

const validate = () => {
    const newErrors = {};
    if (!form.name) newErrors.name = 'Nimi on kohustuslik';
    if (!form.email) newErrors.email = 'E-post on kohustuslik';
    else if (!/\S+@\S+\.\S+/.test(form.email)) newErrors.email = 'E-posti aadress on vigane';
    if (!form.message) newErrors.message = 'Sõnum on kohustuslik';

    errors.value = newErrors;
    return Object.keys(newErrors).length === 0;
};

const submit = () => {
    if (!validate()) return;

    processing.value = true;
    form.post(route('contact.send'), {
        onSuccess: () => {
            form.reset();
        },
        onError: () => {
            // Validation errors from backend
        },
        onFinish: () => {
            processing.value = false;
        },
    });
};
</script>
