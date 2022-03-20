<template>
    <div class="card" style="width: 18rem;">
        <img src="https://reactnative-examples.com/wp-content/uploads/2022/02/default-loading-image.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <div class="separator"></div>
            <p class="card-text card-max-height">{{ post.content }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ post.category.category }}</li>
            <li class="list-group-item">{{ post.user.name }}</li>
            <li class="list-group-item">{{ post.created_at }}</li>
        </ul>
        <div class="card-body">
            <a v-bind:href="'http://127.0.0.1:8000/admin/posts/'+ post.id" class="card-link">Post link (admin)</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</template>

<script>
export default {
    props : {
        post: Object,
    },
}
</script>

<style>

</style>