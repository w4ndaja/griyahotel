<template>
    <div>
        {{ posts }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: 0
        }
    },

    created() {
        this.postsCount();
    },

    methods: {
        async postsCount() {
            let response = await axios.get('/posts-count');
            this.posts = response.data
        }
    }
}
</script>