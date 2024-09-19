<template>

    <Head title="Contact" />

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
                <h1 class="font-normal text-center text-4xl">Our contacts</h1>

                <div class="mt-8">
                    We are always happy to communicate with our clients and partners! If you have any questions about our services,
                    proposals for cooperation, or simply want to share your travel experiences, please feel free to contact us.
                </div>
        
                <div class="mt-7">
        
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Contact Information:</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                            Office Address: [Your Address]
                        </li>
                        <li>
                            Phone: [Phone Number]
                        </li>
                        <li>
                            Email: [Email Address]
                        </li>
                        <li>
                            Office Hours: Monday - Friday, 9:00 AM to 6:00 PM (local time)
                        </li>
                    </ul>
        
                </div>
        
                <div class="mt-7">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">
                        Contact Form:
                    </h2>
        
                    <div>
                        You can also fill out the form below, and we will get back to you as soon as possible.
                    </div>
        
                    <div>
                        [Contact Form]
                    </div>
                </div>
        
                <div class="mt-7">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">
                        Social Media:
                    </h2>
        
                    <div>
                        We are active on social media! Follow our accounts to stay updated on the latest news, special offers, and
                        inspiring
                        photos from our travels.
                    </div>
                    <div>
                        [Social Media Links]
                    </div>
                </div>
        
                <div class="pb-7 mt-7">
        
                    Don't hesitate to reach out to us. We are ready to help make your next journey unforgettable!
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
import Header from '@/Components/main/Header.vue';
import Banner from '@/Components/main/Banner.vue';
import Map from '@/Components/main/Map.vue';
import Footer from '@/Components/main/Footer.vue';


</script>


<style scoped></style>