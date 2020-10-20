<template>
    <div>
        <div class="py-3"></div>
    <!--PANEL DE CAPTURA -->
        <db_pensamiento-form @nuevo="agregarPensamiento(...arguments)"></db_pensamiento-form>
    <!--PANELES DE REGISTROS -->
    <!--INDEX SE USA PARA ADEMAS DE OBTENER EL OBJETO COMPLETO TAMBIEN SEPAMOS SU POSICION-->
        <db_pensamiento-guardado 
         v-for="(pensamiento,index) in Pensamientos"  
         :key="pensamiento.id"
         :pensamiento_local="pensamiento"
         @borrar="eliminarPensamiento(index)"
         @actualizar="actualizarPensamiento(index,...arguments)"
         >
             
         </db_pensamiento-guardado>
    </div>
</template>

<script>
    export default{        
        data(){
            return{
                Pensamientos : []
            }
        },
        mounted(){ 
            axios.get('/pensamientos').then((response)=>
                 {
                    this.Pensamientos=response.data
                 }
                );
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