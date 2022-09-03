<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">Applicant Information</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
  </div>
  <div class="mt-5 border-t border-gray-200">
    <dl class="divide-y divide-gray-200">
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">Betaalfrequentie</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <span class="flex-grow">Maandelijks</span>
          <span class="ml-4 flex-shrink-0">
            <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
          </span>
        </dd>
      </div>
      <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">Betalingsmethode</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <span class="flex-grow">iDeal</span>
          <span class="ml-4 flex-shrink-0">
            <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
          </span>
        </dd>
      </div>
      <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">Totaalbedrag incl. BTW</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <span class="flex-grow">94.95</span>
        </dd>
      </div>
      <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <span class="flex-grow"> $120,000</span>
          <span class="ml-4 flex-shrink-0">
            <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
          </span>
        </dd>
      </div>
    </dl>
  </div>
</template>

<script>
import { PaperClipIcon } from '@heroicons/vue/solid'

export default {
  components: {
    PaperClipIcon,
  },
}
</script>