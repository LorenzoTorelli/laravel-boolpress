<template>
    <section>
        <h2>Lista Post:</h2>
        <ul>
            <li v-for="post in posts" :key="post.id">
                <h4>{{post.title}}</h4>
                <h5 v-if="post.category">{{post.category.title}}</h5>
                <p>{{post.content}}</p>
                <router-link :to="{ name: 'single-post', params: { slug:post.slug } }">Visualizza Post</router-link>
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

<style>

</style>