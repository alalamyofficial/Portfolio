<template>
    <section id="portfolio" class="bg-white dark:bg-gray-900">
       <div  class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
           <div   v-motion
   :initial="{
     opacity: 0,
     y: 100,
   }"
   :visible="{
     opacity: 1,
     y: 0,
   }" class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
               <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">My latest work</h2>
               <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">We focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
           </div>
               <Projects :skills="skills" :projects="projects" />      
       </div>
     </section>
</template>

<script setup>
import Projects from "./Projects.vue";
   defineProps({
       skills: Object,
       projects: Object,
   })
</script>