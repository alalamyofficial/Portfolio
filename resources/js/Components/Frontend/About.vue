<template>
  <section id="about" class="bg-gray-50 dark:bg-gray-800">
    <div
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }"
      class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6"
    >
      <!-- Row -->
      <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
        <img
          class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex"
          src="https://news.utexas.edu/wp-content/uploads/2022/07/Hero-600x400-c-default.jpg"
          alt="hero image"
        />
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
          <h2
            class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white"
          >
            About Me
          </h2>
          <p class="mb-8 font-light lg:text-xl">
            A small river named Duden flows by their place and supplies it with
            the necessary regelialia.
          </p>
          <!-- List -->
          <ul
            role="list"
            class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700"
          >
            <li class="flex space-x-3">
              <!-- Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M18 12H6"
                />
              </svg>

              <span
                class="text-base font-medium leading-tight text-gray-900 dark:text-white"
                >Name: Mr Mohamed Adel</span
              >
            </li>
            <li class="flex space-x-3">
              <!-- Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M18 12H6"
                />
              </svg>

              <span
                class="text-base font-medium leading-tight text-gray-900 dark:text-white"
                >Date of birth: August 07, 1997</span
              >
            </li>
            <li class="flex space-x-3">
              <!-- Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M18 12H6"
                />
              </svg>

              <span
                class="text-base font-medium leading-tight text-gray-900 dark:text-white"
                >Address: San Francisco CA 97987 USA</span
              >
            </li>
            <li class="flex space-x-3">
              <!-- Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M18 12H6"
                />
              </svg>

              <span
                class="text-base font-medium leading-tight text-gray-900 dark:text-white"
                >Zip code: 1000</span
              >
            </li>
            <li class="flex space-x-3">
              <!-- Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M18 12H6"
                />
              </svg>

              <span
                class="text-base font-medium leading-tight text-gray-900 dark:text-white"
                >Email: clarkthomp@gmail.com</span
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>