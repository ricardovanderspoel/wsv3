<template>
    <div>
        <h1 class="sr-only">{{title}}</h1>
        <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
          <div class="lg:col-span-4">
            <section aria-labelledby="section-1-title">
              <h2 class="sr-only" id="section-1-title">{{subtitle}}</h2>
              <div class="rounded-lg bg-white overflow-hidden shadow">
                <div class="p-6">
                  <form @submit.prevent="submit" action="#" method="POST" class="sm:flex">
                    <label for="website" class="sr-only">Website</label>
                    <input v-model="form.website" type="text" name="website" id="website" class="block w-full py-3 text-base rounded-md placeholder-gray-500 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:flex-1 border-gray-300" placeholder="Voer website adres in" />
                    <button type="submit" class="mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">Go!</button>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
    </div>
</template>
<script>
export default {
    setup: () => ({
        title: 'Workbench',
        subtitle: 'Navigate to a website',
        form: {
            website: ''
        },
    }),
    methods: {
        submit() {
            //console.log(this.form.website);
        }
    }
}
</script>