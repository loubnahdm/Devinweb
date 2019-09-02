<template>
  
<div>
  <b-navbar toggleable="lg" type="light"  variant="faded">
    <b-container>
    <b-navbar-brand href="#" >
      
                                   <img  src="http://d2wwknes1cy3mz.cloudfront.net/public/logo-b.png" alt="Card image">
       
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse" ></b-navbar-toggle>
 
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-form  class="searchBox">
          <input class="searchInput" type="text" name="" placeholder="Search"/>
                    <button class="searchButton" href="#">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
        
                     </button>
        </b-nav-form>
      </b-navbar-nav>
      
      
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto ">
        <div class="ligne_verticale d-none d-lg-block  mx-auto " ></div>
        <b-navbar-nav>
                  <b-nav-item href="#" right><notification-bell iconColor='#007bff' ></notification-bell></b-nav-item>
        </b-navbar-nav>

       <b-col class="BD"> <em>Bonjour <br> Devinweb</em></b-col>
        <b-nav-item-dropdown right   aria-role="dialog"  >
          <!-- Using 'button-content' slot -->
          
           <template slot="button-content"  >
              <font-awesome-icon :icon="['fas', 'user']" v-bind:style="style1"/>                            
           </template>
          
          
          
          <b-dropdown-item  custom aria-role="menuitem"  to="/Espace-Recruteur" class="view-profile-Devinweb">
                    
                     <div class="settingBlock">
                                  <div class="photo-container">
                                      <img src="https://media.licdn.com/dms/image/C4E0BAQHvIw1TBFd2SQ/company-logo_200_200/0?e=2159024400&v=beta&t=w100VtQAv8Ku3pamEAPTXGWGnVrgZqRocZYPLOI03Zs" class="nav-photo EntityPhoto-circle-4" alt="Devinweb" height="70" width="70">
                                  </div>

                                  <b-col md="4" class="info-container">
                                  <h3 class="name t-16 t-black t-bold">
                                      Devinweb
                                  </h3>
                                  <h4 class="occupation text-wrap" >
                                      Agence de Développement Logiciels, Web, Mobile
                                  </h4>
                                  </b-col>
                                  </div>

                                  <div class="settingBlock">
                                  <span class="artdeco-button ">
                                      Voir le profil
                                  </span>
                        </div>

          </b-dropdown-item>
          <hr class="dropdown-divider">
          <b-dropdown-item has-link aria-role="menuitem" class="btn-floating-rec btn-briefcase pr-2 " to="/Espace-Recruteur/:MissionDeRecrutement" >
                         <span  class="p-icon">
                                <font-awesome-icon :icon="['fas', 'briefcase']"/>
                                <span>Mission de Recrutement</span>
                           
                        </span>
          </b-dropdown-item>
          <hr class="dropdown-divider" aria-role="menuitem">
          <b-dropdown-item value="Changer-le-mot-de-passe" aria-role="menuitem" class="btn-floating-rec btn-edit  " href="#" @click="show=true">
                        <span class="p-icon" >
                        
                              <font-awesome-icon :icon="['fas', 'edit']"/>
                              <span>Changer le mot de passe</span>
                         
                          <!-- ============================================================================== -->


                            <b-modal id="modal-center" v-model="show" size="md" scrollable title="Scrollable Content"  ref="modal" @show="resetModal" @hidden="resetModal"  @ok="handleOk">
                                <template slot="modal-header" slot-scope="{ close }">
                                  <!-- Emulate built in modal header close button action -->
                                  <b-button size="sm" variant="outline-danger" @click="close()">
                                    Close 
                                  </b-button>
                                  <h5>Changer Votre Mot de Passe</h5>
                                </template>
                                <template slot="default" >
                                      <form  ref="form" @submit.stop.prevent="handleSubmit">
                                                <b-form-group
                                                            :state="CMDPState"
                                                            label="Votre ancien mot de passe"
                                                            label-for="Cpass-input"
                                                            invalid-feedback="Current Password is required"> 
                                                            <b-form-input
                                                                        id="Cpass-input"
                                                                        v-model="Current"
                                                                        :state="CMDPState"
                                                                        required
                                                                        class="form-control-mdp" placeholder="Current Password">
                                                            </b-form-input>
                                                </b-form-group>
                                                
                                                <b-form-group
                                                            :state="NMDPState"
                                                            label="Votre nouveau mot de passe"
                                                            label-for="Npass-input"
                                                            invalid-feedback="New Password is required" > 
                                                            <b-form-input
                                                                        id="Npass-input"
                                                                        v-model="New"
                                                                        :state="NMDPState"
                                                                        required
                                                                        class="form-control-mdp" placeholder="New Password" >
                                                            </b-form-input>
                                                </b-form-group>
                                                <b-form-group
                                                            :state="CFMDPState"
                                                            label="Confirmez votre nouveau mot de passe"
                                                            label-for="CFpass-input"
                                                            invalid-feedback="Confirm Password is required"
                                                            > 
                                                            <b-form-input
                                                                        id="CFpass-input"
                                                                        v-model="Confirm"
                                                                        :state="CFMDPState"
                                                                        required
                                                                        class="form-control-mdp" placeholder="Confirm Password"
                                                                    >
                                                            </b-form-input>
                                                </b-form-group>
                                              
             
                                   </form>
                                   
                                  </template>

                                  <template slot="modal-footer" slot-scope="{ ok, cancel}">
                                  
                                    <b-button size="sm" variant="outline-secondary" @click="ok()">
                                      valider
                                    </b-button>
                                    <b-button size="sm" variant="danger" @click="cancel()">
                                      Cancel
                                    </b-button>
                                  </template>
                              </b-modal>

                          <!-- ============================================================================== -->
                           



                        </span>
          </b-dropdown-item>
          <hr class="dropdown-divider" aria-role="menuitem">
          <b-dropdown-item value="logout" aria-role="menuitem"  class="btn-floating-rec btn-external-link-alt "  @click.prevent="logout" href="#">
                        <span  class="p-icon pb-3">
                        
                              <font-awesome-icon :icon="['fas', 'external-link-alt']"/>
                            <span>Déconnexion</span> 
                         
                                                     
                        </span>
          </b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    
      
    </b-collapse>
    </b-container>
  </b-navbar>
  
</div>
</template>
<script>

export default {
  components:{
  
},
  data(){
    return{
     show:false,
      style1:{
         width:'40px',
         height:'30px',
         color:'#007bff',
         marginRight:'-6px',
         paddingLeft:'6px'
      },
      // -----------------
            Current:'',
            New:'',
            Confirm:'',
            CMDPState:null,
            NMDPState:null,
            CFMDPState:null,
            submittedPass:String,
      // ---------------
    }
  },
  methods:{
     checkFormValidity() {
        const valid = this.$refs.form.checkValidity()
        this.CMDPState = valid ? 'valid' : 'invalid' 
        this.NMDPState = valid ? 'valid' : 'invalid' 
        this.CFMDPState = valid ? 'valid' : 'invalid' 
        return valid
      },
       resetModal() {
        this.Current = ''
        this.CMDPState = null
        this.New=''
        this.NMDPState=null
        this.Confirm=''
        this.CFMDPState=null
      },
      handleOk(bvModalEvt) {
        // Prevent modal from closing
        bvModalEvt.preventDefault()
        // Trigger submit handler
        this.handleSubmit()
      },
       handleSubmit() {
        // Exit when the form isn't valid
        if (!this.checkFormValidity()) {
          return
        }
        // Push the name to submitted names
        // this.submittedPass.push(this.New)
        this.submittedPass=this.New;
        // Hide the modal manually
        this.$nextTick(() => {
          this.$refs.modal.hide()
        })
        console.log(this.submittedPass);
        
      },
       logout() {
            this.$auth.logout();
        }
  },
  
}
</script>
<style>
.navbar-brand img{
     height: auto;
    max-width: 130px;
    cursor: pointer;
    display:block;
}

.searchBox:hover > .searchInput {
    width: 240px;
    padding: 0 6px;
}
.searchBox:hover > .searchButton {
  background: white;
  color : #2f3640;
}
.searchButton {
    color: white;
    /* float: right; */
    background: #e6e6e6;
     width: 40px;
    height: 40px;
    border-radius: 50%;
    display: inline-block;
    justify-content: center;
    align-items: center;
     transition: 0.4s;
}
.searchInput {
    border:none;
    background: #e6e6e6;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;
    border-radius: 50px;
    

}
@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}
.BD{
  color: black;
  margin-right: -12px;
  padding-left: 12px;
}
.ligne_verticale
{
    width:5px;
    border-right:1px solid gray;
    margin-bottom: -10px;
    margin-top: -13px;
    max-height: 400px;
   
}

.dropdown  .dropdown-menu {
   box-shadow: 0 4px 8px rgba(0,0,0,.15);
    max-height: calc(50vh - 52px - 16px);
    overflow:auto;
    /* background-color: #fff; */
    background-clip: padding-box;
    border-radius: 2px;
    transition: box-shadow 83ms;
    padding: 8px 0 0;
    width: 400px;
    /* right: 0;
    left: auto; */
    line-height: 1;
    text-align: left;
    /* position: absolute; */
    /* margin-top: 24px; */
    /* box-shadow: 2px 2px 2px #000; */
    z-index: 1000;
    list-style: none;
  }
  .dropdown-item{
    width: 50px;
  }
  
  .settingBlock{
    display: table;
}

.topcard-profil{
    padding: 12px 12px 4px;
}
.photo-container{
  
    display: table-cell;
    vertical-align: middle;
    float: left;
    margin: 0;
    padding-right: 8px;
    /* position: relative; */
}
.photo-container img{
    box-shadow: 0 2px 5px  #000;
    /* display: inline; */
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 2px solid transparent;
    border-radius: 49.9%;
    box-sizing: border-box;
    background-clip: content-box;
}
.info-container {
    display: table-cell;
    vertical-align: middle;
    position: relative;
}
.info-container h3{
    font-size: 1.6rem;
    display: flex;
    line-height: 1.5;
    font-weight: 600;
    color: rgba(0,0,0,.9);
}
.info-container h4{
    font-size: 1.4rem;
      display: flex;
    line-height: 1.42857;
    font-weight: 400;
    vertical-align: baseline;
    color: rgba(0,0,0,.6);
    width: 15rem; 
    text-align:left;
}

.artdeco-button{
    border-radius: 0;
    max-width: 100%;
    width: 100%;
    display: flex;
    flex: 1;
    padding: 0 8px;
    
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    align-items: center;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight: 600;
    display: inline-flex;
    justify-content: center;
    max-width: 480px;
    outline-width: 2px;
    text-align: center;
    transition-property: background-color,box-shadow,color;
    font-size: 1.6rem;
    min-height: 32px;
    line-height: 20px;
    padding: 6px 12px;
    background-color: transparent;
    color: #0073b1;
    box-sizing: border-box;
    font-family: inherit;
    overflow: hidden;
    transition-duration: 167ms;
    vertical-align: middle;
}

.view-profile-Devinweb:hover{
    text-decoration: none;
}

.view-profile-Devinweb .artdeco-button:hover{
    color: #fca848;
}
.view-profile-Devinweb .photo-container img:hover{
    box-shadow: 2px 2px 2px rgb(235, 146, 30);
}
.p-icon{
    font-size: 1.1rem;
}
.btn-floating-rec:hover{
    text-decoration: none;
   
}
.btn-floating-rec span:hover{
   color: #0073b1;
   
}
.btn-floating-rec span{
    padding-left: 10px;
}
.modal{
  margin-top: 5%;
}
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
</style>