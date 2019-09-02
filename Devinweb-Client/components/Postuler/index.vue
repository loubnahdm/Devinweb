<template>
<b-container class="bv-example-row-1  mt-5" >
  <form name="postule" id="postule" enctype="multipart/form-data">
      <b-card style="max-width: 70rem;margin-top:5%;">
        <b-form-group
        label-cols="5" 
        label-cols-lg="2" 
        label="Nom *:"
        label-align-sm="left"
        label-for="nested-Nom" class="ml-5"> 
       <b-col sm="10">
      <b-form-input id="nested-street" type="text"  class="" placeholder="Entrer Votre Nom" required></b-form-input>
       </b-col >
      </b-form-group>
      <b-form-group
        label-cols="5" 
        label-cols-lg="2" 
        label="Prénom *:"
        label-align-sm="left"
        label-for="nested-Prenom" class="ml-5"> 
       <b-col sm="10">
      <b-form-input id="nested-street" type="text"  class="" placeholder="Entrer Votre Prenom" required></b-form-input>
       </b-col >
      </b-form-group>
      <b-form-group
        label-cols="5" 
        label-cols-lg="2" 
        label="Adresse e-mail *:"
        label-align-sm="left"
        label-for="nested-e-mail" class="ml-5" > 
       <b-col sm="10">
      <b-form-input id="nested-street" type="text"  class="" placeholder="Entrer Votre e-mail" required></b-form-input>
       </b-col >
      </b-form-group>
      <b-form-group
        label-cols="5" 
        label-cols-lg="2" 
        label="Uploadez votre CV **:"
        label-align-sm="left"
        label-for="nested-CV" class="ml-5" > 
       <b-col sm="10">
     <b-form-file accept=".doc,.docx,.pdf, .rtf"></b-form-file>
    </b-col >
      </b-form-group>
       <b-form-group
        label-cols="5" 
        label-cols-lg="2" 
        label="Motivation *:"
        label-align-sm="left"
        label-for="nested-Motivation" class="ml-5" > 
       <b-col sm="10">
           <b-form-textarea
            id="textarea-state"
            v-model="text"
            :state="text.length >= 10"
            placeholder="Enter at least 10 characters"
            rows="3"
            ></b-form-textarea>
       </b-col >
      </b-form-group>
        <b-button variant="outline-success" class="float-right">Envoyer</b-button>
      </b-card>
    </form>
</b-container>
</template>

<script>
export default {
 data() {
      return {
        text: ''
      }
    }
}
</script>

<style>
.bv-example-row-1{
    border-top: 2px solid gray;
}
</style>