<template>
  <aside class="py-6 lg:col-span-3">
    <nav class="space-y-1">
      <router-link v-for="item in subNavigation" :key="item.name" :to="item.href"
        :class="[item.current ? 'bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700' : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900', 'group border-l-4 px-3 py-2 flex items-center text-sm font-medium']"
        :aria-current="item.current ? 'page' : undefined">
        <component :is="item.icon"
          :class="[item.current ? 'text-teal-500 group-hover:text-teal-500' : 'text-gray-400 group-hover:text-gray-500', 'flex-shrink-0 -ml-1 mr-3 h-6 w-6']"
          aria-hidden="true" />
        <span class="truncate">
          {{ item.name }}
        </span>
      </router-link>
    </nav>
  </aside>
</template>

<script>
import {
  CogIcon,
  CreditCardIcon,
  KeyIcon,
  UserCircleIcon,
} from '@heroicons/vue/outline'

const subNavigation = []

export default {
  setup() {
    return {
      subNavigation,
    }
  },
  created() {
    this.setNavigationItems();
  },
  methods: {
    setNavigationItems() {
      var subNavigation = [
        { name: 'Profiel', href: '/profile', icon: UserCircleIcon, current: false },
        { name: 'Teamleden', href: '/team', icon: UserCircleIcon, current: false },
        { name: 'Subscriptie', href: '/membership', icon: KeyIcon, current: false },
        { name: 'Facturen', href: '/invoices', icon: CreditCardIcon, current: false },
        { name: 'Integraties', href: '/integrations', icon: CogIcon, current: false },
      ];

      subNavigation.forEach((item) => {
        if (item.href === this.$route.href) {
          item.current = true
        }
      })
      
      this.subNavigation = subNavigation
    }
  }
}
</script>