<template>
    <div>
        Packstore
                <div class="card-container">
            <div class="card basic" v-if="!seen">
            <img :src="'../storage/player_faces/pack_bronze.png'" class="card-img-top">
                <div class="card-body ">
                    <h5 class="card-title">Basic Pack</h5>
                    <p class="card-text">Remaining time: 00:00:00</p>
                    <button @click.prevent="basicPack" type="submit" >Open pack</button>
                </div>
            </div>

            <div class="card normal"  v-if="!seen">
            <img :src="'../storage/player_faces/pack_silver.png'" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Normal Pack</h5>
                    <p class="card-text">Remaining time: 00:00:00</p>
                    <button @click.prevent="normalPack" type="submit">Test Packstore</button>
                </div>
            </div>

            <div class="card ultimate"  v-if="!seen">
            <img :src="'../storage/player_faces/pack_gold.png'" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Ultimate Pack</h5>
                    <p class="card-text">Remaining time: 00:00:00</p>
                    <button @click.prevent="premiumPack" type="submit">Test Packstore</button>
                </div>
            </div>
            <div class="packed-players">
                <div class="playercard" v-for="player in players" :key="player.id">
                    <img class="card-design" :src="'../storage/player_faces/card-design.png'" height="250px">
                    <img class="player-face" :src="player.image" onerror="this.onerror=null;this.src='../storage/player_faces/notfound_0.png';" height="90px">
                    <p class="player-name">{{ player.name }}</p>
                    <img class="player-nation" :src="'../storage/player_faces/'+player.nationality+'.png'" height="30px" onerror="this.onerror=null;this.src='../storage/player_faces/notfound_nationality.png';">
                    <p class="player-rating">{{ player.rating }}</p>
                    <p class="player-position">{{ player.position }}</p>
                </div>
            </div>
        </div>
        <button alt="jijjijgkokogeokgew" id="button2"></button>
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
    .playercard {
    box-sizing: border-box;
    display: inline-block;
    position: relative;
    margin: 1%
}

.card-design {
    z-index: -1;
}

.player-face {
    z-index: 1;
    position: absolute;
    right: 10%;
    top: 20%;
}

.player-name {
    z-index: 1;
    position: absolute;
    top: 60%;
    left: 0%;
    font-size: 16px;
    width: 100%;
}

.player-nation {
    z-index: 1;
    position: absolute;
    top: 30%;
    left: 10%;
    height: 15%;
}

.player-rating {
    z-index: 1;
    position: absolute;
    top: 5%;
    left: 11%;
    font-size: 24px;
}

.player-position {
    z-index: 1;
    position: absolute;
    top: 15%;
    left: 10%;
    font-size: 16px;
}

</style>
<script>
export default {
    data(){
        return {
            players: '',
            el:'#hide',
            seen: false,
        }
    },

    methods:{
        basicPack(){
            axios.post('/api/pack_1').then((res)=>{
                this.players = res.data
                console.log(this.players)
                this.seen = true
            })
        },
    
        normalPack(){
            axios.post('/api/pack_2').then((res)=>{
                this.players = res.data
                console.log(this.players)
                this.seen = true
            })
        },
    
        premiumPack(){
            axios.post('/api/pack_3').then((res)=>{
                this.players = res.data
                console.log(this.players)
                this.seen = true
            })
        },
    }
}
</script>
