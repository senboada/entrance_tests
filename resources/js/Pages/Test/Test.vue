<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <pre>{{ test }}</pre>
      </h2>
    </template>

    <Question />
    
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayoutNoSession.vue";
import Question from "@/Pages/Test/Question.vue"; 
export default defineComponent({
  components: {
    AppLayout,
    Question,
  },
        props: {
            test: Object,
        },
  created() {
    this.loadQuestion();
  },
  methods:{
    loadQuestion(){
      
    }
  }
});
</script>