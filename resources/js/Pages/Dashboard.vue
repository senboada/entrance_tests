<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <template v-for="(area, index) in areas " :key="index">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <welcome :area="area" />
            </div>
            <br>
        </template>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";

export default defineComponent({
  components: {
    AppLayout,
    Welcome,
  },
  data() {
    return {
      areas : [
        {
            "nombre" : "Área de desarrollo",
            "descripcion" : "El siguiente listado son las pruebas habilitadas para ser parte del área de desarrollo web.",
            "evaluaciones" : [
                {
                    "titulo" : "Desarrollador 1",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior I",
                    "icono" : "",
                },
                {
                    "titulo" : "Desarrollador 2",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 2",
                    "icono" : "",
                },
                {
                    "titulo" : "Desarrollador 3",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 3",
                    "icono" : "",
                },
                {
                    "titulo" : "Desarrollador 4",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 4",
                    "icono" : "",
                },
                {
                    "titulo" : "Desarrollador 5",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 5",
                    "icono" : "",
                }
            ]
        },
        {
            "nombre" : "Área de calidad",
            "descripcion" : "El siguiente listado son las pruebas habilitadas para ser parte del área de calidad.",
            "evaluaciones" : [
                {
                    "titulo" : "Calidad 1",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior I",
                    "icono" : "",
                },
                {
                    "titulo" : "Calidad 2",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 2",
                    "icono" : "",
                },
                {
                    "titulo" : "Calidad 3",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 3",
                    "icono" : "",
                },
                {
                    "titulo" : "Calidad 4",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 4",
                    "icono" : "",
                },
                {
                    "titulo" : "Calidad 5",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 4",
                    "icono" : "",
                },
                {
                    "titulo" : "Calidad 6",
                    "descripcion" : "Esta es la prueba creada para el perfil de desarrolador junior 4",
                    "icono" : "",
                }
            ]
        }
      ]
    };
  },
});
</script>
