<template>
    <div>
        <div class="background">
            <div class="container-fluid">
                <div class="pos_11">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_10">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_9">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_8">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_7">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_6">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_5">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_4">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_3">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_2">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
                </div>
                <div class="pos_1">
                    <img :src="'../storage/player_faces/card-design.png'" height="120px">
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

.pos_10 {
    display: inline-block;
    position: absolute;
    bottom: 25%;
    left: 25%;
}

.pos_9 {
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

.pos_7 {
    display: inline-block;
    position: absolute;
    bottom: 25%;
    left: 57%;
}

.pos_6 {
    display: inline-block;
    position: absolute;
    bottom: 47%;
    left: 48%;
}

.pos_5 {
    display: inline-block;
    position: absolute;
    bottom: 47%;
    left: 35%;
}

.pos_4 {
    display: inline-block;
    position: absolute;
    bottom: 47%;
    left: 61%;
}

.pos_3 {
    display: inline-block;
    position: absolute;
    bottom: 73%;
    left: 48%;
}

.pos_2 {
    display: inline-block;
    position: absolute;
    bottom: 69%;
    left: 30%;
}

.pos_1 {
    display: inline-block;
    position: absolute;
    bottom: 69%;
    left: 66%;
}
</style>
<script>
export default {
    data() {
        return{
            
        }
    }
}
</script>