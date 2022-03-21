<template>
  <div>
    <TheNavBar> </TheNavBar>
    <div class="container card-container-custom">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import TheNavBar from "../components/TheNavBar.vue";
export default {
  components : {TheNavBar},
}
</script>

<style>
</style>