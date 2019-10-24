 <template>
    <section>
         
            <b-container >
                
                
                <b-row class="mb-5">
                     <b-col lg="6" class="my-1"></b-col>
                     <b-col lg="6"  class="pb-2 float-right">
                         <nuxt-link to="/Espace-Recruteur/:MissionDeRecrutement">
                         <b-button size="lg" variant="outline-primary" pill >Créer Une Mission De Recrutement</b-button>
                         </nuxt-link>
                     </b-col>
                </b-row>
                <!-- User Interface controls -->
                
                    <b-card no-body class="mb-5 " border-variant="info">
                        <b-row class="m-5">
                            <b-col lg="6" class="my-1">
                                <b-form-group
                                label="Sort"
                                label-cols-sm="3"
                                label-align-sm="left"
                                label-size="sm"
                                label-for="sortBySelect"
                                class="mb-0"
                                >
                                <b-input-group size="sm">
                                    <b-form-select v-model="sortBy" id="sortBySelect" :options="sortOptions" class="w-75">
                                    <template v-slot:first>
                                        <option value="">-- none --</option>
                                    </template>
                                    </b-form-select>
                                    <b-form-select v-model="sortDesc" size="sm" :disabled="!sortBy" class="w-25">
                                    <option :value="false">Asc</option>
                                    <option :value="true">Desc</option>
                                    </b-form-select>
                                </b-input-group>
                                </b-form-group>
                            </b-col>

                            <b-col lg="6" class="my-1">
                                <b-form-group
                                label="Initial sort"
                                label-cols-sm="3"
                                label-align-sm="left"
                                label-size="sm"
                                label-for="initialSortSelect"
                                class="mb-0"
                                >
                                <b-form-select
                                    v-model="sortDirection"
                                    id="initialSortSelect"
                                    size="sm"
                                    
                                    :options="['asc', 'desc']"
                                ></b-form-select>
                                </b-form-group>
                            </b-col>

                            <b-col lg="6" class="my-1">
                                <b-form-group
                                label="Filter"
                                label-cols-sm="3"
                                label-align-sm="left"
                                label-size="sm"
                                label-for="filterInput"
                                class="mb-0"
                                >
                                <b-input-group size="sm">
                                    <b-form-input
                                    v-model="filter"
                                    type="search"
                                    id="filterInput"
                                    placeholder="Type to Search"
                                    ></b-form-input>
                                    <b-input-group-append>
                                    <b-button :disabled="!filter" @click="filter = ''" variant="outline-info">Clear</b-button>
                                    </b-input-group-append>
                                </b-input-group>
                                </b-form-group>
                            </b-col>

                        

                            <b-col  lg="6" class="my-1">
                                <b-form-group
                                label="Per page"
                                label-cols-sm="6"
                                label-cols-md="4"
                                label-cols-lg="3"
                                label-align-sm="left"
                                label-size="sm"
                                label-for="perPageSelect"
                                class="mb-0"
                                >
                                <b-form-select
                                    v-model="perPage"
                                    id="perPageSelect"
                                    size="sm"
                                    :options="pageOptions"
                                ></b-form-select>
                                </b-form-group>
                            </b-col>
                        </b-row>
                    </b-card>          

                <!-- Main table element -->
              
                <b-table
                            striped hover  show-empty 
                            Ref="my-table"
                            :fields="fields"
                            :items="items"
                            :filter="filter"
                            :sort-by.sync="sortBy"
                            :sort-desc.sync="sortDesc"
                            :sort-direction="sortDirection"
                            @filtered="onFiltered"
                            :per-page="perPage"
                            :current-page="currentPage"
                            selectable
                            head-variant="dark"
                         
                            
                            >
                            
                    

                <template v-slot:cell(status)="row">
                    <b-button size="sm" @click="info(row.item, $event.target)" class="" variant="warning">
                    Modifier
                    </b-button>
                    <b-button size="sm" @click="supprimer(row.item, $event.target)" class="" variant="danger">
                    Supprimer
                    </b-button>
                
                </template>

                
                </b-table>
                            

                            <b-pagination
                            v-model="currentPage"
                            :total-rows="rows"
                            :per-page="perPage"
                            aria-controls="my-table"
                            align="center"
                            class="my-0"
                            ></b-pagination>

                <!-- Info modal -->
                <b-modal :id="infoModal.id" :title="infoModal.title" @ok="ModifierMission(infoModal.content.id)" @hide="resetInfoModal">
                
                    <form ref="form" >
                        <b-form-group
                        :state="EtatState"
                        label="Etat"
                        label-for="Etat-input"
                        invalid-feedback="Etat is required"
                        
                        >
                            <b-form-input
                            id="Etat-input"
                            v-model="Etat"
                            :state="EtatState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="TitleState"
                        label="Titre"
                        label-for="Title-input"
                        invalid-feedback="Title is required"
                        
                        >
                            <b-form-input
                            id="Title-input"
                            v-model="Titre"
                            :state="TitleState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="FonctionState"
                        label="Fonction"
                        label-for="Fonction-input"
                        invalid-feedback="Fonction is required"
                        
                        >
                            <b-form-input
                            id="Fonction-input"
                            v-model="Fonction"
                            :state="FonctionState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="LevelOfStudyState"
                        label="Niveau D'etude"
                        label-for="LevelOfStudy-input"
                        invalid-feedback="Level Of Study is required"
                        
                        >
                            <b-form-input
                            id="LevelOfStudy-input"
                            v-model="NiveauEtude"
                            :state="LevelOfStudyState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="ExperienceState"
                        label="Experience"
                        label-for="Experience-input"
                        invalid-feedback="Experience is required"
                        
                        >
                            <b-form-input
                            id="Experience-input"
                            v-model="Experience"
                            :state="ExperienceState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="SalaryState"
                        label="Salaire"
                        label-for="Salary-input"
                        invalid-feedback="Salary is required"
                        
                        >
                            <b-form-input
                            id="Salary-input"
                            v-model="Salaire"
                            :state="SalaryState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="DescriptionContexteState"
                        label="Description Contexte"
                        label-for="DescriptionContexte-input"
                        invalid-feedback="DescriptionContexte is required"
                        
                        >
                            <b-form-input
                            id="DescriptionContexte-input"
                            v-model="Description_Contexte"
                            :state="DescriptionContexteState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                        <!-- ========================================== -->
                        <b-form-group
                        :state="DescriptionProfilState"
                        label="Description Profil"
                        label-for="DescriptionProfil-input"
                        invalid-feedback="DescriptionProfil is required"
                        
                        >
                            <b-form-input
                            id="DescriptionProfil-input"
                            v-model="Description_Profil"
                            :state="DescriptionProfilState"
                            required
                            >  </b-form-input>
                        </b-form-group>
                </form>
                </b-modal>
                <b-modal  :id="supprimerModal.id" :title="supprimerModal.title"  @ok="$store.dispatch('Projets/deleteProjet',supprimerModal.id_modal)"  @hide="resetInfoModal">
                <pre>{{ supprimerModal.content }} </pre>
                </b-modal>
            </b-container>

    </section>
</template>
<script>
export default {
    layout:'custom',
      data() {
      return {
        items: [],
         fields: [{key:'etat',label:"Etat De la Mission",sortable: true},{key:'title',label:"Titre De la Mission",sortable: true},{key:'created_at',label:"Date De Creation",sortable: true},{key:'updated_at',label:"Date De Modification"},{key:'Status',variant:'primary'}],
        currentPage: 1,
        perPage: 5,
        pageOptions: [5, 10, 15],
        sortBy: '',
        sortDesc: false,
        sortDirection: 'asc',
        filter: null,
        filterOn: [],
        infoModal: {
          id: 'info-modal',
          title: '',
          content: ''
        },
        supprimerModal: {
          id: 'supprimer-modal',
          title: '',
          content: '',
          id_modal:'',
        },
         Etat:'',
         Titre:'',
         Fonction:'',
         NiveauEtude:'',
         Experience:0,
         Salaire:0,
         Description_Contexte:'',
         Description_Profil:'',
         EtatState: null,
         FonctionState:null,
         LevelOfStudyState:null,
         ExperienceState:null,
         SalaryState:null,
         TitleState:null,
         DescriptionContexteState:null,
         DescriptionProfilState:null,
      }
    },
    computed: {
         rows() {
        return this.items.length
      },
      sortOptions() {
        // Create an options list from our fields
        return this.fields
          .filter(f => f.sortable)
          .map(f => {
            return { text: f.label, value: f.key }
          })
      }
    },
    mounted() {
      // Set the initial number of items
        
      this.items=this.$store.state.Projets.projets;
    },
    methods: {
       async ModifierMission(id){
           let mission={
            etat:this.Etat,
            fonction:this.Fonction,
            studylevel:this.NiveauEtude,
            experience:this.Experience,
            salary:this.Salaire, 
            title:this.Titre,
           description_Contexte:this.Description_Contexte,
           description_Profil:this.Description_Profil
           }
        await this.$axios.$put('http://127.0.0.1:8000/api/offres/'+id,mission);
          window.location.href='/Missions';
         
       }
       ,
       supprimer(item, button) {
        this.supprimerModal.id_modal=item.id;
        this.supprimerModal.content =`vous voullez supprimer la mission ${item.title}`
        this.$root.$emit('bv::show::modal', this.supprimerModal.id, button)
      },
      info(item, button) {
        this.infoModal.title = `Modifier La mission ${item.title}`
        this.infoModal.content =item;
        this.Etat=this.infoModal.content.etat
        this.Titre=this.infoModal.content.title
        this.Fonction=this.infoModal.content.fonction
        this.NiveauEtude=this.infoModal.content.studylevel
        this.Experience=this.infoModal.content.experience
        this.Description_Contexte=this.infoModal.content.description_Contexte
        this.Description_Profil=this.infoModal.content.description_Profil
        this.Salaire=this.infoModal.content.salary
        this.$root.$emit('bv::show::modal', this.infoModal.id, button)
      },
      resetInfoModal() {
        this.infoModal.title = ''
        this.infoModal.content = ''
      },
      onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      }
    },
    async fetch({store}) {
         await store.dispatch("Projets/getProjets")
  
    }
  }

</script>