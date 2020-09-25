<template>
    <div class="py-8 md:py-32 bg-indigo-100">
        <div class="container">
            <div class="flex items-center">
                <div class="w-full md:w-4/12">
                    <img class="block md:hidden w-full shadow-2xl rounded-lg mb-4 md:mb-0" :src="post.thumbnail">
                    <a :href="post.category_link" class="capitalize block font-medium text-sm md:text-xl text-teal-500 hover:text-teal-600">{{ post.category }}</a>
                    <a :href="post.post_link" class="my-2 md:my-8 text-2xl md:text-4xl font-medium block leading-tight text-gray-800 hover:text-gray-900">
                        {{ post.title }}
                    </a>
                    <div class="text-base text-gray-600">
                        {{ post.excerpt }}
                    </div>
                    <div class="block md:hidden text-gray-600 text-sm mt-2 flex items-center">
                        <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g fill-opacity=".9"><path d="M255.8 48C141 48 48 141.2 48 256s93 208 207.8 208c115 0 208.2-93.2 208.2-208S370.8 48 255.8 48zm.2 374.4c-91.9 0-166.4-74.5-166.4-166.4S164.1 89.6 256 89.6 422.4 164.1 422.4 256 347.9 422.4 256 422.4z"/><path d="M266.4 152h-31.2v124.8l109.2 65.5 15.6-25.6-93.6-55.5V152z"/></g></svg>
                        {{ post.published }}
                    </div>
                </div>
                <div class="md:mx-4"></div>
                <div class="w-8/12 p-4 hidden md:block">
                    <a :href="post.post_link">
                        <img class="w-full h-92 object-cover object-center shadow-xl rounded-lg" :src="post.thumbnail">
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                post: {},
            }
        },

        created() {
            this.latestFirst()
        },

        methods: {
            async latestFirst() {
                let post = await axios.get('/api/the-latest-post')
                this.post = post.data.data
            }
        }
    }
</script>
