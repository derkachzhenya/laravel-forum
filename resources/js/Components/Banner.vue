<script setup>

</script>

<template>
<!--Banner-->
  
  <div>
    <img
      :src="'/img.png'"
      class="hidden md:block w-full md:w-auto md:h-auto"
      alt="Desktop image"
    />
    <img
      :src="'/img1.jpg'"
      class="block md:hidden w-full"
      alt="Mobile image"
    />
  </div>

  <!--EndBanner-->
</template>