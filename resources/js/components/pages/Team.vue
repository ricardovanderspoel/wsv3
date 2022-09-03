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
                      <modal name="Verleng uw subscriptie" button_text="Betalen met iDeal" v-if="invitationModalOpen" @closeModal="invitationModalOpen = !invitationModalOpen">
  <div class="mt-5 border-t border-gray-200">
    <dl class="divide-y divide-gray-200">
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">Betaalfrequentie</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <span class="flex-grow text-left">Maandelijks</span>
          <span class="ml-4 flex-shrink-0">
            <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Wijzigen</button>
          </span>
        </dd>
      </div>
      <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">Betalingsmethode</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <span class="flex-grow text-left">iDeal</span>
          <span class="ml-4 flex-shrink-0">
            <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Wijzigen</button>
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

                          <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                              <div class="ml-4 mt-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Team</h3>
                                <p class="mt-1 text-sm text-gray-500">Bekijk uw teamleden hier overzichtelijk.</p>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <button type="button" @click="openInvitationModal()"
                                  class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Teamlid Uitnodigen</button>
                                </div>
                            </div>
                          </div>


                          <div class="bg-white shadow overflow-hidden sm:rounded-md">
                            <ul role="list" class="divide-y divide-gray-200">
                              <li v-for="person in people" :key="person.email">
                                <a :href="person.id" class="block hover:bg-gray-50">
                                  <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="min-w-0 flex-1 flex items-center">
                                      <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full" :src="person.imageUrl" alt="" />
                                      </div>
                                      <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                          <p class="text-sm font-medium text-indigo-600 truncate">{{ person.name }}</p>
                                          <p class="mt-2 flex items-center text-sm text-gray-500">
                                            <MailIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" aria-hidden="true" />
                                            <span class="truncate">{{ person.email }}</span>
                                          </p>
                                        </div>
                                        <div class="hidden md:block">
                                          <div>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                              <CheckCircleIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" aria-hidden="true" />
                                              {{ person.role }}
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                      <ChevronRightIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
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
import { ref } from 'vue'
import SubNavigation from '@components/pages/reusable/SubNavigation'
import Modal from '@components/pages/reusable/Modal'
import { CheckCircleIcon, ChevronRightIcon, SearchIcon, MailIcon, PhoneIcon } from '@heroicons/vue/solid'
import { BellIcon, MenuIcon, XIcon, CheckIcon } from '@heroicons/vue/outline'
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

const people = [
  {
    id: 1,
    name: 'Jane Cooper',
    title: 'Regional Paradigm Technician',
    role: 'Admin',
    email: 'janecooper@example.com',
    telephone: '+1-202-555-0170',
    imageUrl:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
  },
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
    CheckCircleIcon,
    ChevronRightIcon,
    MailIcon,
    Modal
  },
  data() {
    return {
      navigation,
      userNavigation,
      people,
      invitationModalOpen: false,
      number: 1
    }
  },
  methods: {
    openInvitationModal() {
      this.invitationModalOpen = true;
    },
  },
}
</script>