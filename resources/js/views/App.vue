<template>
  <div>
    <TheNavBar> </TheNavBar>
    <div class="container card-container-custom">
      <PostCard v-for="post, i of posts" :key="i" :post="post"> 
      
      </PostCard>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import PostCard from "../components/PostCard.vue";
import TheNavBar from "../components/TheNavBar.vue";
export default {
  components : {PostCard, TheNavBar},
    data() {
        return {
            posts: [],
        }
    },
    methods: {
        async fetchPosts() {

            const data = await axios.get("http://127.0.0.1:8000/api/posts");
            this.posts = data.data;
    },
  },
  mounted() {
    this.fetchPosts();
  },
}
</script>

<style>
</style>