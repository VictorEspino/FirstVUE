<template>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-8 py-3">
                    <div>  
                        <label class="block text-gray-500 font-bold mb-1">
                                Publicado en : {{ pensamiento_local.created_at }}
                        </label>
                    </div>
                      <div v-if="modoEdicion"><input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="desc_pensamiento" type="text" value="" v-model="pensamiento_local.desc"></div>
                    <div class="py-3" v-else> {{ pensamiento_local.desc}} </div>
                  
                    <div class="py-3">    
                    	<button v-if="modoEdicion" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" v-on:click="actualizar()">
                            Guardar
                        </button>
                        <button v-else class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" v-on:click="editar()">
                            Editar
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" v-on:click="eliminar()">
                            Eliminar
                        </button>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default{
		props:['pensamiento_local'], //ESTA PROPIEDAD INDICA EL NOMBRE DEL OBJETO QUE SE DEBE IDENTIFICAR, DENTRO YA TIENE LAS PROPIEDADES
		data(){
			return {
				  'modoEdicion':false,
				  'desc_pensamiento':''
				}
		},
		mounted(){ 
			console.log('Template de Display OK')
		},
		methods : {
			eliminar(){
				this.$emit('borrar')
			},
			editar(){
				this.modoEdicion=true;
			},
			actualizar(){
				this.modoEdicion=false;
				this.$emit('actualizar',this.pensamiento_local);
			}
		}
	}
	
</script>