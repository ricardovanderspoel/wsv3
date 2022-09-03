<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <Popover class="relative" v-slot="{ open }">
    <PopoverButton :class="[open ? 'text-white' : 'text-indigo-100', 'group rounded-md inline-flex items-center focus:outline-none ',
    open ? 'text-white' : 'text-indigo-100', 'text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10']">
      <span>Hulp</span>
      <ChevronDownIcon :class="[open ? 'text-white' : 'text-indigo-100', 'ml-2 h-5 w-5 group-hover:text-white']" aria-hidden="true" />
    </PopoverButton>

    <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
      <PopoverPanel class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
            <a v-for="item in solutions" :key="item.name" :href="item.href" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
              <component :is="item.icon" class="flex-shrink-0 h-6 w-6 text-indigo-600" aria-hidden="true" />
              <div class="ml-4">
                <p class="text-base font-medium text-gray-900">
                  {{ item.name }}
                </p>
                <p class="mt-1 text-sm text-gray-500">
                  {{ item.description }}
                </p>
              </div>
            </a>
          </div>
          <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
            <div v-for="item in callsToAction" :key="item.name" class="flow-root">
              <a :href="item.href" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                <component :is="item.icon" class="flex-shrink-0 h-6 w-6 text-gray-400" aria-hidden="true" />
                <span class="ml-3">{{ item.name }}</span>
              </a>
            </div>
          </div>
        </div>
      </PopoverPanel>
    </transition>
  </Popover>
</template>

<script>
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/solid'
import {
  ChartBarIcon,
  CursorClickIcon,
  PhoneIcon,
  PlayIcon,
  RefreshIcon,
  ShieldCheckIcon,
  ViewGridIcon,
} from '@heroicons/vue/outline'

const solutions = [
  {
    name: 'Analyse',
    description: 'Krijg een beter inzicht in de cijfers die ertoe doen.',
    href: '#',
    icon: ChartBarIcon,
  },
  {
    name: 'Toenadering',
    description: 'Spreek rechtstreeks tot uw potentieele klanten.',
    href: '#',
    icon: CursorClickIcon,
  },
  {
    name: 'Integraties',
    description: "Maak verbinding met tools van derden die u al gebruikt.",
    href: '#',
    icon: ViewGridIcon,
  },
  {
    name: 'Automatisering',
    description: 'Houd meer tijd over om te doen wat u leuk vind.',
    href: '#',
    icon: RefreshIcon,
  },
]
const callsToAction = [
  { name: "Bekijk Demo's", href: '#', icon: PlayIcon },
  { name: 'Chat met Support', href: '#', icon: PhoneIcon },
]

export default {
  components: {
    Popover,
    PopoverButton,
    PopoverPanel,
    ChevronDownIcon,
  },
  setup() {
    return {
      solutions,
      callsToAction,
    }
  },
}
</script>