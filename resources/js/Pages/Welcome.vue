<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";

const menuOpen = ref(false);

function toggleMenu() {
  menuOpen.value = !menuOpen.value;
}


</script>

<template>
    <Head title="Travel" />
    <div>
    <header class="py-4">
      <div class="container mx-auto px-4 sm:w-3/4">
        <div class="flex items-center justify-between">
          <a href="" 
                        class="flex self-center text-2xl mr-3 font-semibold whitespace-nowrap dark:text-white">
                        <div class = "mr-3"><img :src="'/airplane.png'" class="h-8" alt="Flowbite Logo" />
                        </div>
                        <div>Travel</div>
                    </a>
          <button @click="toggleMenu" class="md:hidden focus:outline-none">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 text-gray-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16m-7 6h7"
              />
            </svg>
          </button>
          <nav class="hidden md:block">
            <ul class="flex space-x-4">
              <li>
                <a
                  href="/"
                  class="block px-3 py-2 text-base text-blue-700 hover:text-blue-700 font-medium"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="/about"
                  class="block px-3 py-2 text-base hover:text-blue-700 font-medium"
                  >Services</a
                >
              </li>
              <li>
                <a
                  href="/about"
                  class="block px-3 py-2 text-base hover:text-blue-700 font-medium"
                  >About</a
                >
              </li>
              <li>
                <a
                  href="/contact"
                  class="block px-3 py-2 text-base hover:text-blue-700 font-medium"
                  >Contact</a
                >
              </li>
            </ul>
          </nav>
        </div>
        <nav
          :class="{ block: menuOpen, hidden: !menuOpen }"
          class="md:hidden mt-4"
        >
          <ul>
            <li>
              <a
                href="/"
                class="block px-3 py-2 rounded-md text-base hover:text-blue-700 font-medium hover:bg-gray-100"
                >Home</a
              >
            </li>
            <li>
              <a
                href="/about"
                class="block px-3 py-2 rounded-md text-base hover:text-blue-700 font-medium hover:bg-gray-100"
                >Services</a
              >
            </li>
            <li>
              <a
                href="/about"
                class="block px-3 py-2 rounded-md text-base hover:text-blue-700 font-medium hover:bg-gray-100"
                >About</a
              >
            </li>
            <li>
              <a
                href="/contact"
                class="block px-3 py-2 rounded-md text-base hover:text-blue-700 font-medium hover:bg-gray-100"
                >Contact</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
  <!--Banner-->
  <div>
    <img
      class="md:h-auto max-w-full sm:block"
      :src="'/img.png'"
      alt="image description"
    />
  </div>
  <!--EndBanner-->

   <!--Search-->
<div class = 'mt-5 mx-3'>
  <form class="flex items-center max-w-lg mx-auto">   
    <label for="voice-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z"/>
            </svg>
        </div>
        <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required />
        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z"/>
            </svg>
        </button>
    </div>
    <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>Search
    </button>
  </form>
</div>
  <!--EndSearch-->

<!--Text-->
<div>
    <h1
        class="mb-4 mt-8 px-4 text-3xl font-bold leading-none tracking-tight text-gray-900 text-center sm:text-3xl lg:text-4xl dark:text-white">
        Best Hotels and Shops Around the World</h1>
    <p class="w-3/4 mx-auto text-lg font-normal text-gray-500 text-center lg:text-xl dark:text-gray-400"> Discover
        Top-Rated Accommodations and Shopping Destinations.</p>
    <!--EndText-->   
</div>
<!--Card-->

<!--EndCard-->

<!--Background-->

    <div class="w-full mx-auto bg-teal-100 rounded-lg mb-8">
        <!--TwoText-->
        <h1
            class="mb-4 mt-10 pt-10 w-3/4 mx-auto text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-lg lg:text-2xl dark:text-white">
            Best Hotels and Shops Around the World</h1>
        <p class="w-3/4 mx-auto text-base font-normal text-gray-500 lg:text-base dark:text-gray-400">Are you seeking
            luxurious hotel stays or unique shopping experiences during your travels? Look no further than our expertly
            curated guide to the world's best hotels and shops.</p>
        <!--EndTwoText-->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full sm:w-3/4 sm:mx-auto pt-4 pb-8">

            <div class="flex justify-center mb-5 mr-3 ml-3">
                <div class="w-full sm:w-64">
                    <div class="border border-gray-100 bg-white rounded-lg shadow-lg">
                        <div class="">
                            <a href="#">
                                <img class="rounded-t-lg w-full" :src="'/cards/card1.jpg'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900 dark:text-white">
                                    Berlin</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-5 mr-3 ml-3">
                <div class="w-full sm:w-64">
                    <div class="border border-gray-100 bg-white rounded-lg shadow-lg">
                        <div class="">
                            <a href="#">
                                <img class="rounded-t-lg w-full" :src="'/cards/card2.jpg'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900 dark:text-white">
                                    Dubai</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-5 mr-3 ml-3">
                <div class="w-full sm:w-64">
                    <div class="border border-gray-100 bg-white rounded-lg shadow-lg">
                        <div class="">
                            <a href="#">
                                <img class="rounded-t-lg w-full" :src="'/cards/card3.jpg'"
                                    alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900 dark:text-white">
                                    Ukraine</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-5 mr-3 ml-3">
                <div class="w-full sm:w-64">
                    <div class="border border-gray-100 bg-white rounded-lg shadow-lg">
                        <div class="">
                            <a href="#">
                                <img class="rounded-t-lg w-full" :src="'/cards/card4.jpg'"
                                    alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900 dark:text-white">
                                    New York</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--EndBackground-->

  


 <!--Map-->
<section class="w-3/4 mx-auto bg-white dark:bg-gray-900">
    <h2
        class="mb-4 mt-8 lg:mt-3 text-4xl font-extrabold leading-none tracking-tight text-gray-900 text-center sm:text-lg lg:text-4xl dark:text-white">
        Countries Grouped by Continent: Africa, Asia, Europe, America</h2>
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 sm:py-0 lg:py-8">
        <div class="lg:flex">
            <div class="md:mb-6 md:mr-8">
                <img class="h-28 w-28 sm:h-24 sm:w-24 lg:h-56 lg:w-56  mx-auto" :src="'/earth.png'"
                    alt="image description">
            </div>
            <div class="grid grid-cols-2 gap-8 mt-10 sm:mt-1 ml-8 sm:gap-6 sm:grid-cols-6">
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Africa</h3>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Nigeria</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Ethiopia</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Egypt</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline"> Algeria</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Asia</h3>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">China</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">India</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Japan</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Saudi Arabia</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Europe</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">France</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Germany</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Italy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">United Kingdom</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">North America</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">United States</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Canada</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Mexico</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Guatemala</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">South America</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brazil</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Argentina</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Colombia</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Peru</a>
                        </li>

                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Australia</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Australia</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">New Zealand</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Papua New Guinea</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Fiji</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--EndMap-->



 <!--Footer-->
 <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
     <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
         <div class="sm:flex sm:items-center sm:justify-between">
             <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                 <img :src="'/airplane.png'" class="h-8" alt="Flowbite Logo" />
                 <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Travel</span>
             </a>
             <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                 <li>
                     <a href="" class="hover:underline me-4 md:me-6">About</a>
                 </li>
                 <li>
                     <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                 </li>
                 <li>
                     <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                 </li>
                 <li>
                     <a href="" class="hover:underline">Contact</a>
                 </li>
             </ul>
         </div>
         <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
         <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">©  <a
                 href="https://travel.com/" class="hover:underline">Travel™</a>. All Rights Reserved.</span>
     </div>
 </footer>
 <!--EndFooter-->
</template>
