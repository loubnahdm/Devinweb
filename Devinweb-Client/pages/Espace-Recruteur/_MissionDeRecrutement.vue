<template>
    <div class=" container "> 
        <h2>Mission de Recrutement</h2>
        <form method="post" @submit.prevent="addProjet" class="form-MDR p-5 m-5">
            <!-- @submit.prevent="$store.dispatch('Projets/storeProjet',this.mission)" -->
        <div>
        
                <b-form-radio-group
                    v-model="selected"
                    :options="options"
                    name="radio-inline"
                    class="ml-5 "
                    required
                ></b-form-radio-group>
        
        </div>
         <b-container>
             <b-row class="my-1">
                 <b-col sm="3" class="mt-3" v-bind:style='styleObjetformlabel' >
                     <label><strong>   titre de mission : </strong></label>
                 </b-col>
                 <b-col sm="9" class="mt-3">
                     <b-form-input  type="text" placeholder="Entrer le titre de la mission."
                      v-model="title"    required></b-form-input>
                 </b-col>
             </b-row>
              <b-row class="my-1" >
                 <b-col sm="3" class="mt-3" v-bind:style='styleObjetformlabel'>
                     <label> <strong>  Fonction : </strong></label>
                 </b-col>
                 <b-col sm="9" class="mt-3">
                     <b-form-input type="text" placeholder="Entrer la fonction."
                      v-model="fonction"    required></b-form-input>
                 </b-col>
             </b-row>
              <b-row class="my-1">
                 <b-col sm="3" class="mt-3" v-bind:style='styleObjetformlabel'>
                     <label> <strong>  Niveau d’etude : </strong></label>
                 </b-col>
                 <b-col sm="9" class="mt-3">
                     <b-form-input type="text" placeholder="Entrer le niveau d'etude ."
                      v-model="level_of_study"   required></b-form-input>
                 </b-col>
             </b-row>
              <b-row class="my-1">
                 <b-col sm="3" class="mt-3" v-bind:style='styleObjetformlabel'>
                     <label><strong>  Experience : </strong></label>
                 </b-col>
                 <b-col sm="9" class="mt-3">
                     <b-form-input type="number"  v-model="experience" required></b-form-input>
                 </b-col>
             </b-row>
              <b-row class="my-1">
                 <b-col sm="3" class="mt-3" v-bind:style='styleObjetformlabel'>
                     <label> <strong>  Salaire : </strong> </label>
                 </b-col>
                 <b-col sm="9" class="mt-3">
                     <b-form-input type="number"  v-model="salary" required></b-form-input>
                 </b-col>
             </b-row>
         </b-container>

         


        <b-container class="mt-3">
         <b-row>
            <b-col sm="3" v-bind:style='styleObjetformlabel'>
            <label for="textarea-auto-height"><strong> Description Contexte: </strong></label>
            </b-col>
            <b-col sm="9">
            <b-form-textarea
                id="textarea-auto-height"
                placeholder="Description Contexte"
                rows="3"
                max-rows="8"
                v-model="description"
                   required
            ></b-form-textarea>
            </b-col>
       </b-row>
        </b-container>
        <b-container class="mt-3">
       <b-row>
            <b-col sm="3" v-bind:style='styleObjetformlabel'>
            <label for="textarea-auto-height"><strong>Description Profil: </strong></label>
            </b-col>
            <b-col sm="9">
            <b-form-textarea
                id="textarea-auto-height"
                placeholder="Description Profil"
                rows="3"
                max-rows="8"
            ></b-form-textarea>
            </b-col>
        </b-row>
        </b-container>
        <b-container class="mt-4 pb-4">
                   <b-button variant="outline-secondary" type="submit"
                    class="btn-publier " >Publier</b-button>
         </b-container>
        </form>


    </div>
</template>
<script>


export default {
    layout:'custom',
    data() {
      return {
       
        styleObjetformlabel:{
            textAlign:'left',
        },
     
        options: [
          { text: 'Stage', value: 'stage' },
          { text: 'Emploi', value: 'emploi' }
        ],
      
        selected: 'stage',
        description:'',
        title:'',
        fonction:'',
        level_of_study:'',
        experience:0,
        salary:0,
        
       
        
      }
    },
  methods:{
     async  addProjet(){
          let p={
            etat:this.selected,
            fonction:this.fonction,
            studylevel:this.level_of_study,
            experience:this.experience,
            salary:this.salary, 
            title:this.title,
            description:this.description
          }
          await this.$axios.$post('http://127.0.0.1:8000/api/projs',p)
          
      }
  }


}
</script>
<style>
.btn-publier{
    margin-left: 90%;
}
.form-MDR{
    /* background-color: #76a8a2; */
    background-image: url('http://blob-harmony.groupetva.ca/harmony/media/static/filemanager/content/1429848000/655x369-ciel_1429887614.jpg');
    background-size: 100% 100%;
    background-attachment: fixed;
    border-radius: 25px;
    border: 2px solid #ababac;
    box-shadow: 0px 4px 4px rgb(110, 110, 110);

    
}
</style>