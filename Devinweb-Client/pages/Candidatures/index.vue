<template>
  <div class="container">
      <h3 class="float-left">Candidatures:</h3>
      <b-row>
          <b-col lg="6" class="my-1 mt-5 pt-5">
               <b-form-group
                    label="Sort"
                    label-cols-sm="3"
                    label-align-sm="right"
                    label-size="sm"
                    label-for="sortBySelect"
                    class="mb-0"
                    >
                    <b-input-group size="sm">
                        <b-form-select v-model="sortBy" id="sortBySelect" :options="sortOptions" class="w-75">
                        <option slot="first" value="">-- none --</option>
                        </b-form-select>
                        <b-form-select v-model="sortDesc" size="sm" :disabled="!sortBy" class="w-25">
                        <option :value="false">Asc</option>
                        <option :value="true">Desc</option>
                        </b-form-select>
                    </b-input-group>
                </b-form-group>
          </b-col>
          <b-col lg="6" class="my-1"></b-col>
          <b-col lg="6" class="my-1">
                    <b-form-group
                    label="Filter"
                    label-cols-sm="3"
                    label-align-sm="right"
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
                        <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
                        </b-input-group-append>
                    </b-input-group>
                    </b-form-group>
          </b-col>

          <b-col sm="5" md="6" class="my-1">
                <b-form-group
                label="Per page"
                label-cols-sm="6"
                label-cols-md="4"
                label-cols-lg="3"
                label-align-sm="right"
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
      <b-col class="overflow-auto">
            
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
                small
                
                >
                
            
                
                
                </b-table>
               
                <p class="mt-3">Current Page: {{ currentPage }}</p>

                <b-pagination
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="my-table"
                align="center"
                class="my-0"
                ></b-pagination>
      </b-col>
  </div>
</template>

<script>
export default {
layout:'custom',
 data() {
      return {
        perPage: 3,
        currentPage: 1,
        fields: [{key:'id',sortable: true},{key:'first_name',sortable: true},{key:'last_name',sortable: true},{key:'email',sortable: true},{key:'telephone',sortable: true},{key:'cv',sortable: true},{key:'motivation',sortable: true},{key:'created_at',sortable: true},{key:'updated_at',sortable: true},{key:'Status',variant:'primary',sortable: true}],

        items: [],
       
        pageOptions: [5, 10, 15],
        sortBy: '',
        sortDesc: false,
        sortDirection: 'asc',
        filter: null,
        sortDesc: false,
      }
    },
     mounted() {
      // Set the initial number of items
      this.rows = this.items.length
      this.items=this.$store.state.Candidature.candidatures;
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
            return { text: f.key, value: f.key }
          })
      }
      
    },
    methods:{
      
      onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.rows = filteredItems.length
        this.currentPage = 1
      }
    },
    async fetch({store}) {
  await store.dispatch("Candidature/getCandidatures")
  

},
}
</script>

<style>

</style>