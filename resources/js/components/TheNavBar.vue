<template>
  <div class="bg-red-white">
    <div class="container">
      <div class="navbar-c d-flex justify-content-between clearfix">
        <div class="navbar-item-c logo">
          <a href="/">
            <img
              src="https://static.vecteezy.com/system/resources/previews/001/188/239/non_2x/heart-logo-png.png"
              alt=""
            />
          </a>
        </div>
        <div class="navbar-item-c text-center flex-nav-center">
          <a class="text-custom" href="/admin">Admin</a>
            <router-link :to="!route.path ? '/' : route.path" v-for="route in routes" :key="route.path" class="text-custom">
              {{ route.meta.linkText }}
            </router-link>
        </div>
        <div class="navbar-item-c text-end flex-nav-end">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-custom"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                {{ user.name }}
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  data () {
    return {
      routes: [],
      user : ""
    };
  },

  methods: {
    async getUser() {
      const resp = await axios.get('api/user');
      // console.log(resp);
      this.user = resp.data
    }
  },

   mounted() {
    this.routes = this.$router
      .getRoutes()
      .filter((route) => !!route.meta.linkText);
    // console.log(this.routes);
    this.getUser()
  },

};
</script>

<style lang="scss">
.navbar-c {
  padding: 8px 0px;
  height: 60px;

  .navbar-item-c {
    width: calc(100% / 3);
    float: left;
    height: 100%;
    img {
      height: 100%;
    }
  }
  .text-custom {
    font-weight: 700;
    font-size: 20px;
    vertical-align: middle;
    color: rgb(65, 6, 37);
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  a {
    text-decoration: none;
  }
  .flex-nav-center {
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  .flex-nav-end {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}
</style>