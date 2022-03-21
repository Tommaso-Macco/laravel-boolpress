<template>
    <div>
      <div class="card-container-custom">
        <!-- <h1>Ciao</h1> -->
        <PostCard v-for="post, i of posts" :key="i" :post="post"> </PostCard>
        <!-- <h1 v-for="post, i in posts" :key="i">{{ post.title }}</h1> -->
      </div>
      <nav class="mt-5" aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item page-curs">
            <a class="page-link" @click="fetchPost(pagination.current_page - 1)">Previous</a>
          </li>

          <!-- V-for PAGINATION -->
          <li class="page-item page-curs"
            v-for="page in pagination.last_page"
            :key="page">

            <a class="page-link" @click="fetchPost(page)">{{ page }}</a>

          </li>
   
          <li class="page-item page-curs">
            <a class="page-link" @click="fetchPost(pagination.current_page + 1)" >Next</a>
          </li>
        </ul>
      </nav>

    </div> 
</template>

<script>
import PostCard from "../components/PostCard.vue";
import axios from "axios";

export default {
  components: { PostCard },

  data() {
    return {
      posts: [],
      pagination: {},
    };
  },
  methods: {
    async fetchPost(page = 1) {
      // PAGE Control
      if (page < 1) {
        page = 1;
      }
      if (page > this.pagination.last_page) {
        page = this.pagination.last_page;
      }
      
      const resp = await axios.get("/api/posts?page=" + page);
      this.posts = resp.data.data;
      this.pagination = resp.data;
      console.log(this.pagination);

    },
  },
  mounted() {
    this.fetchPost();
  },
};
</script>

<style>
.card {
  margin: 5px;
}
.page-curs {
  cursor: pointer;
}
.pagination {
  justify-content: center;
}
</style>