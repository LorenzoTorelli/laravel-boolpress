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
                <li>
                    <a class="link" href="/admin/home"> Areaprivata</a>
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
        background-color: rgb(46,58,70);
        height: 80px;
        width: 100%;
        // border-bottom: 1px solid black;

        nav {
            height: 100%;
            ul {
                margin-left: 2%;
                display: flex;
                height: 100%;
                align-items: center;
                li {
                    margin: 0 3%;
                    list-style: none;
                    margin-left: 20px;

                    .link {
                        color: white;
                        text-decoration: none;
                    }
                }
         
            }
        }
        
    }
</style>