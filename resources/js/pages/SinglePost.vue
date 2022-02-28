<template>
  <div class="container ">
        <div class="postSingolo">
            <h4>{{post.title}}</h4>
            <div class="img-container"><img :src="`/storage/${post.image}`" alt="post.title"></div>
            <h5 v-if="post.category">Categoria: {{post.category.title}}</h5>
            <p>{{post.content}}</p>
        </div>
  </div>
</template>

<script>
export default {
    name:"SinglePost",
    data() {
        return {
            post: {}
        }
    },

    created() {
        // console.log(this.$route.params.slug);
        axios.get(`/api/posts/${this.$route.params.slug}`)
            .then( (response) => {
            //   console.log(response.data)
                this.post = response.data;
            })
    },   
}
</script>

<style lang="scss" scoped>

        
    .postSingolo {
        // border: 0.5px solid white;
        background-color: rgb(46,58,70);
        border-radius: 20px;
        padding: 5%;
        margin: 5% 0;

        h4 {
            font-size: 2rem;
        }
        .img-container {
            margin-top: 2%;
            width: 100%;
            img {
                width: 100%;
            }
        }

        h5 {
            font-size: 1rem;
            margin: 3% 0;

            font-weight: bold;
        }

    }
</style>