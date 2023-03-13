<template>
    <section class="bg-slate-100 dark:bg-gray-900">
        <div class="max-w-screen-xl pt-12 px-5 pb-8 mx-auto lg:pb-16">
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                <div v-for="skill in skills.data" :key="skill.id" class="flex items-center justify-center">
                    <img :src="skill.image" :alt="skill.image" class="lg:h-20" />
                </div>
                
            </div>
        </div>
    </section>
</template>

<script setup>
    defineProps({
        skills: Object,
    })
</script>