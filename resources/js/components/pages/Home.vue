<template>
    <div>
        <h1 class="sr-only">Home</h1>
        <!-- Main 3 column grid -->
        <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">

          <!-- Left column -->
          <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            <section aria-labelledby="section-1-title">
              <h2 class="sr-only" id="section-1-title">Section title</h2>
              <div class="rounded-lg bg-white overflow-hidden shadow">
                <div class="p-6">
                  <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No Automations</h3>
                    <p class="mt-1 text-sm text-gray-500">Get started by creating your first automation.</p>
                    <div class="mt-6">
                      <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <PlusIcon class="-ml-1 mr-2 h-5 w-5" aria-hidden="true" />
                        New Automation
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <!-- Right column -->
          <div class="grid grid-cols-1 gap-4">
            <section aria-labelledby="section-2-title">
              <h2 class="sr-only" id="section-2-title">Section title</h2>
              <div class="rounded-lg bg-white overflow-hidden shadow">
                <div class="p-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>

                
                </div>
              </div>
            </section>
          </div>

        </div>
    </div>
</template>
<script>
import { PlusIcon } from '@heroicons/vue/solid'
export default {
  components: {
    PlusIcon,
  },
  setup: () => ({
      title: 'Bye Bye'
  }),
}
</script>