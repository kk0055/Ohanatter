<!-- <like-component> </like-component> -->
<template>
<div class="container">
  <button @click.prevent="likeBtn" >x</button>

</div>
</template>

<script>
    export default {
       props: ['post'],
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
     async likeBtn (id) {
      await axios.post(`api//posts/${id}/likes`)
      
             .then(res => {
                    this.like = res.data.id;
                }).catch(function(error) {
                    console.log(error);
                });
             console.log(error);
    
    }
    }
    }
</script>

