<template>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-8 py-3">
                <form action="" v-on:submit.prevent="nuevoPensamiento()"> 
                    <div>
                        <label class="block text-gray-500 font-bold mb-1">
                            Que estas pensando?
                        </label>
                        <div class="py-2">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="desc_pensamiento" type="text" value="" v-model="desc_pensamiento">
                        </div>
                    </div>
                    <div class="py-2">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                desc_pensamiento:''
            }
        },
        mounted(){ 
            console.log('Template de Captura OK')
        },
        methods:{
            nuevoPensamiento(){

                let pensamiento_capturado = {
                    'id':5,
                    'desc':this.desc_pensamiento,
                    'created_at':'21/12/2020'
                }
                this.$emit("nuevo",pensamiento_capturado);
                this.desc_pensamiento='';
            }
        }
    }
    
</script>