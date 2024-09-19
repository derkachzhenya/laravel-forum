<script setup>

</script>

<template>
  <!--Search-->
  <div class='bg-gray-50 border-b'>
    <div class="sm:w-3/5 sm:mx-auto pt-9">
      <h1
        class="mb-4 px-5 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-left sm:text-3xl lg:text-4xl">
        The best site for finding food</h1>
      <p class="mx-auto px-5 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Top
        Restaurants & Dining: Your Guide to Delicious Food Experiences</p>
      <!--EndText-->
    </div>
    <form class="sm:flex items-center w-full px-3 pb-10 mt-5 sm:w-3/5 mx-auto">
      <div class="relative w-full mt-3 ms-0 sm:ms-2">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
        </div>
        <input type="text" id="simple-search" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10
           p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter establishment name..." required />
      </div>
      <div class="relative w-full mt-3 ms-0 sm:ms-2">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 30 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 21.7C17.3 17 20 13 20 9a8 8 0 1 0-16 0c0 4 2.7 8 8 12.7z" />
          </svg>
        </div>
        <input type="text" id="simple-search" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 
           dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Select a city..." required />
      </div>
      <button type="submit"
        class="inline-flex items-center py-2.5 px-3 mt-3 text-center w-full ms-0 sm:ms-2 sm:w-1/5 text-sm font-medium text-white bg-rose-600 rounded-lg border 
        border-rose-600 hover:bg-rose-700 focus:ring-4 focus:outline-none focus:ring-rose-300 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800">
        <p class="mx-auto">Search</p>
      </button>
    </form>
  </div>
  <!--EndSearch-->
</template>