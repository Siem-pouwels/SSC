<template>
     <div>
        <div>
            <div><h1>Login to your account</h1></div>
            <div>
                <label for="email">Your e-mail</label>
                <input placeholder="Email" type="email" v-model="form.email">
            </div>
            <div>
                <label for="password">Password</label>
                <input class="nav-gold" placeholder="Password" type="password" v-model="form.password" name="password">
            </div>
            <div>
                <button @click.prevent="loginUser" type="submit">Login</button>
            </div>
            <div class="players-container">
                <div class="card-container w-100 bg-dark">
                    <img class="card-design" :src="'../storage/player_faces/card-design.png'">
                    <img class="player-image" :src="'../storage/player_faces/notfound_0.png'">
                </div>
            </div>
            
        </div> 
    </div>

    
</template>
<script>
export default {
    data(){
        return{
            form:{
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods:{
                  loginUser(){
             axios.post('/api/login', this.form, ).then(() =>{
                     this.$router.push({ name: "Dashboard"});
                //  setTimeout(() => {
                //      window.location.reload()
                // }, 300) 
             }).catch((error) =>{
         this.errors = error.response.data.errors;
            })
         }
    }
}
</script>

<style>
    .players-container{
        width: 100%;
        height: 300px;
        /* background-color: aqua; */
    }

    .card-container{
        margin:0; 
        height:130px;
    }
    
    .card-design{
        display: inline-block;
        z-index: -1;
        display: relative;
    }
</style>