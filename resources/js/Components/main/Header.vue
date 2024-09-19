<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from "vue";

const menuOpen = ref(false);
const isScrolled = ref(false);
const isMobile = ref(false);

function toggleMenu() {
  menuOpen.value = !menuOpen.value;
}

function handleScroll() {
  if (!isMobile.value) {
    isScrolled.value = window.scrollY > 0;
  }
}

function handleResize() {
  isMobile.value = window.innerWidth < 768; // 768px - стандартная точка перехода для md в Tailwind
  if (isMobile.value) {
    isScrolled.value = false;
  } else {
    handleScroll();
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
  window.addEventListener('resize', handleResize);
  handleResize(); // Вызываем сразу для определения начального состояния
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
  window.removeEventListener('resize', handleResize);
});
</script>

<template>
  <div>
    <header :class="[
      'py-4',
      { 'md:fixed md:top-0 md:left-0 md:right-0 md:z-50': !isMobile },
      'transition-all duration-300',
      { 'md:bg-white md:shadow': isScrolled && !isMobile }
    ]">
      <div class="container mx-auto px-4 sm:w-3/4">
        <div class="flex items-center justify-between">
          <Link :href="route('main')" class="flex self-center text-2xl mr-3 font-semibold whitespace-nowrap dark:text-white">
            <div class="mr-3">
              <img :src="'/airplane.png'" class="h-8" alt="Flowbite Logo" />
            </div>
            <div>Travel</div>
          </Link>
          <button @click="toggleMenu" class="md:hidden focus:outline-none">
            <svg v-if="!menuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
          <nav class="hidden md:block">
            <ul class="flex space-x-4">
              <li>
                <a href="#" class="block px-3 py-2 text-base text-blue-700 hover:text-blue-700 font-medium">Home</a>
              </li>
              <li>
                <a href="#" class="block px-3 py-2 text-base hover:text-blue-700 font-medium">Service</a>
              </li>
              <li>
                <Link :href="route('about.index')" class="block px-3 py-2 text-base hover:text-blue-700 font-medium">About</Link>
              </li>
              <li>
                <Link :href="route('contact.index')" class="block px-3 py-2 text-base hover:text-blue-700 font-medium">Contact</Link>
              </li>
            </ul>
          </nav>
        </div>
        <nav :class="{ block: menuOpen, hidden: !menuOpen }" class="md:hidden mt-4">
          <ul>
            <li>
              <a href="#" class="block px-3 py-2 rounded-md text-base hover:text-blue-700 font-medium hover:bg-gray-100">Home</a>
            </li>
            <li>
              <a href="#" class="block px-3 py-2 rounded-md text-base hover:text-blue-700 font-medium hover:bg-gray-100">Services</a>
            </li>
            <li>
              <Link :href="route('about.index')" class="block px-3 py-2 text-base hover:text-blue-700 font-medium">About</Link>
            </li>
            <li>
              <Link :href="route('contact.index')" class="block px-3 py-2 text-base hover:text-blue-700 font-medium">Contact</Link>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Добавьте отступ для основного контента только на десктопной версии -->
    <div :class="{ 'md:pt-20': !isMobile }">
      <!-- Здесь размещается основной контент страницы -->
    </div>
  </div>
</template>