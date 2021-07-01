
<template>
    <div>
        <div class="background">
            <div class="container-fluid">
                <div class="pos_11">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p167495.png'" height="40px">
                    <p class="player_name">Manuel Neuer</p>
                    <img class="player_nation" :src="'../storage/player_faces/Germany.png'" height="10px">
                    <p class="player_rating">90</p>
                    <p class="player_position">GK</p>
                </div>
                <div class="pos_10">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p233096.png'" height="40px">
                    <p class="player_name">Denzel Dumfries</p>
                    <img class="player_nation" :src="'../storage/player_faces/Netherlands.png'" height="10px">
                    <p class="player_rating">80</p>
                    <p class="player_position">DEF</p>                
                </div>

                <div class="pos_9">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p203263.png'" height="40px">
                    <p class="player_name">Harry Maguire</p>
                    <img class="player_nation" :src="'../storage/player_faces/England.png'" height="10px">
                    <p class="player_rating">81</p>
                    <p class="player_position">MID</p>
                </div>

                <div class="pos_8">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p155862.png'" height="40px">
                    <p class="player_name">Sergio Ramos</p>
                    <img class="player_nation" :src="'../storage/player_faces/Spain.png'" height="10px">
                    <p class="player_rating">89</p>
                    <p class="player_position">DEF</p>
                </div>

                <div class="pos_7">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p234396.png'" height="40px">
                    <p class="player_name">Alphonso Davies</p>
                    <img class="player_nation" :src="'../storage/player_faces/Canada.png'" height="10px">
                    <p class="player_rating">81</p>
                    <p class="player_position">DEF</p>
                </div>

                <div class="pos_6">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p235134.png'" height="40px">
                    <p class="player_name">Pablo Rosario</p>
                    <img class="player_nation" :src="'../storage/player_faces/Netherlands.png'" height="10px">
                    <p class="player_rating">75</p>
                    <p class="player_position">MID</p>
                </div>

                <div class="pos_5">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p221363.png'" height="40px">
                    <p class="player_name">Donny van de Beek</p>
                    <img class="player_nation" :src="'../storage/player_faces/Netherlands.png'" height="10px">
                    <p class="player_rating">83</p>
                    <p class="player_position">MID</p>
                </div>

                <div class="pos_4">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p41.png'" height="40px">
                    <p class="player_name">Andres Iniesta</p>
                    <img class="player_nation" :src="'../storage/player_faces/Spain.png'" height="10px">
                    <p class="player_rating">81</p>
                    <p class="player_position">MID</p>
                </div>

                <div class="pos_3">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p190871.png'" height="40px">
                    <p class="player_name">Neymar Jr</p>
                    <img class="player_nation" :src="'../storage/player_faces/Brazil.png'" height="10px">
                    <p class="player_rating">91</p>
                    <p class="player_position">ATT</p>
                </div>

                <div class="pos_2">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p158023.png'" height="40px">
                    <p class="player_name">Lionel Messi</p>
                    <img class="player_nation" :src="'../storage/player_faces/Argentina.png'" height="10px">
                    <p class="player_rating">93</p>
                    <p class="player_position">ATT</p>
                </div>

                <div class="pos_1">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                    <img class="player_face" :src="'../storage/player_faces/p20801.png'" height="40px">
                    <p class="player_name">Cristiano Ronaldo</p>
                    <img class="player_nation" :src="'../storage/player_faces/Portugal.png'" height="10px">
                    <p class="player_rating">92</p>
                    <p class="player_position">ATT</p>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.background {
    background-image: url('http://localhost:8000/storage/player_faces/pitch.png');
    background-size: cover;
    background-repeat: no-repeat;
}

.pos_11 {
    display: inline-block;
    position: absolute;
    bottom: 10%;
    left: 48%;
}

.pos_7 {
    display: inline-block;
    position: absolute;
    bottom: 25%;
    left: 25%;
}

.pos_10 {
    display: inline-block;
    position: absolute;
    bottom: 25%;
    left: 73%;
}

.pos_8 {
    display: inline-block;
    position: absolute;
    bottom: 25%;
    left: 39%;
}

.pos_9 {
    display: inline-block;
    position: absolute;
    bottom: 25%;
    left: 57%;
}

.pos_5 {
    display: inline-block;
    position: absolute;
    bottom: 47%;
    left: 48%;
}

.pos_4 {
    display: inline-block;
    position: absolute;
    bottom: 47%;
    left: 35%;
}

.pos_6 {
    display: inline-block;
    position: absolute;
    bottom: 47%;
    left: 61%;
}

.pos_2 {
    display: inline-block;
    position: absolute;
    bottom: 73%;
    left: 48%;
}

.pos_1 {
    display: inline-block;
    position: absolute;
    bottom: 69%;
    left: 30%;
}

.pos_3 {
    display: inline-block;
    position: absolute;
    bottom: 69%;
    left: 66%;
}

.card-design {
    z-index: -1;
}

.player_face {
    z-index: 1;
    position: absolute;
    right: 10%;
    top: 20%;
}

.player_name {
    z-index: 1;
    position: absolute;
    top: 60%;
    left: 0%;
    font-size: 6px;
    width: 100%;
}

.player_nation {
    z-index: 1;
    position: absolute;
    top: 30%;
    left: 10%;
    height: 15%;
}

.player_rating {
    z-index: 1;
    position: absolute;
    top: 5%;
    left: 11%;
    font-size: 12px;
}

.player_position {
    z-index: 1;
    position: absolute;
    top: 15%;
    left: 10%;
    font-size: 8px;
}

</style>
<script>
export default {
    data() {
        return{
            players: '',
        }
    },
    mounted(){
        axios.get('/api/team_players').then((res)=>{
            this.players = res.data
            console.log(this.players)
        })
    }
}
</script>