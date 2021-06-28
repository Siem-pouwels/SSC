<template>
    <div>
        Packstore
        <button @click.prevent="pack_1_check" type="submit">Test Packstore</button>

    </div>
</template>
<script>
export default {
    methods:{
        pack_1(){
            axios.post('/api/pack_1').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },
    
        pack_2(){
            axios.post('/api/pack_2').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },
    
        pack_3(){
            axios.post('/api/pack_3').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },  
    }
}
</script>
