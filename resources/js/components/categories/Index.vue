<template>
    <div>
        <template v-for="category in categories">
            <a :class="currentLocation == `/post-in-categories/${category.slug}` ? 'text-primary' : 'text-gray-700'" class="block my-3 text-base hover:text-blue-600 font-semibold" :href="`/post-in-categories/${category.slug}`">
                {{ category.name }}
            </a>
        </template>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                categories: [],
                currentLocation: window.location.pathname,
            }
        },

        created() {
            this.getCategories()
        },

        methods: {
            async getCategories() {
                let response = await axios.get('/api/categories')
                this.categories = response.data
            }
        }
    }
</script>

<style scoped>

</style>
