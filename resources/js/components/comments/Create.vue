<template>
    <div class="flex mb-6">
        <div class="flex-shrink-0 mr-3">
            <img :src="authUser.avatar" class="w-12 rounded-full border-2 border-indigo-400 p-1">
        </div>
        <div class="w-full">
            <div>{{ authUser.name }}</div>
            <div class="text-xs text-gray-600">Software Engineer</div>
            <form action="" class="mt-5" @submit.prevent="store">
                <textarea v-model="form.body" name="body" id="body" rows="5" class="appearance-none w-full resize-none focus:outline-none" placeholder="Write a comment . . ."></textarea>
                <div class="flex justify-end">
                    <button type="submit" class="inline-block px-4 py-2 font-semibold btn-primary text-white rounded">Post comment</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import bus  from '../../bus'
    export default {
        name: "Create",
        props: {
            endpoint: {
                required: true,
                type: String,
            }
        },
        data() {
            return {
                form: {
                    body: '',
                }
            }
        },

        methods: {
            async store() {
                let comment = await axios.post(this.endpoint, this.form)

                bus.$emit('comment:stored', comment.data.data)

                this.form.body = ''
            }
        }
    }
</script>

<style scoped>

</style>
