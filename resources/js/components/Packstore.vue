<template>
    <div>
        Packstore
    
        
    </div>
</template>
<script>
export default {

    pack_1_check() {
        
    },
    pack_2_check() {
        
    },
    pack_3_check() {
        
    },
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
</script>
