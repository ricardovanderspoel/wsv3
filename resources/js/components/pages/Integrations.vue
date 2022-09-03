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
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Integraties</h3>
                                <p class="mt-1 text-sm text-gray-500">Beheer hier uw API sleutels en schakel integraties gemakke in- of uit. </p>
                              </div>
                            </div>
                          </div>


            <div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
    <div v-for="(action, actionIdx) in actions" :key="action.title" :class="[actionIdx === 0 ? 'rounded-tl-lg rounded-tr-lg sm:rounded-tr-none' : '', actionIdx === 1 ? 'sm:rounded-tr-lg' : '', actionIdx === actions.length - 2 ? 'sm:rounded-bl-lg' : '', actionIdx === actions.length - 1 ? 'rounded-bl-lg rounded-br-lg sm:rounded-bl-none' : '', 'relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500']">
      <div>
        <span :class="[action.iconBackground, action.iconForeground, 'rounded-lg inline-flex p-3 ring-4 ring-white']">
          <component :is="action.icon" class="h-6 w-6" aria-hidden="true" />
        </span>
      </div>
      <div class="mt-8">
        <h3 class="text-lg font-medium">
          <a :href="action.href" class="focus:outline-none">
            <!-- Extend touch target to entire panel -->
            <span class="absolute inset-0" aria-hidden="true" />
            {{ action.title }}
          </a>
        </h3>
        <p class="mt-2 text-sm text-gray-500">{{action.subTitle}}</p>
      </div>
      <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
        </svg>
      </span>
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
import { SearchIcon, ArrowSmDownIcon, ArrowSmUpIcon } from '@heroicons/vue/solid'
import {
  BellIcon,
  CogIcon,
  CreditCardIcon,
  KeyIcon,
  MenuIcon,
  UserCircleIcon,
  ViewGridAddIcon,
  XIcon,
  AcademicCapIcon,
  BadgeCheckIcon,
  CashIcon,
  ClockIcon,
  ReceiptRefundIcon,
  UsersIcon,
} from '@heroicons/vue/outline'


const actions = [
  {
    title: 'Bol.com Integratie',
    href: '#',
    icon: ClockIcon,
    iconForeground: 'text-teal-700',
    iconBackground: 'bg-teal-50',
  },
  {
    title: 'Amazon Integratie',
    href: '#',
    icon: UsersIcon,
    iconForeground: 'text-sky-700',
    iconBackground: 'bg-sky-50',
  },
  { title: 'Marktplaats Integratie', href: '#', icon: CashIcon, iconForeground: 'text-yellow-700', iconBackground: 'bg-yellow-50' },
  {
    title: 'Pro Support',
    href: '#',
    icon: AcademicCapIcon,
    iconForeground: 'text-indigo-700',
    iconBackground: 'bg-indigo-50',
  },
]

const user = {
  name: 'Debbie Lewis',
  handle: 'deblewis',
  email: 'debbielewis@example.com',
  imageUrl:
    'https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80',
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

const stats = [
  { name: 'Total Subscribers', stat: '71,897', previousStat: '70,946', change: '12%', changeType: 'increase' },
  { name: 'Avg. Open Rate', stat: '58.16%', previousStat: '56.14%', change: '2.02%', changeType: 'increase' },
  { name: 'Avg. Click Rate', stat: '24.57%', previousStat: '28.62%', change: '4.05%', changeType: 'decrease' },
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
    ArrowSmDownIcon,
    ArrowSmUpIcon,
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
      stats,
      actions
    }
  },
}
</script>

