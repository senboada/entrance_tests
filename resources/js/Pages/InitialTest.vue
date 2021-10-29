<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        First test
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div>
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
              <div class="mt-8 text-2xl">Pregunta 1:</div>

              <div class="mt-6 text-gray-500">
                Si revisaras las peticiones (request) realizados en esta pagina.
                Que numero obtendrias?
              </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-6 gap-4">
              <div
                class="
                  p-6
                  border-t border-b border-gray-200
                  col-start-2 col-span-4
                "
              >
                <form class="w-full">
                  <div class="flex flex-wrap">
                    <label
                      class="
                        block
                        uppercase
                        tracking-wide
                        text-gray-700 text-xs
                        font-bold
                        mb-2
                      "
                      for="grid-first-name"
                    >
                      Respuesta
                    </label>
                    <input
                      class="
                        appearance-none
                        block
                        w-full
                        bg-gray-200
                        text-gray-700
                        border border-red-500
                        rounded
                        py-3
                        px-4
                        mb-3
                        leading-tight
                        focus:outline-none focus:bg-white
                      "
                      id="grid-first-name"
                      type="text"
                      placeholder="Indique la respuesta que considere correcta"
                    />
                  </div>
                  <p class="text-red-500 text-xs italic">
                    La respuesta no es correcta
                  </p>
                </form>

                <div class="flex items-center justify-between">
                  <button
                    type="button"
                    class="
                      inline-flex
                      items-center
                      py-2
                      px-4
                      bg-green-500
                      text-white
                      font-semibold
                      rounded-lg
                      shadow-md
                      hover:bg-white hover:text-green-500
                      focus:outline-none
                      text-base
                    "
                    tabindex="-1"
                  >
                    <svg
                      class="
                        animate-spin
                        -ml-1
                        mr-3
                        h-5
                        w-5
                        text-white
                        hover:bg-white hover:text-green-500
                      "
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <circle
                        class="opacity-25 hover:bg-white hover:text-green-500"
                        cx="12"
                        cy="12"
                        r="10"
                        stroke="currentColor"
                        stroke-width="4"
                      ></circle>
                      <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                      ></path>
                    </svg>
                    Comprobar la respuesta
                  </button>

                  <a
                    class="
                      inline-block
                      align-baseline
                      font-bold
                      text-sm text-blue-500
                      hover:text-blue-800
                    "
                    href="#"
                  >
                    Quiero una ayuda!
                  </a>
                </div>
                <div
                  class="
                    bg-blue-100
                    border-t border-b border-blue-500
                    text-blue-700
                    px-4
                    py-3
                    mt-8
                  "
                  role="alert"
                >
                  <p class="font-bold">La ayuda es la siguiente:</p>
                  <p class="text-sm">
                    Intenta acceder a las herramientas de desarrollador y ve a
                    la pestana network
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayoutNoSession.vue";

export default defineComponent({
  components: {
    AppLayout,
  },
});
</script>