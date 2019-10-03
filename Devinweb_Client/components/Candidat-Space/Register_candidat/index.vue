<template>
  <div>
      <section class="grid_10 prefix_1 suffix_1 container pr-5 pl-5 mt-4">
                  
                     <form id="membership-registration-form"  @submit.prevent="Register">
                        <div>
                            <label for="membershipFirstName" class="required"> First name:</label>             
                            <input type="text" name="membershipFirstName"  v-model="first_name" required="" id="membershipFirstName">          
                        </div >
                        <div >
                            <label for="membershipLastName" class="required"> Last name:</label>          
                            <input type="text" name="membershipLastName" v-model="last_name" required="" id="membershipLastName"  >    
                        </div >
                        <div>
                            <label for="membershipMobile" class="required"> Mobile:</label>
                            <input type="text" name="membershipMobile" v-model="mobile"  required="" id="membershipMobile" > 
                        </div>
                        <div >
                            <label for="membershipEmail" class="required"> Email:</label>
                            <input type="text" name="membershipEmail" v-model="email" required="" id="membershipEmail">   
                        </div >
                        <div>
                            <label for="membershipPassword" class="required"> Mot de passe:</label>
                            <input type="password" name="membershipPassword" v-model="password"  required="" id="membershipPassword" >       
                        </div>
                        <div>
                            <label for="membershipPassConfirm" class="required"> Confirmer le mot de passe:</label>
                            <input type="password" name="membershipPassConfirm" id="membershipPassConfirm" >  
                        </div>
                        
                        <input type="hidden" class="membership-secure-code" name="membership-secure-code" >
                
                        <div
                         class="clearfix">
                            <span class="fl-left">
                                <input type="checkbox" required="">
                            </span>
                            <span class="grid_10">En cochant cette case, j’accepte que mes coordonnées, mon CV, mes critères de recherche et les autres informations que je communique soient traitées et conservées par Devinweb, dans le but de me proposer des offres d’emploi et de stage correspondant à mes critères de recherche</span>
                        </div>
                        <input type="submit" name="saveMembership" id="saveMembership" value="S'enregistrer" class="mb-5">
                    </form>
                </section>


              
  </div>
</template>

<script>
export default {
    data(){
        return{
                first_name:'',
                last_name:'',
                mobile:'',
                email:'',
                password:''
            
        }
    },
    methods:{
         async Register(){
            let register={
                 first_name: this.first_name,
                last_name:this.last_name,
                mobile:this.mobile,
                email:this.email,
                password:this.password

            }

           
             console.log(register);
             
             await   this.$axios.post('/candauth/register',register);
            //  this.$auth.login({data: register});
            //  this.$router.push({name:'index'});

        }
    }



}
</script>

<style>


#membership-registration-form div {
   padding-top: 0;
   padding-bottom: 50px;
}
.grid_10 #membership-registration-form div label{
    display: block;
    margin-bottom: .25em;
    width: 30%;
    float: left;
    font-weight: bold;
    text-align: left;
}
label.required:after {
    color: #f65314;
    content: ' *';
}
.grid_10 form div input{
    border-width: 2px;
    border-style: solid;
    border-color: #bbb;
    padding: 0 .5em;
    height: 2.3em;
    line-height: 1.3em;
    width: 70%;
    float: left;
    font-family: Helvetica,"Helvetica Neue",Arial,sans-serif;
    background-color: #fff;
    color: #2f2f2f;
    will-change: auto;
    transition: all .3s ease;
    max-width: 100%;
}

.fl-left {
    float: left !important;
}
.clearfix input[type="checkbox"]{
    box-sizing: border-box;
    padding: 0;
    border: 0;
    height: 25px;
    width:15px;
    
}
#saveMembership{
    float: right;
    background: #6bacc5;
    font-family: 'Open Sans',sans-serif;
    border-width: 0;
    font-size: 1.5em;
    font-weight: lighter;
    will-change: auto;
    border-bottom: 3px solid #397991;
    border-radius: 5px;
    text-align: center;
    color: #fff;
    
}
#saveMembership:hover{
    color: #2c333a;
    border-color: #116d74;
    background-color: #46e4f0;
}
</style>