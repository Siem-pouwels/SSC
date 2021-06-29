<template>
    <div>
        Packstore
        <button @click.prevent="premium_pack" type="submit">Test Packstore</button>
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
</template>
<script>
export default {
    data(){
        return {
            players: '',
        }
    },

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
    
        premium_pack(){
            axios.post('/api/pack_3').then((res)=>{
                this.pack = res.data
                console.log(this.players)
            })
        },
    }
}
</script>
