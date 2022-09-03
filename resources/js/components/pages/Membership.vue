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
                      <modal v-if="paymentModalOpen" name="Verleng uw subscriptie" button_text="Betalen met iDeal"
                        @closeModal="paymentModalOpen = !paymentModalOpen">
                        <div class="mt-5 border-t border-gray-200">
                          <dl class="divide-y divide-gray-200">
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                              <dt class="text-sm font-medium text-gray-500">Betaalfrequentie</dt>
                              <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <span class="flex-grow text-left">Maandelijks</span>
                                <span class="ml-4 flex-shrink-0">
                                  <button type="button"
                                    class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Wijzigen</button>
                                </span>
                              </dd>
                            </div>
                            <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                              <dt class="text-sm font-medium text-gray-500">Betaalmethode</dt>
                              <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <span class="flex-grow text-left">iDeal</span>
                                <span class="ml-4 flex-shrink-0">
                                  <button type="button"
                                    class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Wijzigen</button>
                                </span>
                              </dd>
                            </div>
                            <div class="py-2 sm:grid sm:py-2 sm:grid-cols-3 sm:gap-4">
                              <dt class="text-sm font-medium text-gray-500 text-left">Totaalbedrag</dt>
                              <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <span class="flex-grow text-left">€ 94,95</span>
                              </dd>
                            </div>
                            <div class="py-2 sm:grid sm:py-2 sm:grid-cols-3 sm:gap-4">
                              <dt class="text-sm font-medium text-gray-500  text-left">BTW</dt>
                              <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <span class="flex-grow text-left">€ 4,95</span>
                              </dd>
                            </div>
                            <div class="py-2 sm:grid sm:py-2 sm:grid-cols-3 sm:gap-4">
                              <dt class="text-sm font-medium text-gray-500  text-left">Totaal incl.</dt>
                              <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <span class="flex-grow text-left">€ 104,95</span>
                              </dd>
                            </div>
                          </dl>
                        </div>
                        <div class="mt-2">
                          <p class="text-sm text-gray-500">Door verder te gaan gaat u akkoord met onze voorwaarden.</p>
                        </div>
                      </modal>

                      <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">




                        <div class="py-6 px-4 sm:p-6 lg:pb-8">


                          <div class="bg-white shadow sm:rounded-lg mb-5">
                            <div class="px-4 py-5 sm:p-6">
                              <div class="sm:flex sm:items-start sm:justify-between">
                                <div>
                                  <h3 class="text-lg leading-6 font-medium text-gray-900">Beheer subscriptie</h3>
                                  <div class="mt-2 max-w-xl text-sm text-gray-500">
                                    <p>U maakt momenteel gebruik van de volgende subscriptie <i>Proefperiode</i>. </p>
                                  </div>
                                </div>
                                <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">

                                  <button type="button" @click="openPaymentModal()"
                                    class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Upgrade
                                    Subscriptie</button>

                                </div>
                              </div>
                            </div>
                          </div>





                          <div class="bg-white shadow sm:rounded-lg mb-5">
                            <div class="px-4 py-5 sm:p-6">
                              <h3 class="text-lg leading-6 font-medium text-gray-900">Geverifieerde Betalingsmethoden</h3>
                              <div class="mt-5">
                                <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start sm:justify-between">
                                  <h4 class="sr-only">Visa</h4>
                                  <div class="sm:flex sm:items-start">
                                    <svg class="h-8 w-auto sm:flex-shrink-0 sm:h-6" viewBox="0 0 36 24"
                                      aria-hidden="true">
                                      <rect width="36" height="24" fill="#224DBA" rx="4" />
                                      <path fill="#fff"
                                        d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" />
                                    </svg>
                                    <div class="mt-3 sm:mt-0 sm:ml-4">
                                      <div class="text-sm font-medium text-gray-900">Eindigd op 4242</div>
                                      <div class="mt-1 text-sm text-gray-600 sm:flex sm:items-center">
                                        <div>Verloopt 12/20</div>
                                        <span class="hidden sm:mx-2 sm:inline" aria-hidden="true"> &middot; </span>
                                        <div class="mt-1 sm:mt-0">Laatst gewijzigd op 22 Aug 2017</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="bg-white shadow sm:rounded-lg mb-5">
                            <div class="px-4 py-5 sm:p-6">
                              <h3 class="text-lg leading-6 font-medium text-gray-900">Verwijder je account</h3>
                              <div class="mt-2 max-w-xl text-sm text-gray-500">
                                <p>Als je je account verwijderd verlies je alle opgeslagen gegevens.</p>
                              </div>
                              <div class="mt-5">
                                <button type="button"
                                  class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">Verwijder
                                  account</button>
                              </div>
                            </div>
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
import { ref } from 'vue'
import SubNavigation from '@components/pages/reusable/SubNavigation'
import Modal from '@components/pages/reusable/Modal'
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
    SubNavigation,
    Modal
  },
  setup() {
    const title = 'Workbench'
    const availableToHire = ref(true)
    const privateAccount = ref(false)
    const allowCommenting = ref(true)
    const allowMentions = ref(true)
    //const paymentModalOpen: false,

    return {
      user,
      navigation,
      userNavigation,
      availableToHire,
      privateAccount,
      allowCommenting,
      allowMentions,
      products,
      paymentModalOpen: true,
    }
  },
  methods: {
    openPaymentModal() {
      this.paymentModalOpen = true;
    },
  }
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