<template>
    <div>
        Packstore
                <div class="card-container">
            <div class="card basic">
            <img :src="'../storage/player_faces/pack_bronze.png'" class="card-img-top">
                <div class="card-body ">
                    <h5 class="card-title">Basic Pack</h5>
                    <p class="card-text">Remaining time: 00:00:00</p>
                    <button @click.prevent="basicPack" type="submit">Open pack</button>
                </div>
            </div>

            <div class="card normal">
            <img :src="'../storage/player_faces/pack_silver.png'" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Normal Pack</h5>
                    <p class="card-text">Remaining time: 00:00:00</p>
                    <button @click.prevent="normalPack" type="submit">Test Packstore</button>
                </div>
            </div>

            <div class="card ultimate">
            <img :src="'../storage/player_faces/pack_gold.png'" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Ultimate Pack</h5>
                    <p class="card-text">Remaining time: 00:00:00</p>
                    <button @click.prevent="premiumPack" type="submit">Test Packstore</button>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .basic {float:left; margin-left: 10%;}
    .ultimate {float:right; margin-right: 10%;}
    .card-container {margin: 0 auto;}
    .card {height: 400px; width: 300px; text-align: center; display: inline-block; background-color: #343a40;}
    .card-img-top {height: 300px; width: 190px;}
    .card-text {color:#dbbd38;}
    .card-title {color:#dbbd38;}
</style>
<script>
export default {
    data(){
        return {
            players: '',
        }
    },

    methods:{
        basicPack(){
            axios.post('/api/pack_1').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },
    
        normalPack(){
            axios.post('/api/pack_2').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },
    
        premiumPack(){
            axios.post('/api/pack_3').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },
    }
}
</script>
