<template>
  <div>
    <Head title="Create Edit Project" />

    <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Edit Project
        </h2>
      </template>

      <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
          <form @submit.prevent="submit" enctype="multipart/form-data">
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
              <InputError class="mt-2" :message="$page.props.errors.name" />
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
              <InputError class="mt-2" :message="$page.props.errors.project_url" />
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
              <InputError class="mt-2" :message="$page.props.errors.image" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <PrimaryButton
                class="ml-4 bg-green-500"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                Update
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
import { router } from '@inertiajs/vue3'


const props = defineProps({
  skills: Array,
  project: Object
});

const form = useForm({
  name: props.project?.name,
  image: null,
  skill_id: props.project?.skill_id,
  project_url: props.project?.project_url,
});
const submit = () => {
    router.post('/projects/'+props.project.id,{
        _method:'put',
        name: form.name,
        image: form.image,
        skill_id: form.skill_id,
        project_url: form.project_url,
    });
};
</script>