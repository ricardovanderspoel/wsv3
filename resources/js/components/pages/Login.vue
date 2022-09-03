<template>
  <div class="min-h-full flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
            <template v-if="registration">start your free trial</template>
                  <template v-else>Sign in to your account</template> 
            </h2>
          <p class="mt-2 text-sm text-gray-600">
            Or
            {{ ' ' }}
            <a href="#" @click.stop="toggleRegistration()" class="font-medium text-indigo-600 hover:text-indigo-500"> 
              <template v-if="!registration">start your 14-day free trial</template>
              <template v-else>Sign in</template>
            </a>
          </p>
        </div>

        <div class="mt-8">
          <div class="mt-6">
            <form action="#" @submit.prevent="handleSubmit()" method="POST" class="space-y-6">
              <div v-if="registration">
                <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                <div class="mt-1">
                  <input id="name" v-model="form.name" name="name" type="text" :required="registration"
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div v-if="registration">
                <label for="name" class="block text-sm font-medium text-gray-700"> Company Name </label>
                <div class="mt-1">
                  <input id="company_name" v-model="form.company_name" name="company_name" type="text" :required="registration"
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div v-if="registration">
                <label for="company_role" class="block text-sm font-medium text-gray-700"> Company Role </label>
                <div class="mt-1">
                  <input id="company_role" v-model="form.company_role" name="name" type="text" :required="registration"
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                <div class="mt-1">
                  <input id="email" v-model="form.email" name="email" type="email" autocomplete="email" required=""
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                <div class="mt-1">
                  <input id="password" v-model="form.password" name="password" type="password"
                    autocomplete="current-password" required=""
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div class="space-y-1" v-if="registration">
                <label for="password" class="block text-sm font-medium text-gray-700"> Repeat Password </label>
                <div class="mt-1">
                  <input id="password_r" v-model="form.password_r" name="password_r" type="password"
                    autocomplete="" :required="registration"
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
              </div>

              <div class="flex items-center justify-between" v-if="!registration">
                <div class="flex items-center">
                  <input v-model="form.remember" id="remember-me" name="remember-me" type="checkbox"
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                  <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
                </div>

                <div class="text-sm">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot your password? </a>
                </div>
              </div>

              <div>
                <button type="submit"
                  class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                
                  <template v-if="registration">start your 14-day free trial</template>
                  <template v-else>Sign in</template> 

                </button>
              </div>
              <warning v-if="error"> {{error}} </warning>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="absolute inset-0 h-full w-full object-cover"
        src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
        alt="" />
    </div>
  </div>
</template>

<script>
  import Warning from '@components/alerts/Warning'
export default {
  watch: {
    registration: function(val) {
      if (val) {
        this.form.password = ''
        this.form.password_r = ''
        this.error = null
      }
    }
  }, 
  components: {
    Warning
  },
  data() {
    return {
      form: {
        name: "",
        company_name: "",
        email: "",
        password: "",
        password_r: "",
        remember: false,
      },
      registration: false,
      error: null
    }
  },
  computed: {
    formUrl() {
      if (this.registration) {
        return "api/register"
      } else {
        return "api/login"
      }
    }
  },
  methods: {
    toggleRegistration() {
      this.registration = !this.registration;

    },
    handleSubmit() {
      this.error = null;
      if (this.form.password.length > 0) {
        this.$axios.get('/sanctum/csrf-cookie').then(response => {
          this.$axios.post(this.formUrl, {
            name: this.form.name,
            company_name: this.form.company_name,
            company_role: this.form.company_role,
            email: this.form.email,
            password: this.form.password,
            password_r: this.form.password_r,
            remember: this.form.remember
          })
            .then(response => {
              if (response.data.success) {
                this.$router.push('/').then(() => {
                  location.reload();
                });
              } else {
                this.error = 'Wrong credentials';
              }
            })
            .catch(function (error) {
              console.error(error);
            });
        })
      }
    }
  },
}
</script>
  