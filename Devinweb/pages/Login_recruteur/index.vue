<template>

  <div class="container">
	<div class="form-style-10">	
			<div class="devin-top">
				<img src="https://media.licdn.com/dms/image/C4E0BAQHvIw1TBFd2SQ/company-logo_200_200/0?e=2159024400&v=beta&t=w100VtQAv8Ku3pamEAPTXGWGnVrgZqRocZYPLOI03Zs" >			
				<h1>Connexion </h1>
			</div>
			<form  @submit.prevent="login">
	

				<div class="section">
					<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
										<path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/>
										</svg>
					</span>
					Email
				</div>
				<div class="inner-wrap">
					<input type="email" name="field3" placeholder="Entrer Email Address" v-model="email"/>
				
				</div>

				<div class="section">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
						<path class="heroicon-ui" d="M7 10V7a5 5 0 1 1 10 0v3h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h2zm2 0h6V7a3 3 0 0 0-6 0v3zm-4 2v8h14v-8H5zm7 2a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1z"/>
						</svg>
					</span>
					Mot de passe 
				</div>

				<div class="inner-wrap">
					<input type="password" name="field5" placeholder="Entrer Password" v-model="password" />
				</div>
				<div class="button-section">
					<nuxt-link to="/Espace-Recruteur"  ><input type="submit" name="Sign Up"/></nuxt-link>
					<!-- <input type="submit" name="Sign Up" :loading="loading"  :disabled="loading"/> -->
                    <span class="privacy-policy">
					<a href="#" class="txt1">Mot de passe perdu?</a>
					</span>
				</div>
			</form>
		</div>
  </div>
</template>
<script>
export default {
	data(){return{
		 email: '',
      password: '',
      loading: false
	}},
	// asyncData(context){
    //  return axios.post('#').then((res)=>{
	// 	 if(res){ return res}
	// 	 else{
    //         context.error();
	// 	 }
	//  }).catch((err)=>{
	// 	 context.error();
	//  })
	// }
	//,
	
	methods:{
		login: function(){
			this.loading = true;
			this.$store.dispatch('#', {
					email: this.email,
					password: this.password
				}).then(result => {
					this.loading = false
					this.$router.push('/Espace-Recruteur')
				}).catch(error => {
					this.loading = false
				})
			
		}
	}
}
</script>

<style>


@import url('http://fonts.googleapis.com/css?family=Bitter');


.form-style-10{
	width:450px;
	padding:30px;
	margin:16% auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
	-webkit-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #f1f5f8;
	border-radius: 6px;
	margin-bottom: 20px;
}
.form-style-10 .devin-top {
	background:#00B4CC;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.8);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.8);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.9);
	border: 1px solid #00B4CC;
}
.form-style-10 .devin-top h1{
	font: normal 30px 'Bitter', serif;
	color:#fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
}
.form-style-10 .devin-top  img{
	float: right;
	width: 120px;
	background:#ededed;
	border-radius: 100%;
	margin-right: -60px;
	margin-top: -60px;
	box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
	-webkit-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);

	
}


.form-style-10 input[type="email"],
.form-style-10 input[type="password"]
 {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: #00B4CC;
	margin-bottom: 15px;
	margin-left:10px; 
	margin-top: 10px;
	float: left;
}
.form-style-10 .section span {
	background:#00B4CC;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -65px;	
	color: #fff;
	margin-top: -10px;
}
.form-style-10 input[type="submit"]{
	background: #00B4CC;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #00B4CC;
	font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
	background:#2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
	float: right;
	width: 250px;
	font: 12px Arial, Helvetica, sans-serif;
	color: #4D4D4D;
	margin-top: 10px;
	text-align: right;
}
</style>








