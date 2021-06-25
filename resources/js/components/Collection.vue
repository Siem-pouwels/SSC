<template>
    <div>
        <!-- <img :src="'../storage/players/hondje.png'"> -->
        <div class="container-fluid">
            <li v-for="player in players" :key="player.id">
                <img :src="'../storage/player_faces/card-design.png'">
                <img :src="player.image">
                {{ player.id }}
                {{ player.name }}
                {{ player.rating }}
                {{ player.position }}
                {{ player.nationality }}
                <!-- {{ player.image }} -->
            </li>
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
        axios.get('/api/players').then((res)=>{
            this.players = res.data
            console.log(this.players)
        })
    }
}
</script>