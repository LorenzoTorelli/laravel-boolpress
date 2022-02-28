<template>
    <section>
        <h2>Lista Post:</h2>
        <ul>
            <li v-for="post in posts" :key="post.id">
                <h4>{{post.title}}</h4>
                <div class="img-container"><img :src="`/storage/${post.image}`" alt="post.title"></div>
                <h5 v-if="post.category">Categoria: {{post.category.title}}</h5>
                <p>{{post.content}}</p>
                <router-link :to="{ name: 'single-post', params: { slug:post.slug } }" class="post-link">Visualizza Post</router-link>
            </li>
        </ul>
    </section>
</template>

<script>
export default {
    name:"Posts",
    data() {
        return {
            posts: [],
        }
    },
    created() {
        axios.get("api/posts")
        .then( (response) => {
            this.posts = response.data;
        });
    }
}
</script>

<style lang="scss" scoped>
    h2 {
        margin-top: 5%
    }
    ul {
        list-style: none;
        
        li {
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

            .post-link {
                color: white;
                margin-top: 2%;
            }
        }
    }
</style>