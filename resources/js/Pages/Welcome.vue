<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/Components/main/Header.vue';
import Banner from '@/Components/main/Banner.vue';
import Search from '@/Components/main/Search.vue';
import Map from '@/Components/main/Map.vue';
import Cards from '@/Components/main/Cards.vue';
import Footer from '@/Components/main/Footer.vue';


</script>

<template>

    <Head title="Travel" />

    <Header></Header>

    <Banner></Banner>

    <Search></Search>


    <!--Text-->
    <Cards></Cards>
    <!--Card-->

    <!--EndCard-->

    <!--Background-->

    <div class="w-full mx-auto bg-teal-100 rounded-lg mb-8">
        <!--TwoText-->
        <h1
            class="mb-4 mt-10 pt-10 w-3/4 mx-auto text-xl font-bold leading-none tracking-tight text-center sm:text-2xl lg:text-1xl">
            Best Hotels and Shops Around the World</h1>
        <p class="w-3/4 mx-auto text-base font-normal text-gray-500 lg:text-base dark:text-gray-400">Are you seeking
            luxurious hotel stays or unique shopping experiences during your travels? Look no further than our expertly
            curated guide to the world's best hotels and shops.</p>
        <!--EndTwoText-->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full sm:w-3/4 sm:mx-auto pt-4">

            <div class="flex justify-center mb-5 mr-3 ml-3">
                <div class="w-full sm:w-64">
                    <div class="border border-gray-100 bg-white rounded-lg shadow-lg">
                        <div class="">
                            <a href="#">
                                <img class="rounded-t-lg w-full" :src="'/cards/card1.webp'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5 class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
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
                                <img class="rounded-t-lg w-full" :src="'/cards/card2.webp'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5 class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
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
                                <img class="rounded-t-lg w-full" :src="'/cards/card3.webp'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5 class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
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
                                <img class="rounded-t-lg w-full" :src="'/cards/card4.webp'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5 class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
                                    New York</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-3/4 mx-auto text-center lg:text-end pt-5 pb-10 pe-3">
            <a href="#"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg
                 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700
                   dark:text-gray-400 dark:border-gray-300 dark:hover:text-white">Show all <svg class="w-3 h-3 ms-2 rtl:rotate-180" 
                   aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg></a>
        </div>
    </div>
    <!--EndBackground-->



    <Map></Map>

    <Footer></Footer>


</template>
