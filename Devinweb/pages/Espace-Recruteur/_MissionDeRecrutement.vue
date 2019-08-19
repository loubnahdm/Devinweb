<template>
    <div class=" container "> 
        <h2>Mission de Recrutement</h2>
        <form method="post" action="." class="form-MDR p-5 m-5">
        <div>
        
                <b-form-radio-group
                    v-model="selected"
                    :options="options"
                    name="radio-inline"
                    class="ml-5 "
                ></b-form-radio-group>
        
        </div>
         <b-container   >
                    <b-row class="my-1" v-for="(data,index) in types" :key="index">
                    <b-col sm="3" v-bind:style='styleObjetformlabel' class="mt-3">
                        <label :for="`type-${data}`"> {{ data[0] }}  : </label>
                    </b-col>
                    <b-col sm="9" class="mt-3">
                        <b-form-input :id="`type-${data[1]}`" :type="data[1]"></b-form-input>
                    </b-col>
                    </b-row>
        </b-container>
        <b-container class="mt-3">
         <b-row>
            <b-col sm="3" v-bind:style='styleObjetformlabel'>
            <label for="textarea-auto-height">Description Contexte:</label>
            </b-col>
            <b-col sm="9">
            <b-form-textarea
                id="textarea-auto-height"
                placeholder="Description Contexte"
                rows="3"
                max-rows="8"
            ></b-form-textarea>
            </b-col>
       </b-row>
        </b-container>
        <b-container class="mt-3">
       <b-row>
            <b-col sm="3" v-bind:style='styleObjetformlabel'>
            <label for="textarea-auto-height">Description Profil:</label>
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
                   <b-button variant="outline-secondary" class="btn-publier ">Publier</b-button>
         </b-container>
        </form>







    </div>
</template>
<script>
export default {
    layout:'custom',
    data() {
      return {
        types: [
          ['Date de publication ','date'],
          ['Fonction','text'],
          ['Niveau d’etude ','number'],
          ['Experience ','number'],
          ['Salaire','number']
        ],
        styleObjetformlabel:{
            textAlign:'left',
        },
        selected: 'first',
        options: [
          { text: 'Stage', value: 'first' },
          { text: 'Emploi', value: 'second' }
        ]
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