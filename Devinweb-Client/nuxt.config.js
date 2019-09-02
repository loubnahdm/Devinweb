const webpack = require('webpack')

module.exports = {
// export default {

//==========================================================================
  router: {
    scrollBehavior: async function(to, from, savedPosition) {
      if (savedPosition) {
        return savedPosition;
      }

      const findEl = async (hash, x = 0) => {
        return (
          document.querySelector(hash) ||
          new Promise(resolve => {
            if (x > 50) {
              return resolve(document.querySelector(""));
            }
            setTimeout(() => {
              resolve(findEl(hash, ++x || 1));
            }, 100);
          })
        );
      };

      if (to.hash) {
        let el = await findEl(to.hash);
        if ("scrollBehavior" in document.documentElement.style) {
          // return {
          //   selector: to.hash,
          //   offset: { x: 0, y: 50 },
          // }
          return window.scrollTo({ top: el.offsetTop, behavior: "smooth" });
        } else {
          return window.scrollTo(0, el.offsetTop);
        }
      }

      return { x: 0, y: 0 };
    },
    // middleware: [
    //   'clearValidationErrors'
    // ]
  },
 //=========================================================================================================
  mode: 'universal',
 //========================================================================================================= 
  /*
  ** Headers of the page
  */
  head: {
    title: process.env.npm_package_name || '',
    
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ],
    script:[{
      src: "https://code.jquery.com/jquery-3.3.1.slim.min.js",
      type: "text/javascript"
    },]
  },
//=============================================================================================================  
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },
//============================================================================================================ 
  /*
  ** Global CSS
  */
  css: [
  ],
//============================================================================================================ 

  /*
  ** Plugins to load before mounting the App
  */
  plugins: [{src:'~/plugins/bus',ssr:false},{ src: '~plugins/vue-carousel', ssr: false },{ src: '~plugins/vue-notification-bell', ssr: false },
  // './plugins/mixins/validation',
  // './plugins/mixins/user',
  // './plugins/axios'
],
//============================================================================================================ 

  /*
  ** Nuxt.js modules
  */
  modules: ['bootstrap-vue/nuxt','@nuxtjs/axios','@nuxtjs/auth',
  [
    'nuxt-fontawesome', {
      imports: [
       {
         set: '@fortawesome/free-solid-svg-icons',
         icons: ['fas']
       },
       {
         set:'@fortawesome/free-brands-svg-icons',
         icons: ['fab']
       }
     ]
    }
]


  ],
//============================================================================================================ 
 
  env:{
    baseURL:process.env.BASE_URL || 'http://localhost:8000/api/'
  }
  ,
//============================================================================================================ 
 
  /*
  **auth module configuration
  */
 auth:{
  strategies:{
    local:{
      endpoints:{
        login:{
          url:'auth/login', method:'post', propertyName:'token'
        },
        user:{
          url:'me', method:'get' , propertyName:'data' 
        },
        logout:{url:'auth/logout', method:'get'}
      }
    },



   

  }, 
  redirect:{
    login:'Espace-Recruteur',
    // home:'/',
    logout:'/Login_recruteur'
  } ,
  // plugins: [
  //   './plugins/auth'
  // ]
},
//============================================================================================================ 
// candauth:{
//   strategies:{
//     local:{
//       endpoints:{
//         login:{
//           url:'candauth/login', method:'post', propertyName:'token'
//         },
//         canduser:{
//           url:'me', method:'get' , propertyName:'data' 
//         },
//         logout:{url:'candauth/logout', method:'get'}
//       }
//     }
//   }, 
//   redirect:{
//     login:'/',
//     // home:'/',
//     logout:'/'
//   } ,
//   // plugins: [
//   //   './plugins/auth'
//   // ]
// },
//=============================================================================================================
 /*
  ** Customize the progress-bar color
  */
 loading: {
  color: 'blue',
  height: '2px'
},
//============================================================================================================ 

  /*
  ** axios module configuration
  */
 axios:{
  baseURL:'http://127.0.0.1:8000/api',
  // headers: {
  //   'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
  //   'Access-Control-Allow-Origin': '*'
  // },
  // timeout: 1000,
  // proxyHeaders: false,
  // credentials: false,
  // proxy:true,
  // mode: 'no-cors',

},
//============================================================================================================ 

// proxy: {
//   '/api': 'https://api.parse.com/'
// },
//============================================================================================================ 

  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend(config, ctx) {
    },
   vender:['vue-carousel','vue-notification-bell','axios','jquery'],
   plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery'
    })
  ],
   


   
    extractCSS:true,
   
  }
}
