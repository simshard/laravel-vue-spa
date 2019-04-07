import Logo from './components/Logo.vue';
import LogoSymbol from './components/LogoSymbol.vue';
import Colours from './components/Colours.vue';
import Typography from './components/Typography.vue';
import Mascot from './components/Mascot.vue';
import Illustrations from './components/Illustrations.vue';
import Wallpapers from './components/Wallpapers.vue';
import NotFound from './components/NotFound.vue';


let Loaders =()=>import(/* webpackChunkName: "loaders-and-animations.bundle" */'./components/Loaders.vue');



export default{
  mode:'history',
  linkActiveClass: 'font-bold',
  routes:[
    {
        path:'*',
        component:NotFound
    },
    {
      path:'/',
      component:Logo
    },
    {
      path:'/logo-symbol',
      component:LogoSymbol
    },
    {
      path:'/colours',
      component:Colours
    },
    {
      path:'/typography',
      component:Typography
    },
    {
      path:'/mascot',
      component:Mascot
    },
    {
      path:'/illustrations',
      component:Illustrations
    },
    {
      path:'/loaders',
      component:Loaders
    },
    {
      path:'/wallpapers',
      component:Wallpapers
    }
  ]
}
