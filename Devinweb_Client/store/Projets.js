import Vue from 'vue';
import Vuex from 'vuex';


Vue.use(Vuex);

export const state = () => ({
  projets:[],
  projet:null,
 
 
  })
 export const  getters= { 

    }

export const mutations = {
  SET_PROJET(state, theData) {
    state.projets = theData
  },
  SET_CURRENT_PROJET(state,DATA_PROJET){
    state.projet=DATA_PROJET
  },
  

  

  }
export const actions = {
  async getProjets ({ commit }) {
    const proj=await this.$axios.$get('http://127.0.0.1:8000/api/offres');
    commit('SET_PROJET', proj);  
  },

  // async storeProjet({ commit,state}){
  //   // let p={etat:'stage',
  //   // fonction:'fonction 2',
  //   // studylevel:'bac+4',
  //   // experience:2,
  //   // salary:4000, 
  //   // title:"title 2",
  //   // description:'description 2'}
 
  //   await this.$axios.$post('http://127.0.0.1:8000/api/projs',state.projet)
  //  console.log('post');
  // },
  
  async getProjet_By_ID ({ commit },id) {
    const proj_ID=await this.$axios.$get('http://127.0.0.1:8000/api/offres/'+id);
    commit('SET_CURRENT_PROJET', proj_ID.data); 
    console.log(id);
    
   console.log(proj_ID);
   
  },
  async deleteProjet({commit},id){
    await this.$axios.$delete('http://127.0.0.1:8000/api/offres/'+id);
    window.location.href='/Missions';
  },
 
}
  