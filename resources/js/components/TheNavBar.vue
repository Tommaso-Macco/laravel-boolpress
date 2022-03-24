<template>
  <div class="bg-red-white">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-red-white">
        <div class="container-fluid">
          <a class="navbar-brand mr-10" href="#">Laravel BoolPress</a>
          <a class="navbar-brand" href="/admin">Admin</a>
          <a class="navbar-brand" href="/admin">Admin</a>
          <a class="navbar-brand" href="/admin">Admin</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse custom-right"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Dropdown link
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
};
</script>

<style>
</style>