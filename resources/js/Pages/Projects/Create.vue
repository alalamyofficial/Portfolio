<template>
  <div>
    <Head title="Create New Project" />

    <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          New Project
        </h2>
      </template>

      <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
          <form @submit.prevent="submit">
            <div class="mt-3 mb-3">
              <InputLabel for="skill_id" value="Skill" />

              <select
                v-model="form.skill_id"
                name="skill_id"
                id="skill_id"
                class=" block w-full"
              >
                <option
                  v-for="skill in skills"
                  :key="skill.id"
                  :value="skill.id"
                >
                  {{ skill.name }}
                </option>
              </select>
            </div>
            <div>
              <InputLabel for="name" value="Project Name" />
              <TextInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.name"
                required
                autofocus
              />
              <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
              <InputLabel for="project_url" value="URL" />
              <TextInput
                id="project_url"
                type="text"
                class="mt-1 block w-full"
                v-model="form.project_url"
                required
                autofocus
              />
              <InputError class="mt-2" :message="form.errors.project_url" />
            </div>

            <div class="mt-2">
              <InputLabel for="image" value="image" />
              <TextInput
                id="image"
                type="file"
                class="mt-1 block w-full"
                v-model="form.image"
                required
                autofocus
                @input="form.image = $event.target.files[0]"
              />
              <InputError class="mt-2" :message="form.errors.image" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <PrimaryButton
                class="ml-4"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                Store
              </PrimaryButton>
            </div>
          </form>
        </div>
      </div>
    </AuthenticatedLayout>
  </div>
</template>
  
<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import NavLink from "@/Components/NavLink.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
  skills: Array,
});

const form = useForm({
  name: "",
  image: null,
  skill_id: "",
  project_url: "",
});
const submit = () => {
  form.post(route("projects.store"));
};
</script>