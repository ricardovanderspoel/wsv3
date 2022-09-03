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
          <!-- Profile section -->
          <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div>
              <h2 class="text-lg leading-6 font-medium text-gray-900">Profiel</h2>
              <p class="mt-1 text-sm text-gray-500">Deze informatie kan openbaar gepubliceerd worden.</p>
            </div>

            <div class="mt-6 flex flex-col lg:flex-row">
              <div class="flex-grow space-y-6">
                <div>
                  <label for="username" class="block text-sm font-medium text-gray-700"> Gebruikersnaam <small>(Persoonlijke API url)</small> </label>
                  <div class="mt-1 rounded-md shadow-sm flex">
                    <span class="bg-gray-50 border border-r-0 border-gray-300 rounded-l-md px-3 inline-flex items-center text-gray-500 sm:text-md"> https://webscraper-api.com/api/ </span>
                    <input type="text" name="username" id="username" autocomplete="username" class="border-y border-r focus:ring-sky-500 focus:border-sky-500 flex-grow block min-w-0 rounded-none rounded-r-md sm:text-md border-gray-300" :value="user.handle" />
                  </div>
                </div>
              </div>

              <div class="-mt-20 flex-grow lg:-mt-20 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0 ">
                <p class="text-sm font-medium text-gray-700" aria-hidden="true">  </p>
                <div class="mt-1 lg:hidden">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12" aria-hidden="true">
                      <img class="rounded-full h-full w-full" :src="user.imageUrl" alt="" />
                    </div>
                    <div class="ml-5 rounded-md shadow-sm">
                      <div class="group relative border border-gray-300 rounded-md py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">
                        <label for="mobile-user-photo" class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                          <span>Change</span>
                          <span class="sr-only"> user photo</span>
                        </label>
                        <input id="mobile-user-photo" name="user-photo" type="file" class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hidden relative rounded-full overflow-hidden lg:block">
                  <img class="relative rounded-full w-40 h-40" :src="user.imageUrl" alt="" />
                  <label for="desktop-user-photo" class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                    <span>Change</span>
                    <span class="sr-only"> user photo</span>
                    <input type="file" id="desktop-user-photo" name="user-photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md" />
                  </label>
                </div>
              </div>
            </div>

            <div class="mt-6 grid grid-cols-12 gap-6">
              <div class="col-span-12 sm:col-span-6">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Voornaam</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm" />
              </div>

              <div class="col-span-12 sm:col-span-6">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Achternaam</label>
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm" />
              </div>

              <div class="col-span-12 sm:col-span-6">
                <label for="company" class="block text-sm font-medium text-gray-700">Bedrijfsnaam</label>
                <input type="text" name="company" id="company" autocomplete="organization" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm" />
              </div>

              <div class="col-span-6">
                <label for="url" class="block text-sm font-medium text-gray-700">Bedrijfswebsite</label>
                <input type="text" name="url" id="url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm" />
              </div>

              
            </div>
          </div>

          <!-- Privacy section -->
          <div class="pt-6 divide-y divide-gray-200">
            <div class="px-4 sm:px-6">
              <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Privacy</h2>
                <p class="mt-1 text-sm text-gray-500">Beheer hier uw voorkeuren omtrent uw privacy.</p>
              </div>
              <ul role="list" class="mt-2 divide-y divide-gray-200">
                <SwitchGroup as="li" class="py-4 flex items-center justify-between">
                  <div class="flex flex-col">
                    <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive> Teamleden mogen zien dat u online bent </SwitchLabel>
                    <SwitchDescription class="text-sm text-gray-500"> Indien u dit uitschakeld kunt u onzichtbaar werken. </SwitchDescription>
                  </div>
                  <Switch v-model="availableToHire" :class="[availableToHire ? 'bg-teal-500' : 'bg-gray-200', 'ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500']">
                    <span aria-hidden="true" :class="[availableToHire ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200']" />
                  </Switch>
                </SwitchGroup>
                <SwitchGroup as="li" class="py-4 flex items-center justify-between">
                  <div class="flex flex-col">
                    <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive> Nieuwsbrieven </SwitchLabel>
                    <SwitchDescription class="text-sm text-gray-500"> Wij mogen u eens in de 30 dagen onze nieuwsbrief sturen. </SwitchDescription>
                  </div>
                  <Switch v-model="privateAccount" :class="[privateAccount ? 'bg-teal-500' : 'bg-gray-200', 'ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500']">
                    <span aria-hidden="true" :class="[privateAccount ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200']" />
                  </Switch>
                </SwitchGroup>
              </ul>
            </div>
            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
              <button type="submit" class="ml-5 bg-sky-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Opslaan</button>
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
    'https://www.multisignaal.nl/wp-content/uploads/2021/08/blank-profile-picture-973460_1280.png',
}
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
    SubNavigation
  },
  setup() {
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
    }
  },
}
</script>

