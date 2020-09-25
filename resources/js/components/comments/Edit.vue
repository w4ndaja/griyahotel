
<template>
    <div>
        <form action="" class="mt-5" @submit.prevent="update">
            <textarea autofocus v-model="form.body" :rows="textareaHeight" class="appearance-none w-full resize-none focus:outline-none" placeholder="Write a comment . . ."></textarea>
            <div class="flex justify-end">
                <button type="button" class="btn btn-link" @click.prevent="cancel">Cancel</button>
                <button type="submit" class="inline-block py-2 px-4 font-semibold bg-indigo-500 hover:bg-indigo-600 text-white rounded-full">Update</button>
            </div>
        </form>
    </div>
</template>
<script>
import bus from '../../bus'
export default {
    data() {
        return {
            form: {
                body: this.comment.body,
            }
        }
    },

    props: {
        comment: {
            required: true,
            type: Object
        },
    },

    computed: {
        textareaHeight () {
            return Math.max(Math.floor(this.comment.body.split(/\r*\n/).length / 2), 6)
        }
    },

    methods: {
        async update() {
            let comment = await axios.patch(`/comments/edit-the-comment-selected/${this.comment.hash}`, this.form)
            bus.$emit('comment:edited', comment.data.data)
            this.cancel()
        },

        cancel() {
            bus.$emit('comment:edit-cancelled', this.comment)
        }
    }
}
</script>
