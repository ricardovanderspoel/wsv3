<template>
  <div>
    <h1 class="sr-only">Workbench</h1>
    <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
      <div class="lg:col-span-4">
        <section aria-labelledby="section-1-title">
          <h2 class="sr-only" id="section-1-title">Work Bench</h2>
          <div class="rounded-lg bg-white overflow-hidden shadow">
            <div class="p-6">
              <main class="">
                <div class="">
                  <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                      <sub-navigation></sub-navigation>

                      <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">




                        <div class="py-6 px-4 sm:p-6 lg:pb-8">

                          <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                              <div class="ml-4 mt-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Facturen</h3>
                                <p class="mt-1 text-sm text-gray-500">Bekijk, betaal en download hier makkelijk en overzichtelijk uw facturen.</p>
                              </div>
                            </div>
                          </div>

                          <div class="bg-white shadow overflow-hidden sm:rounded-md">
                            <ul role="list" class="divide-y divide-gray-200">
                              <li v-for="position in positions" :key="position.id">
                                <a href="#" class="block hover:bg-gray-50">
                                  <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                      <p class="text-sm font-medium text-indigo-600 truncate">
                                        {{ position.title }}
                                      </p>
                                      <div class="ml-2 flex-shrink-0 flex">
                                        <p
                                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                          {{ position.type }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                      <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                          <CurrencyEuroIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                            aria-hidden="true" />
                                          {{ position.department }}
                                        </p>
                                      </div>
                                      <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                        <CalendarIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                          aria-hidden="true" />
                                        <p>
                                          Betaald op
                                          {{ ' ' }}
                                          <time :datetime="position.closeDate">{{ position.closeDateFull }}</time>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>

                        </div>




                      </form>
                    </div>
                  </div>
                </div>
              </main>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>


<script>
  import SubNavigation from '@components/pages/reusable/SubNavigation'
import { ref } from 'vue'
import {
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  Switch,
  SwitchDescription,
  SwitchGroup,
  SwitchLabel,
} from '@headlessui/vue'
import { SearchIcon } from '@heroicons/vue/solid'
import {
  BellIcon,
  CogIcon,
  CreditCardIcon,
  KeyIcon,
  MenuIcon,
  UserCircleIcon,
  ViewGridAddIcon,
  XIcon,
} from '@heroicons/vue/outline'
import { CalendarIcon, LocationMarkerIcon, UsersIcon, CurrencyEuroIcon } from '@heroicons/vue/solid'

const positions = [
  {
    id: 1,
    title: 'Factuur #1',
    type: 'Betaald',
    location: 'Remote',
    department: 'EUR 100,00',
    closeDate: '2020-01-07',
    closeDateFull: '7 Januari 2022',
  },
  {
    id: 2,
    title: 'Factuur #2',
    type: 'Betaald',
    location: 'Remote',
    department: 'EUR 100,00',
    closeDate: '2020-01-07',
    closeDateFull: '7 Januari 2022',
  },
  {
    id: 3,
    title: 'Factuur #3',
    type: 'Betaald',
    location: 'Remote',
    department: 'EUR 100,00',
    closeDate: '2020-01-07',
    closeDateFull: '7 Januari 2022',
  },
]
const user = {
  name: 'Debbie Lewis',
  handle: 'deblewis',
  email: 'debbielewis@example.com',
  imageUrl:
    'https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80',
}

const products = [
  {
    id: 1,
    name: 'High Wall Tote',
    href: '#',
    price: '$210.00',
    color: 'White and black',
    size: '15L',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg',
    imageAlt: 'Front of zip tote bag with white canvas, white handles, and black drawstring top.',
  },
  // More products...
]

const navigation = [
  { name: 'Dashboard', href: '#', current: true },
  { name: 'Jobs', href: '#', current: false },
  { name: 'Applicants', href: '#', current: false },
  { name: 'Company', href: '#', current: false },
]
const userNavigation = [
  { name: 'Your Profile', href: '#' },
  { name: 'Settings', href: '#' },
  { name: 'Sign out', href: '#' },
]

export default {
  components: {
    Disclosure,
    CalendarIcon,
    LocationMarkerIcon,
    UsersIcon,
    CurrencyEuroIcon,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    Switch,
    SwitchDescription,
    SwitchGroup,
    SwitchLabel,
    BellIcon,
    MenuIcon,
    SearchIcon,
    XIcon,
    SubNavigation
  },
  setup() {
    const title = 'Workbench'
    const availableToHire = ref(true)
    const privateAccount = ref(false)
    const allowCommenting = ref(true)
    const allowMentions = ref(true)

    return {
      user,
      navigation,
      userNavigation,
      availableToHire,
      privateAccount,
      allowCommenting,
      allowMentions,
      products,
      positions
    }
  },
}
</script>

<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->