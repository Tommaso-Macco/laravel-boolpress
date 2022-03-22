<template>
  <div class="container">
    <div v-if="!errorStatus">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Name & Lastname</label
        >
        <input
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Marco Leopardi"
          v-model="formData.name"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Email address</label
        >
        <input
          type="email"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="name@example.com"
          v-model="formData.email"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"
          >Your Request</label
        >
        <textarea
          class="form-control"
          id="exampleFormControlTextarea1"
          rows="16"
          v-model="formData.content"
        ></textarea>
      </div>
      <div>
        <button class="btn btn-primary" type="submit" @click="formSubmit">
          Send
        </button>
      </div>
    </div>
    <div v-else class="alert alert-success my-5 text-center">
        <h1 class="text-center">Your request has been received</h1>
        <h3 class="text-center">We will reply in a week</h3>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      formData: {
        name: "",
        email: "",
        content: "",
      },
      errorStatus: false,
    };
  },

  methods: {
    async formSubmit() {
      try {
        const resp = await axios.post("/api/contacts", this.formData);
        console.log(resp.data);
        this.errorStatus = true;
      } catch (er) {
        console.log(er);
      }
    },
  },
};
</script>

<style>
</style>