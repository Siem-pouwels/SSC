<template>
    <div>
        {{ info }}
    </div>
</template>
<script>
export default {
    data(){
        return{
            info: null,
        }
    },
    mounted () {
        axios.get('https:/localhost:8000/api/players')
        .then(response => (this.info = response))
    }
}
</script>