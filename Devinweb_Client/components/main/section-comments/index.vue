<template>
  <div>
      <div class="border-b pb-4 mb-8">
           <div  class="border rounded mb-4 p-3" v-for="(comment,index) in comments" :key="index">  {{comment.body}}</div>
      </div>
      <form  class="flex flex-col"  @submit.prevent='submitComment'>
          <h3 class="font-normal text-grey-darkest text-sm mb-3"> Nouveau Commentaire :</h3>
          <b-form-textarea id="textarea" v-model="comment" placeholder="Enter something..." 
                           rows="3"  max-rows="6" class="border rounded p-3 mb-3"></b-form-textarea>
                           <!-- <textarea v-model="comment"></textarea> -->

          <b-button type="submit" class="border rounded py-2" variant="outline-primary">Commenter</b-button>                 


           

      </form>
  </div>
</template>

<script>
export default {
    layout:'default',
    data(){
        return{
            comment:'',
            comments:[{body:'1 com'},{body:'2 com'}]
        }
    },
    methods:{
      async  submitComment(){
            // console.log(this.comment);
             await this.$axios.$post('/comments',{
                content:this.comment
            })
            
        }
    }

}
</script>

<style>

</style>