<template>
    <nav class="flex items-center justify-between bg-[#231F20] px-6 py-8 text-white shadow-md md:px-16 lg:px-48">
        <div class="flex items-center gap-4">
            <button>
                <img src="/images/logo_s.png" alt="Logo" class="h-6 w-6" />
            </button>
        </div>
        <ul class="flex gap-10 font-bold">
            <li><a :href="route('home')" class="hover:underline">Avaleht</a></li>
            <li><a :href="route('shop')" class="hover:underline">E-pood</a></li>
            <li><a :href="route('contact')" class="hover:underline">Kontakt</a></li>
        </ul>
        <div class="flex items-center gap-4">
            <button>
                <img src="/images/attach_money.png" alt="Cart" class="h-6 w-6" />
            </button>
        </div>
    </nav>
</template>
