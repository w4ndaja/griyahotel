<template>
    <div class="bg-gray-200 py-8 md:py-32">
        <div class="container">
            <div class="flex flex-col flex-col-reverse md:flex-row md:items-center">
                <div class="w-full md:w-2/3">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li v-for="(post, index) in posts" data-target="#carouselExampleCaptions" :data-slide-to="index"
                                :class="index == 0 ? 'active' : ''"/>
                        </ol>
                        <div class="carousel-inner">
                            <div v-for="(post, index) in posts" class="carousel-item" :class="index == 0 ? 'active' : ''">
                                <a :href="post.post_link">
                                    <img :src="post.thumbnail" class="block w-full object-center object-cover h-56 sm:h-92 rounded">
                                </a>
                                <div class="carousel-caption hidden md:block">
                                    <div class="text-2xl">{{ post.title }}</div>
                                    <p>{{ post.excerpt }}</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/3 md:text-right">
                    <div class="md:p-4">
                        <div class="font-semibold text-primary">
                            <div class="text-2xl -mb-1">
                                The {{ posts.length }} latest post
                            </div>
                            <div class="text-xl text-blue-400">of our journey</div>
                        </div>
                        <div class="text-blue-900 leading-relaxed mt-2 mb-4 md:text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi, corporis debitis dicta eaque
                            eligendi excepturi in iste labore laboriosam magni!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },

        created() {
            this.fetchPost()
        },

        methods: {
            async fetchPost() {
                let response = await axios.get('/api/i-want-6-of-posts')
                this.posts = response.data.data
            }
        }
    }
</script>

<style lang="sass" scoped>
    // @import "~bootstrap/scss/variables"
    @import "~bootstrap/scss/functions"
    @import "~bootstrap/scss/variables"
    @import "~bootstrap/scss/mixins"

    // Optional
    @import "~bootstrap/scss/carousel"
</style>
