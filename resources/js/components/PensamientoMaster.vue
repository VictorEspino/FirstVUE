<template>
    <div>
        <div class="py-3"></div>
    <!--PANEL DE CAPTURA -->
        <pensamiento-form @nuevo="agregarPensamiento(...arguments)"></pensamiento-form>
    <!--PANELES DE REGISTROS -->
    <!--INDEX SE USA PARA ADEMAS DE OBTENER EL OBJETO COMPLETO TAMBIEN SEPAMOS SU POSICION-->
        <pensamiento-guardado 
         v-for="(pensamiento,index) in Pensamientos"  
         :key="pensamiento.id"
         :pensamiento_local="pensamiento"
         @borrar="eliminarPensamiento(index)"
         @actualizar="actualizarPensamiento(index,...arguments)"
         >
             
         </pensamiento-guardado>
    </div>
</template>

<script>
    export default{        
        data(){
            return{
                Pensamientos : [
                {
                    'id':1,
                    'desc':'DESDE EL ARREGLO_v2',
                    'created_at':'24/09/2020'
                },{
                    'id':2,
                    'desc':'OTRO DEL ARREGLO_v2',
                    'created_at':'25/09/2020'
                },{
                    'id':3,
                    'desc':'OTRO MAS DEL ARREGLO_v2',
                    'created_at':'26/09/2020'
                },{
                    'id':4,
                    'desc':'EL CUARTO DEL ARREGLO_v2',
                    'created_at':'27/09/2020'
                }
                ]
            }
        },
        mounted(){ 
            console.log('Template Master OK')
        },

        methods:{        
            agregarPensamiento(pensamiento_nuevo)
            {
                this.Pensamientos.push(pensamiento_nuevo);
            },
            eliminarPensamiento(index)
            {
                this.Pensamientos.splice(index,1);
            },
            actualizarPensamiento(index,pensamiento_editado)
            {
                this.Pensamientos[index]=pensamiento_editado;
            }
        }
    }
    
</script>