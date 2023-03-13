<template>
    <div>
      <Head title="Create New Skill" />
  
      <AuthenticatedLayout>
        <template #header>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Skill
          </h2>
        </template>
  
        <div class="py-12">
          <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
            <form @submit.prevent="submit" enctype="multipart/form-data">
              <div>
                <InputLabel for="name" value="name" />
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
    skill:Object
  })

  const form = useForm({
    name: props.skill?.name,
    image: null,
  });
  const submit = () => {
    router.post('/skills/'+props.skill.id,{
        _method:'put',
        name: form.name,
        image: form.image,
    });
  };
  </script>