<template>
   <b-container>
        <form @submit.prevent="login">
            <b-container>
            <b-row class="my-5">
            <b-col sm="2">
                <label  for="membershipFirstName"><strong> Email:</strong></label>
            </b-col>
            <b-col sm="8" class="b-secure">
                <b-form-input type="email"  v-model="form.email" placeholder="Entrer votre E-mail"></b-form-input>
            </b-col>
            </b-row>
            <b-row class="my-5">
            <b-col sm="2">
                <label  for="membershipFirstName"><strong> Mot de Passe: </strong></label>
                 
            </b-col>
            <b-col sm="8" class="b-secure">
                <b-form-input :type="show ?'password':'text'"  v-model="form.password" placeholder="Entrer votre mot de passe"></b-form-input>
                <div class="mt-1">
				    <b-link @click="show = !show" >
                                <font-awesome-icon v-show="!show" :icon="['fas', 'eye']"/>
                                <font-awesome-icon  v-show="show" :icon="['fas', 'low-vision']"/>
				    </b-link>
				</div>
            </b-col>
            </b-row>
            <input type="submit" name="saveMembership"  value="Se Connecter" class="mb-5 btn-seconnecter">
            </b-container>     
        </form>
   </b-container>
</template>

<script>
export default {
 data(){
     return{
         form:{
         email:'',
         password:''
         }
         ,
         show:'false'
     }
 },
 methods:{
     async login(){
        //  	try{
        //     await this.$auth.loginWith('local2', {
        //             data: this.form
        //             })
		// 	window.location.href='/';
			

		// }catch(e){
		// 	console.log('false');
            
    	// }
   
    const api=await this.$axios.post('/candauth/login',this.form);
    if(api.data.success){
      console.log(api.data.success);
    }

   
     
     }
 }
}
</script>

<style>
.btn-seconnecter{
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
.btn-seconnecter:hover{
    color: #2c333a;
    border-color: #116d74;
    background-color: #46e4f0;
}
.b-secure input[type="password"], .b-secure input[type="text"], .b-secure input[type="email"]{
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
 

</style>