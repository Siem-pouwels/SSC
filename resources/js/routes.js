import Home from './components/Home';
import About from './components/About';
import Register from './components/Register';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import NotFound from './components/NotFound';
import Players from './components/Players';
import TeamBuilder from './components/TeamBuilder';
import Packstore from './components/Packstore';


export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
            name: "Home"
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        },
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
       
        },
        // {
        //     path: "/players",
        //     name: "Players",
        //     component: Players,
        //    beforeEnter: (to, form, next) =>{
        //        axios.get('/api/athenticated').then(()=>{
        //            next()
        //        }).catch(()=>{
        //            return next({ name: 'Login'})
        //        })
        //    }
       
        //   },
          {
            path: "/logout",
           beforeEnter: (to, form, next) =>{
               axios.get('/api/logout').then(()=>{
                   next()
               }).catch(()=>{
                   return next({ name: 'Home'})
               })
           }
       
          },
        // {
        //     path: '/players',
        //     name: 'Players',
        //     component: Players,
        //     beforeEnter: (to, form, next) =>{
        //         axios.get('/api/authenticated').then(()=>{
        //             next()
        //         }).catch(()=>{
        //             return next({ name: 'Login'})
        //         })
        //     }
        // },
        // {
        //     path: '/packstore',
        //     name: 'Packstore',
        //     component: Packstore,
        //     beforeEnter: (to, form, next) =>{
        //         axios.get('/api/authenticated').then(()=>{
        //             next()
        //         }).catch(()=>{
        //             return next({ name: 'Login'})
        //         })
        //     }
        // },
        {
            path: '/packstore',
            name: 'Packstore',
            component: Packstore,
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
        },
    ]
}