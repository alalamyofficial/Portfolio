<template>
  <div>
    <Head title="Skills Index" />

    <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Skills
        </h2>
      </template>

      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex justify-end m-2 p-2">
            <Link
              href="/skills/create"
              class="
                px-4
                py-2
                bg-indigo-500
                hover:bg-indigo-700
                text-white
                rounded-md
              "
              >New Skill</Link
            >
          </div>

          <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full">
                    <thead class="bg-white border-b">
                      <tr>
                        <th
                          scope="col"
                          class="
                            text-sm
                            font-medium
                            text-gray-900
                            px-6
                            py-4
                            text-left
                          "
                        >
                          ID
                        </th>

                        <th
                          scope="col"
                          class="
                            text-sm
                            font-medium
                            text-gray-900
                            px-6
                            py-4
                            text-left
                          "
                        >
                          Name
                        </th>
                        <th
                          scope="col"
                          class="
                            text-sm
                            font-medium
                            text-gray-900
                            px-6
                            py-4
                            text-left
                          "
                        >
                          Image
                        </th>

                        <th
                          scope="col"
                          class="
                            text-sm
                            font-medium
                            text-gray-900
                            px-6
                            py-4
                            text-left
                          "
                        >
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        v-for="skill in skills.data"
                        :key="skill.id"
                        class="bg-gray-100 border-b"
                      >
                        <td
                          class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          "
                        >
                          {{ skill.id }}
                        </td>
                        <td
                          class="
                            text-sm text-gray-900
                            font-light
                            px-6
                            py-4
                            whitespace-nowrap
                          "
                        >
                          {{ skill.name }}
                        </td>

                        <td
                          class="
                            text-sm text-gray-900
                            font-light
                            px-6
                            py-4
                            whitespace-nowrap
                          "
                        >
                          <div class="py-4 px-6">
                            <img
                              :src="skill.image"
                              alt="image"
                              class="w-12 h-12 rounded-full"
                            />
                          </div>
                        </td>
                        <td>
                          <Link
                            :href="route('skills.edit', skill.id)"
                            as="button"
                            type="button"
                            class="font-medium text-blue-500 hover:text-blue-700 mr-2"
                            >Edit
                          </Link>
                          <Link
                            :href="route('skills.destroy', skill.id)"
                            method="delete"
                            as="button"
                            type="button"
                            class="font-medium text-red-500 hover:text-red-700 mr-2"
                            >Delete
                          </Link>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  </div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLink from "@/Components/NavLink.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
  skills: Object,
});
</script>