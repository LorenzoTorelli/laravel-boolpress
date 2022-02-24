<template>
    <header>
        <nav>
            <ul>
                <li>
                    <router-link class="link" :to="{ name: 'home' }">Home</router-link>
                </li>
                 <li>
                    <router-link class="link" :to="{ name: 'about' }">About</router-link>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script>
export default {
    name:"Header"
}
</script>

<style lang="scss" scoped>
    header {
        height: 80px;
        width: 100%;
        border-bottom: 1px solid black;

        nav {
            height: 100%;
            ul {
                display: flex;
                height: 100%;
                align-items: center;
                li {
                    list-style: none;
                    margin-left: 20px;
                }
            }
        }
        
    }
</style>