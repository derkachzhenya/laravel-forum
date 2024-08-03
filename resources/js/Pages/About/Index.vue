<template>

    <Head title="About" />
    <Header></Header>

    <Banner></Banner>
    <div class="flex mx-auto w-full sm:w-2/3">

        <div class="hidden md:block mt-10 mx-auto pt-10 w-1/4">
            <div
                class="hover:bg-gray-100 ml-3 mr-3 pt-2 pb-2 rounded {{ Request::is('about') ? 'bg-gray-100 font-bold' : '' }}">
                <Link class="ml-3" :href="route('about.index')">About us</Link>
            </div>

            <div
                class="hover:bg-gray-100 ml-3 mr-3 mt-2 pt-2 pb-2 rounded {{ Request::is('contact') ? 'bg-gray-100 font-bold' : '' }}">
                <Link class="ml-3" :href="route('contact.index')">Contact</Link>
            </div>
        </div>

        <div class="mt-10 mx-3 sm:mx-6 sm:w-3/4 w-full">
            <div class="font-sans mb-5 mt-8">
                <h1 class="font-normal text-center text-4xl">About Travel</h1>

                <div class="mt-8">
                    Welcome to Travel Explorers, where we believe that every corner of the world holds a unique story
                    waiting to
                    be
                    uncovered. Our passion lies in crafting unparalleled travel experiences that transcend the ordinary,
                    leaving
                    an
                    indelible mark on your memory.
                </div>

                <div class="mt-7">
                    At the core of our ethos is a mission to democratize travel, ensuring that it's not just a privilege
                    for
                    a
                    select
                    few but an accessible adventure for all. We're dedicated to instilling a sense of wanderlust in
                    every
                    traveler,
                    igniting that spark of curiosity that drives us to explore beyond the familiar.
                </div>

                <div class="mt-7">
                    Our commitment to excellence is unwavering. From the moment you dream up your journey to the final
                    farewell,
                    our
                    team is devoted to delivering service that surpasses expectations. We take pride in curating every
                    detail,
                    ensuring
                    that each moment of your trip is seamless, immersive, and utterly unforgettable.
                </div>

                <div class="mt-7">
                    But our dedication doesn't stop there. We recognize the profound responsibility we hold as stewards
                    of
                    the
                    planet,
                    and we're committed to promoting sustainable travel practices that minimize our environmental
                    footprint
                    and
                    protect
                    the natural wonders that make our destinations so enchanting.
                </div>

                <div class="mt-7">
                    Yet, perhaps the most magical aspect of travel is the connections we forge along the way. Beyond
                    landmarks
                    and
                    landscapes, it's the people we meet and the stories we share that truly enrich our adventures.
                    Whether
                    you're
                    embarking on a solo journey of self-discovery or exploring with loved ones, Travel Explorers is your
                    companion
                    in
                    creating meaningful connections that span cultures and continents.
                </div>

                <div class="pb-7 mt-7">
                    So, are you ready to embark on a journey of discovery, exploration, and adventure? Join us as we
                    traverse
                    the
                    globe,
                    uncovering hidden gems and weaving tales that will linger in your heart long after you've returned
                    home.
                    Let's
                    make
                    memories together that transcend time and space. Welcome aboard the adventure of a lifetime with
                    Travel
                    Explorers.
                </div>
            </div>
        </div>
    </div>

    <Map></Map>
    <Footer></Footer>

</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";
import Header from '@/Components/Header.vue';
import Banner from '@/Components/Banner.vue';
import Map from '@/Components/Map.vue';
import Footer from '@/Components/Footer.vue';



</script>


<style scoped></style>
