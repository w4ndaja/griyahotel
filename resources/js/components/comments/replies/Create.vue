<template>
    <div>
        <div class="mt-6 mb-4 border-b pb-2 font-semibold">Reply to comment</div>
        <comment :comment="comment" :links="false"/>
        <div class="flex my-6" id="reply">
            <div class="flex-shrink-0 mr-3">
                <img :src="authUser.avatar" class="w-12 rounded-full border-2 border-indigo-400 p-1">
            </div>
            <div class="w-full">
                <div>{{ authUser.name }}</div>
                <div class="text-xs text-gray-600">Software Engineer</div>
                <form action="" class="mt-5" @submit.prevent="store">
                    <textarea autofocus v-model="form.body" name="body" id="body" rows="3" class="appearance-none w-full resize-none focus:outline-none" placeholder="Write a comment . . ."></textarea>
                    <div class="flex justify-end">
                        <button type="button" class="btn btn-link" @click.prevent="cancel">Cancel</button>
                        <button type="submit" class="inline-block py-2 px-4 font-semibold btn-primary rounded-full">Reply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import Comment from '../Block'
    import bus from '../../../bus'
    import VueScrollTo from 'vue-scrollto'

    export default {
        name: "Reply",

        props: {
            comment: {
                required: true,
                type: Object
            }
        },

        data() {
            return {
                authUser,
                form: {
                    body: '',
                }
            }
        },

        methods: {
            async store() {
                let reply = await axios.post(`/comments/${this.comment.hash}/replies`, this.form)

                bus.$emit('comment:replied', {
                    comment: this.comment,
                    reply: reply.data.data
                })
                this.cancel()
            },
            cancel() {
                bus.$emit('comment:reply-cancelled')
            },
        },

        components: {
            Comment
        },

        mounted() {
            VueScrollTo.scrollTo('#reply', 500)
        }
    }
</script>

<style scoped>

</style>
