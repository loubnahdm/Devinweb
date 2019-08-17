<template>
    <div class="container pt-3" >
        
        <h3>Changer Votre Mot de Passe</h3>
        <form class="row form-group">
            <ul>
					<li>
						<label for='pass'>Votre ancien mot de passe</label><br/>
						<input type='password' name='pass' class="form-control-mdp" placeholder="Current Password"/>
					</li><br/>
					<li>
						<label for='NewPass'>Votre nouveau mot de passe</label><br/>
						<input type='password' name='NewPass'  class="form-control-mdp" placeholder="New Password"/>
					</li><br/>
					<li>
						<label for='NewPassVerif'>Confirmez votre nouveau mot de passe</label><br/>
						<input type='password' name='NewPassVerif'  class="form-control-mdp" placeholder="Confirm Password"/>
					</li><br/>
					<li><input type='submit' name='valider' class="btn btn-outline-secondary "/></li>
				</ul>
        </form>
    </div>
</template>

<script>
export default {
 methods:{ 
     
        }}
</script>

<style>

.form-group ul{
list-style: none;
}
/* .form-group li input{

} */
.form-control-mdp{
    border: 3px solid #00B4CC;
  background: #f1f5f8;
  padding: 5px;
  height: 42px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
  width: 400px;
}
.form-control-mdp:focus{
    color: rgb(6, 158, 179);
}
.btn-outline-secondary{
    margin-left: 80%;
}

</style>
