<template>
    <span>
        <!-- <a href="#"  @click.prevent="unFavorite(post)">
            <i  class="fa fa-heart">x</i>
        </a> -->
        <a   @click="favorite(postId)">
            <i  class="fa fa-heart"></i>
        </a>
    </span>
</template>

<script>
     export default {
        props: ['postId','userId'],
        // data: function() {
        //     return {
        //         isFavorited: '',
        //     }
        // }

        // mounted() {
        //     this.isFavorited = this.isFavorite ? true : false;
        // },

        // computed: {
        //     isFavorite() {
        //         return this.favorited;
        //     },
        // },

        methods: {
            favorite(postId) {
              let url = `/api/favorite/${postId}`

                axios.post(url,{
                    user_id:this.userId
                })
                    .then(response =>{
                     console.log(response.data)
                     })
                    .catch(response => console.log(response.data));
            },
    }
     }
</script>

