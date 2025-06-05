<template>
    
  <div class="min-h-screen bg-[#ABCA9E] text-gray-900 font-sans">
  <nav class="flex justify-between items-center bg-[#231F20] px-6 py-8 shadow-md text-white md:px-16 lg:px-48">
  <div class="flex items-center gap-4">
    <button>
      <img src="/images/logo_s.png" alt="Logo" class="w-6 h-6" />
    </button>
  </div>
  <ul class="flex gap-10 font-bold">
    <li><a href="#" class="hover:underline">Avaleht</a></li>
    <li><a href="#" class="hover:underline">E-pood</a></li>
    <li><a href="#" class="hover:underline">Kontakt</a></li>
  </ul>
  <div class="flex items-center gap-4">
    <button>
      <img src="/images/attach_money.png" alt="Cart" class="w-6 h-6" />
    </button>
  </div>
</nav>



    <!-- Hero Section -->
    <section class="relative z-10 flex flex-col md:flex-row items-center justify-between px-8 pt-48 md:px-16 lg:px-48 pb-16">
    <div class="max-w-xl z-20">
      <h1 class="text-4xl md:text-6xl font-black leading-tight text-gray-900">Saareküla<br />Vaike tuulik</h1>
      <p class="mt-4 text-gray-800">1920. aastal ehitatud Vaike talu tuuleveski on tüüpilise peaga tuulik.</p>
      <div class="mt-6 flex gap-4">
        <button class="bg-[#2f3e29] text-white font-bold px-6 py-2 rounded hover:bg-[#24321f]">Uuri lähemalt</button>
        <button class="border border-[#2f3e29] px-6 py-2 rounded font-bold text-[#2f3e29]">E-pood</button>
      </div>
    </div>

    <!-- Windmill image overlay -->
    <img src="/images/veski.png" alt="Windmill" class="absolute right-48 top-0 h-full hidden md:block object-contain z-10" />
  </section>

    <!-- Ajalugu -->
    <section class="px-8 py-16 bg-white md:px-16 lg:px-56">
        <div class="md:flex gap-8 items-center"> <!-- Center align text and image vertically -->
            <div class="md:w-2/3">
        <h2 class="text-4xl font-bold mb-12 ">Ajalugu</h2> <!-- Right-aligned -->
      <p class="mb-4">
        Saareküla Vaike tuulik asub Saaremaa vallas, Saarekülas ja ehitati 1920. aastatel. See on haruldane peaga tuulik, millel on pukktuuliku mehhanism ja hollandi tuuliku välimus.
      </p>
      <hr class="my-4 border-gray-300" />
      <p>
        Kuuludes Vaike talule, on tuulik väärtuslik näide kohalikust 20. sajandi alguse arhitektuurist. Restaureeriti 2006. aastal ja on nüüd väga heas seisukorras, olles oluline osa piirkonna pärandkultuurist.
      </p>
    </div>

    <!-- Image Column -->
    <div class="md:w-1/3 flex justify-center">
      <img src="/images/image6.png" alt="Old windmill"
        class="w-full max-w-xs object-contain rounded shadow-md" />
    </div>
    
  </div>
</section>



    <!-- Jaanus Vaike -->
    <section class="bg-[#2f2f2f] text-white px-8 py-16 md:px-16 lg:px-48">
  <div class="md:flex gap-8 items-center">
    
    <!-- Image Column -->
    <img src="/images/jaanus.png" alt="Jaanus Vaike" class="md:w-1/4 rounded shadow-md mb-6 md:mb-0" />
    
    <!-- Text Column -->
    <div class="w-full">
      <div class="flex justify-end">
        <h2 class="text-4xl font-bold mb-4 text-right">Jaanus Vaike</h2>
      </div>
      <p class="mb-4 text-right">Tuuliku rajaja ja Vaike talu peremees 1920. aastatel.<br> Teda peeti uuendusmeelseks talumeheks.</p>
      <hr class="my-4 border-gray-500" />
      <p class="text-right">Jaanus otsustas rajada ainulaadse tuuliku, mis<br> ühendaks vana mehhanismi ja uue välimuse. 
      <br>Ta oli ka küla esimene, kes jahvatas jahu müügiks.</p>
    </div>

  </div>
</section>


    <!-- Ajakava -->
    <!-- Parent Section with Background Pattern -->
<section class="relative bg-[url('/images/ajakava_bg.png')] bg-cover bg-center px-8 py-32 md:px-16 lg:px-48">
  
  <!-- Floating Ajakava Box -->
  <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#5e8662] text-white rounded-xl shadow-lg px-6 py-8 w-full max-w-2xl">
    <h2 class="text-5xl font-bold mb-6 text-center">Ajakava</h2>
    <ul class="space-y-3 text-sm sm:text-base">
      <li class="flex justify-between">
        <p><span class="font-semibold mr-6">15.05.2025</span> Avatakse tuulikus ajalooline näituseruum</p>
      </li>
      <li class="flex justify-between">
        <p><span class="font-semibold mr-6">10.08.2026</span>Toimub esimene pereüritus „Tuulikupäev“</p>
      </li>
      <li class="flex justify-between">
        <p><span class="font-semibold mr-6">01.09.2027</span>Algab haridusprogramm koolidele tuuliku ajaloost</p>
      </li>
      <li class="flex justify-between">
        <p><span class="font-semibold mr-6">20.04.2028</span>Paigaldatakse väikegeneraator taastuvenergia tutvustamiseks</p>
      </li>
    </ul>
  </div>
  
  <!-- Optional spacer to ensure there's enough space -->
  <div class="h-40"></div>
</section>


    <!-- Tooted -->
    <section class="px-8 py-16 bg-[#618a6b] text-white px-12 md:px-16 lg:px-48">
      <h2 class="text-3xl font-bold mb-8">Tooted</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-white rounded-lg p-4 ">
          <img src="/images/mockup1.png" alt="Fan shirt" class="mb-4" />
          <p class="font-bold">Saareküla tuuliku fän t-särk</p>
          <p class="text-xl">35€</p>
        </div>
        <div class="text-white rounded-lg p-4 ">
          <img src="/images/mockup2.png" alt="Logo shirt" class="mb-4" />
          <p class="font-bold">Saareküla Vaike t-särk</p>
          <p class="text-xl">35€</p>
        </div>
        <div class="text-white rounded-lg p-4">
          <img src="/images/mockup3.png" alt="Mug" class="mb-4" />
          <p class="font-bold">Saareküla Vaike kruus</p>
          <p class="text-xl">15€</p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#1d1d1d] text-white px-8 py-12 md:px-16 lg:px-48">
  <div class="max-w-7xl mx-auto md:flex justify-between items-start">
    
    <!-- Logo -->
    <div class="mb-8 md:mb-0 md:mr-12">
      <img src="/images/logo.png" alt="Logo" class="w-32" />
    </div>

    <!-- Links with Vertical Lines -->
    <div class="flex flex-wrap justify-center md:justify-start divide-x divide-white text-center md:text-left">
      <!-- Avaleht -->
      <div class="px-6">
        <p class="font-bold mb-2">Avaleht</p>
        <ul class="space-y-1 text-sm">
          <li>Ajalugu</li>
          <li>Jaanus Vaike</li>
          <li>Ajakava</li>
          <li>Tooted</li>
        </ul>
      </div>

      <!-- Pood -->
      <div class="px-6">
        <p class="font-bold mb-2">Pood</p>
        <ul class="space-y-1 text-sm">
          <li>Tooted</li>
          <li>Kategooriad</li>
        </ul>
      </div>

      <!-- Kontaktid -->
      <div class="px-6">
        <p class="font-bold mb-2">Kontaktid</p>
        <ul class="space-y-1 text-sm">
          <li>Kirjuta meile</li>
        </ul>
      </div>

      <!-- Annetused -->
      <div class="px-6">
        <p class="font-bold mb-2">Annetused</p>
        <ul class="space-y-1 text-sm">
          <li>Info</li>
        </ul>
      </div>
    </div>

  </div>
</footer>
  </div>
</template>

<script setup>
// No script logic needed for static layout
</script>

<style scoped>
/* Optional: Any extra styling or background SVG decorations can go here */
</style>
