<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
      <div class="flex">
        <div class="flex-shrink-0">
          <ExclamationIcon class="h-5 w-5 text-yellow-400" aria-hidden="true" />
        </div>
        <div class="ml-3">
          <p class="text-sm text-yellow-700">
            <slot></slot>
          </p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { ExclamationIcon } from '@heroicons/vue/solid'
  
  export default {
    components: {
      ExclamationIcon,
    },
  }
  </script>