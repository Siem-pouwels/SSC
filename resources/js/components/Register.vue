<template>
<div class="background">
      <div>
        <div class="box">
            <span class="text-center">Register</span>
            <div class="input-container">		
                <input type="text" v-model="form.name" required=""/>
                <span v-if="errors.name">{{errors.name[0]}}</span>
                <label>name</label>
            </div>
            <div class="input-container">		
                <input type="email" v-model="form.email" required=""/>
                <span v-if="errors.email">{{errors.email[0]}}</span>
                <label>email</label>
            </div>
            <div class="input-container">
                <input type="password" v-model="form.password" required=""/>
                <span v-if="errors.password">{{errors.password[0]}}</span>
                <label>password</label>
            </div>
            <div class="input-container">
                <input type="password" v-model="form.password_confirmation" required=""/>
                <label>password confirmation</label>
            </div>
            <div class="input-container">
                <input type="text" v-model="form.teamName" required=""/>
                <span v-if="errors.teamName">{{errors.teamName[0]}}</span>
                <label>team name</label>
            </div>
            <div class="input-container">
                <button @click.prevent="saveForm" type="submit" class="btn">Register</button>
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
                name: '',
                email: '',
                password:'',
                teamName: '',
                password_confirmation:''
            },
            errors:[]
        }
    },
    methods:{
        saveForm(){
            axios.post('/api/register', this.form).then(() =>{
                console.log('saved');
            }).catch((error) =>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&subset=greek-ext');

    .background{
        background-image: url("http://localhost:8000/images/background.jpeg");
        background-position: center;
        background-origin: content-box;
        background-repeat: no-repeat;
        background-size: cover;
        min-height:100vh;
        font-family: 'Noto Sans', sans-serif;
    }
    .text-center{
        color:#fff;	
        text-transform:uppercase;
        font-size: 23px;
        margin: -50px 0 80px 0;
        display: block;
        text-align: center;
    }
    .box{
        position:absolute;
        left:50%;
        top:50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.89);
        border-radius:3px;
        padding:70px 100px;
    }
    .input-container{
        position:relative;
        margin-bottom:25px;
    }
    .input-container label{
        position:absolute;
        top:0px;
        left:0px;
        font-size:16px;
        color:#fff;	
        transition: all 0.5s ease-in-out;
    }
    .input-container input{ 
    border:0;
    border-bottom:1px solid #555;  
    background:transparent;
    width:100%;
    padding:8px 0 5px 0;
    font-size:16px;
    color:#fff;
    }
    .input-container input:focus{ 
    border:none;	
    outline:none;
    border-bottom:1px solid #e74c3c;	
    }
    .btn{
        color:#fff;
        background-color:#DCBE38;
        outline: none;
        border: 0;
        color: #fff;
        padding:10px 20px;
        text-transform:uppercase;
        margin-top:50px;
        border-radius:2px;
        cursor:pointer;
        position:relative;
    }
    /*.btn:after{
        content:"";
        position:absolute;
        background:rgba(0,0,0,0.50);
        top:0;
        right:0;
        width:100%;
        height:100%;
    }*/
    .input-container input:focus ~ label,
    .input-container input:valid ~ label{
        top:-12px;
        font-size:12px;
        
    }
</style>