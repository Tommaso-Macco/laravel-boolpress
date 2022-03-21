<template>
    <div class="bg-white"> 
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Laravel - BoolPress</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <!-- <a class="nav-link active" aria-current="page" @click="$router.push({name: 'home.index'})">Home</a> -->
                                <router-link class="nav-link active" :to="{ name: 'home.index' }">Home</router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/login">Admin</a>
                            </li>
                            <li class="nav-item">
                                <!-- <router-link class="nav-link active" :to="{ name: 'posts.show' }">show</router-link> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    // data() {
    //     return {
    //         routes : []
    //     }
    // },
    // mounted() {
    //    this.routes = this.$router.getRoutes();
    // }
}
</script>

<style>

</style>