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
             axios.post('/api/login', this.form).then(() =>{
                 this.$router.push({ name: "Dashboard"}); 
             }).catch((error) =>{
         this.errors = error.response.data.errors;
            })
         }
    }
}
</script>