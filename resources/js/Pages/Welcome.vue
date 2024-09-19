<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/Components/Header.vue';
import Banner from '@/Components/Banner.vue';
import Search from '@/Components/Search.vue';
import Map from '@/Components/Map.vue';
import Footer from '@/Components/Footer.vue';


</script>

<template>

    <Head title="Travel" />

    <Header></Header>

    <Banner></Banner>

    <Search></Search>


    <!--Text-->
    <div>
        <h1
            class="mb-4 mt-8 px-4 text-3xl font-bold leading-none tracking-tight text-gray-900 text-center sm:text-3xl lg:text-4xl">
            Best Restaurants and Dining Spots for Delicious Food</h1>
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
            class="mb-4 mt-10 pt-10 w-3/4 mx-auto text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-lg lg:text-2xl">
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
                                <img class="rounded-t-lg w-full" :src="'/cards/card1.webp'" alt="" />
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
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
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
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
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
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
                                <h5
                                    class="mb-2 text-lg font-bold text-center tracking-tight text-gray-900">
                                    New York</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--EndBackground-->



    <Map></Map>

    <Footer></Footer>


</template>


