<template>
    <div>
        <!-- <img :src="'../storage/players/hondje.png'"> -->
       <div class="margin-bottom">
            <div class="container-fluid">
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
    </div>
</template>
<style>
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

.margin.bottom {
    margin-bottom: 320px;
}
</style>
<script>
export default {
    data(){
        return {
            players: '',
        }
    },
    // mounted (){
    // axios
    //   .get('/api/team_options')
    //   .then(response => (this.options = response))
    //   console.log(this.options)
    // }

    mounted(){
        axios.get('/api/players').then((res)=>{
            this.players = res.data
            console.log(this.players)
        })
    }
}
</script>