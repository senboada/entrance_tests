<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-8 text-2xl">
                {{area.nombre}}
            </div>

            <div class="mt-6 text-gray-500">
                {{area.descripcion}}
            </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

            <template v-for="(test,index) in area.evaluaciones" :key="index">
                <div v-bind:class="divStyle(index)">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">{{test.titulo}}</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            {{test.descripcion}}
                        </div>

                        <a href="https://laravel.com/docs">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Acceder</div>

                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>
            </template>

        </div>
    </div>
    
</template>


<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

    export default defineComponent({
        components: {
            JetApplicationLogo,
        },
        props: {
            area: Object
        },
        methods: {
            divStyle: function (index) {
               if(index % 2 == 0){
                   return "p-6 border-t border-b border-gray-200 md:border-r";
               }else{
                    return "p-6 border-t border-b border-gray-200 md:border-l";
               }
            }
        }
    })
</script>
