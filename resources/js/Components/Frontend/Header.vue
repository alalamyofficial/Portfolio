<template>
  <header class="fixed z-50 w-full p-3">
    <nav
      :class="{
        'bg-gray-100 border-gray-200 py-2.5 dark:bg-gray-900': scrollBg,
        'bg-white border-gray-200 py-2.5 dark:bg-gray-900': !scrollBg,
      }"
      class="bg-white border-gray-200 py-2.5 dark:bg-gray-900"
    >
      <div
        class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto"
      >
        <a href="#" class="flex items-center">
          <img
            src="https://flowbite.com/docs/images/logo.svg"
            class="h-6 mr-3 sm:h-9"
            alt="Landwind Logo"
          />
          <span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
            >Veasna</span
          >
        </a>

        <div
          class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
          id="mobile-menu-2"
        >
          <ul
            class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
          >
            <li v-for="(navigation, index) in navigations" :key="index">
              <a
                :href="navigation.href"
                class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 hover:text-blue-600 dark:text-white"
                aria-current="page"
                >{{ navigation.name }}</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref, onMounted } from "vue";
const scrollBg = ref(false);
const setScrollBg = (value) => {
  scrollBg.value = value;
};
onMounted(() => {
  window.addEventListener("scroll", () => {
    return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
  });
});
const navigations = [
  { name: "Home", href: "#hero" },
  { name: "About", href: "#about" },
  { name: "Portfolio", href: "#portfolio" },
  { name: "Service", href: "#service" },
  { name: "Contact", href: "#contact" },
];
</script>