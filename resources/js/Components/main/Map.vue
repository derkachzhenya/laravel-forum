<script>
</script>
<template>

    <!--Map-->
    <section class="w-3/4 mx-auto bg-white">
        <h2
            class="sm:mb-4 mt-8 lg:mt-3 text-2xl font-extrabold leading-none tracking-tight text-gray-900 text-center sm:text-lg lg:text-2xl">
            Countries Grouped by Continent: Africa, Asia, Europe, America</h2>
        <div class="mx-auto p-4 py-3 bg-white sm:py-0">
            <div class="lg:flex">
                <div class="md:mb-6 md:mr-8">
                    <img class="h-28 w-28 sm:h-24 sm:w-24 md:h-28 md:w-28 lg:h-36 lg:w-56 xl:h-48 xl:w-52 mx-auto" :src="'/earth.webp'"
                        alt="image description">
                </div>
                <div class="grid grid-cols-2 gap-x-24 gap-y-8 mt-10 sm:mt-1 sm:gap-6 sm:grid-cols-6">
                    <div>
                        <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Africa</h3>
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
                        <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Asia</h3>
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
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Europe</h2>
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
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">North America
                        </h2>
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
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">South America
                        </h2>
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
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Australia</h2>
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

</template>