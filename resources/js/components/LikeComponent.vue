<template>
    <div class="container">
       <a href=""><i @click.prevent="likePost" class="fa fa-thumbs-up text-pink-500 focus:outline-none ml-2" aria-hidden="true"></i></a>
        <span class="ml-1">{{ totallike }}</span>  
<!-- <button type="submit" class="text-blue-500 focus:outline-none ml-2"><i class="fas fa-sad-cry"></i></button> -->
<a href="http://"><i @click.prevent="disLikePost" class="text-blue-500 focus:outline-none ml-2 fas fa-sad-cry"></i></a>
    <span class="ml-1">{{ totalDislike }}</span>   
<!-- <i class="fas fa-heart text-pink-500 ml-2"></i> -->
  
 
    </div>
</template>
 
<script>
    export default {
        props:['post'],
        data(){
            return {
                totallike:'',
                totalDislike:'',
            }
        },
        methods:{
            likePost(){
                axios.post('/like/'+this.post,{post:this.post})
                .then(response =>{
                    this.getlike()
                    
                })
                .catch()
            },
            getlike(){
                axios.post('/like',{post:this.post})
                .then(response =>{
                    console.log(response.data.post.like)
                    this.totallike = response.data.post.like
                })
            },
             disLikePost(){
                axios.post('/dislike/'+this.post,{post:this.post})
                .then(response =>{
                    this.getDislike()
                    
                })
                .catch()
            },
            getDislike(){
                axios.post('/dislike',{post:this.post})
                .then(response =>{
                    console.log(response.data.post.dislike)
                    this.totalDislike = response.data.post.dislike
                })
              
            }
            
        },
        mounted() {
            this.getlike(),
            this.getDislike()
        }
    }
</script> 

