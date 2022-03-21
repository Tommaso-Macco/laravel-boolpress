<template>
  <div class="card" style="width: 18rem">
    <img class="card-img-top" src="https://reactnative-examples.com/wp-content/uploads/2022/02/default-loading-image.png" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">{{post.title}}</h5>
      <p class="card-text" v-html="post.content">
        
      </p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ post.category.category }}</li>
      <li class="list-group-item">{{ post.user.name }}</li>
      <li class="list-group-item">{{ post.created_at }}</li>
    </ul>

    <ul class="list-group list-group-flush">
      <li class="list-group-item" v-for="tag in post.tags" :key="tag.id">{{ tag.name }}</li>
    </ul>

    <div class="card-body text-center">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      post: {},
    };
  },

  methods: {
    async fetchPost() {
      const resp = await axios.get("/api/posts/" + this.$route.params.post);
      this.post = resp.data;
    },
  },
  mounted() {
    this.fetchPost();
  },
};
</script>

<style>
</style>