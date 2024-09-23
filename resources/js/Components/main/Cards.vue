<script>
</script>
<template>

    <!--Cards-->
    <section class="w-5/6 sm:w-3/4 mx-auto bg-white mt-5">
        <div>
            <h1
                class="mb-4 mt-8 px-4 text-xl font-bold leading-none tracking-tight text-gray-900 text-center sm:text-2xl lg:text-1xl">
                Best Restaurants and Dining Spots for Delicious Food in Ukraine</h1>
            <!--EndText-->
        </div>
        <div class="mt-5">
            <div class="grid mb-5 border border-gray-200 rounded-lg shadow-sm md:mb-4 md:grid-cols-2 bg-white">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <a href="#">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-gray-900 hover:underline">
                                Puzata
                                hata
                            </h3>
                        </a>
                        <p class="my-4">The restaurant offers more than a thousand traditional dishes, covering all
                            the major branches of Ukrainian cuisine. Every meal is lovingly prepared with only the
                            freshest ingredients. Discover the rich culinary heritage of Ukraine alongside signature
                            creations from the chef. The restaurant is dedicated to creating a unique atmosphere of
                            comfort and hospitality.</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9" :src="'/menu/1.jpg'" alt="profile picture">
                        <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                            <div>Kiev, Lviv </div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Ukranian food</div>
                        </div>
                    </figcaption>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-700">
                            Read more
                            <span class="sr-only">Read more</span>
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-t md:border-t-0 border-gray-200 md:rounded-se-l">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-xl font-bold text-gray-900 hover:underline">Solid foundation for
                            any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to the utility
                            classes of Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-700">
                            Read more
                            <span class="sr-only">Read more</span>
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-t border-gray-200 md:rounded-es-lg md:border-e">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-xl font-bold text-gray-900 hover:underline ">Mindblowing
                            workflow</h3>
                        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly
                            level up your next application."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                        </div>
                    </figcaption>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-700">
                            Read more
                            <span class="sr-only">Read more</span>
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-t border-gray-200 rounded-b-lg md:rounded-se-lg">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-xl font-bold text-gray-900 hover:underline ">Efficient
                            Collaborating</h3>
                        <p class="my-4">You have many examples that can be used to create a fast prototype for your
                            team."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                            <div>Joseph McFall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                        </div>
                    </figcaption>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-700">
                            Read more
                            <span class="sr-only">Read more</span>
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-t border-gray-200 md:rounded-es-lg md:border-e">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-xl font-bold text-gray-900 hover:underline ">Mindblowing
                            workflow</h3>
                        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly
                            level up your next application."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                        </div>
                    </figcaption>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-700">
                            Read more
                            <span class="sr-only">Read more</span>
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-t border-gray-200 rounded-b-lg md:rounded-se-lg">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-xl font-bold text-gray-900 hover:underline ">Efficient
                            Collaborating</h3>
                        <p class="my-4">You have many examples that can be used to create a fast prototype for your
                            team."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                            <div>Joseph McFall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                        </div>
                    </figcaption>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-700">
                            Read more
                            <span class="sr-only">Read more</span>
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <!--EndCards-->
    <div class="grid w-3/4 mx-auto justify-items-end">
        <a href="#"
            class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-100 border hover:text-gray-900 hover:bg-gray-200 dark:text-gray-400 dark:hover:text-white">
            <svg aria-hidden="true" class="w-6 h-6 me-3" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                    fill="#FF6347" />
                <path
                    d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                    fill="#FFA07A" />
                <path d="M7 19H17M9 15L12 17L15 15" stroke="#4A5568" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="w-full">View all restaurants and eateries</span>
            <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</template>