<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skill.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Service from '@/Components/Frontend/Service.vue';
import Contact from '@/Components/Frontend/Contact.vue';

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  skills:Object,
  projects:Object
});
</script>

<template>
  <Head title="Welcome To Profolio" />

  <div class="">
    <FrontendLayout>
      <!--Hero Section-->
      <Hero class="p-5" />
      <!--Promote Section-->
      <Promote class="p-5" />
      <!--About Section-->
      <About class="p-5" />
      <!--Skill Section-->
      <Skills :skills="skills" />
      <!--Portfolio-->
      <Portfolio :skills="skills" :projects="projects" />
      <!--Service Section-->
      <Service />
      <!--Contact Section-->
      <Contact />
    </FrontendLayout>
  </div>
</template>
