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
        axios.get('/api/top_100').then((res)=>{
            this.players = res.data
            console.log(this.players)
        })
    }
}
</script>