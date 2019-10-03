import Vue from 'vue';
import Vuex from 'vuex';


Vue.use(Vuex);

export const state = () => ({
  candidatures:null,
 
  })
 export const  getters= { 

    }

export const mutations = {
  SET_Candidature(state, theData) {
    state.candidatures = theData
  },
  
 

  

  }
export const actions = {
  async getCandidatures({ commit }) {
    const cand=await this.$axios.$get('http://127.0.0.1:8000/api/cands');
    commit('SET_Candidature', cand);
 
   
  },


  
  
}
  