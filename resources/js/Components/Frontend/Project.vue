<template>
  <Link
    v-motion
    :initial="{
      opacity: 0,
      y: 100,
    }"
    :enter="{
      opacity: 1,
      y: 0,
    }"
    :href="project.project_url"
    class="group flex flex-col items-center text-center cursor-pointer"
  >
    <div class="mb-6">
      <img class="rounded-2xl h-56" :src="project.image" :alt="project.image" />
    </div>
    <span
      class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3"
      >{{ project.skill.name }}</span
    >
    <h3
      class="group-hover:text-light-tail-500 text-2xl font-semibold capitalize mb-3"
    >
      <a
        :href="project.project_url"
        onclick="window.open(this.href,'_blank');return false;"
        >{{ project.name }}</a
      >
    </h3>
  </Link>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
defineProps({
  project: Object,
});
</script>