<template>
  <div class="container ">
        <div class="postSingolo">
            <h4>{{post.title}}</h4>
            <div class="img-container"><img :src="`/storage/${post.image}`" alt="post.title"></div>
            <h5 v-if="post.category">Categoria: {{post.category.title}}</h5>
            <p>{{post.content}}</p>
            
            <form @submit.prevent="addComment">
                <div >
                    <input type="text" id="name" placeholder="Inserisci il nome" v-model="formData.name"> 
                    <input class="content"  type="textarea" id="content" placeholder="scrivi il tuo commento" v-model="formData.content">

                </div>
                <div>
                    <button type="submit">Inserisci Commento</button>
                </div>
            </form>

        </div>
  </div>
</template>

<script>
export default {
    name:"SinglePost",
    data() {
        return {
            post: {},
            formData: {
                name: '',
                content:'',
                postID:null,
            },
        }
    },
    methods: {
        addComment() {
            axios.post(`/api/comments`, this.formData).then((response) => { 
                this.post = response.data;
                this.formData.post_id = this.post.id;
            })
        }
    }, 
    created() {
        // console.log(this.$route.params.slug);
        axios.get(`/api/posts/${this.$route.params.slug}`)
            .then( (response) => {
            //   console.log(response.data)
                this.post = response.data;
            })
    }
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