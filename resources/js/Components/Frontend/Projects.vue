<template>
    <div class="container mx-auto">
        <nav
            class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100"
        >
            <ul class="flex flex-row lg:flex-row justify-between items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button @click="filterProjects('all')"
                        class="inline-block py-3 px-4 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white"
                        :class="[
                            selectedSkill === 'all' ? 'text-gray-900 bg-gray-100' : '',
                        ]"
                    >
                        All
                    </button>
                </li>
                <li
                    class="cursor-pointer capitalize m-4"
                    v-for="projectSkill in skills.data"
                    :key="projectSkill.id"
                >
                    <button @click="filterProjects(projectSkill.id)" 
                    :class="[
                            selectedSkill === projectSkill.id ? 'text-gray-900 bg-gray-100' : '',
                        ]"
                        class="inline-block py-3 px-4 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white"
                    >
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project" />
        </section>
    </div>
</template>

<script setup>
    import { ref } from "vue";
    import Project from "./Project.vue";
    const props = defineProps({
            skills: Object,
            projects: Object,
    });
    const filteredProjects = ref(props.projects.data);
    const selectedSkill = ref("all");
    
    const filterProjects = (id) =>{
        if(id == "all"){
            filteredProjects.value = props.projects.data;
            selectedSkill.value = id;
        }else{
            filteredProjects.value = props.projects.data.filter((project) =>{
                return project.skill.id === id;
            });
            selectedSkill.value = id;
        }
    }
</script>