<template>
  <div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: "",
        password: "",
        remember: false,
      },
      error: null
    }
  },
  created() {
    this.logout();
  },
  methods: {
    logout() {
      this.$axios.get('/sanctum/csrf-cookie').then(response => {
        this.$axios.post('/api/logout')
          .then(response => {
            if (response.data.success) {
              window.location.href = "/"
            } else {
              console.log(response)
            }
          })
          .catch(function (error) {
            console.error(error);
          });
      })
    }
  }
}
</script>