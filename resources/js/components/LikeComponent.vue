<!-- <like-component> </like-component> -->
<template>
<div class="container">
  <button @click.prevent="like" ></button>

</div>
</template>

<script>
    export default {
             mounted() {
            console.log('Component mounted.')
        },
       data () {
           return {
               like: null,
           }
       }
    ,
    methods: {
     async like () {
      const response = await axios.post(`api//posts/{post}/likes`)
      console.log(response)
      if (response.status !== OK) {
        this.$store.commit('error/setCode', response.status)
        return false
      }
      this.photo.likes_count = this.photo.likes_count + 1
      this.photo.liked_by_user = true
    },
    }
    }
</script>

