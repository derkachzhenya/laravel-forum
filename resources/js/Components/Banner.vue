<script setup>

</script>

<template>
<!--Banner-->
  
  <div>
    <img
      :src="'/Banner-big.webp'"
      class="hidden md:block w-full md:w-auto md:h-auto"
      alt="Desktop image"
    />
    <img
      :src="'/Banner-mobile.webp'"
      class="block md:hidden w-full"
      alt="Mobile image"
    />
  </div>

  <!--EndBanner-->
</template>