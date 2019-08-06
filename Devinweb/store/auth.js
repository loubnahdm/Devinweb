import vue from 'vue'
import vuex from 'vuex'

vue.use(vuex)

const config={
    state:{user: null},
    getters:{},
    mutations:{},
    actions:{ 
        
    }
}
// export const state = () => ({
   
//   })
//   export const mutations = {
    
//   }
//   export const actions = {
    
//   }
export default function(){
    return new vuex.Store(config)
}