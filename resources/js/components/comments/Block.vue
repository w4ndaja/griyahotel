<template>
    <div>
        <div class="flex my-6" :id="`comment-${comment.id}`">
            <div class="flex-shrink-0 mr-3">
                <img :src="comment.user.avatar" class="w-12 rounded-full border-2 border-indigo-400 p-1">
            </div>
            <div class="w-full">
                <div class="flex items-center">
                    <div class="font-semibold mr-2">{{ comment.user.name }}</div>
                    <div class="text-xs text-gray-600">
                        <template v-if="comment.child">replied</template>
                        {{ comment.published }}
                        <span v-if="comment.edited" :title="comment.edited">(edited)</span>
                    </div>
                </div>

                <template v-if="editing">
                    <comment-edit :comment="comment"/>
                </template>
                <template v-else>
                    <div class="leading-relaxed text-gray-800 my-2">
                        {{ comment.body }}
                    </div>
                </template>
                <div class="flex items-center text-sm mt-2">
                    <template v-if="links && user.authenticated && !editing">
                        <button
                            class="mr-5 text-gray-500 hover:bg-gray-200 rounded-full p-1 hover:text-indigo-600 focus:outline-none"
                            v-if="!comment.child" @click.prevent="reply">
                            <svg class="stroke-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path
                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                        </button>
                        <template v-if="comment.owner">
                            <a class="mr-5 text-gray-500 hover:bg-gray-200 rounded-full p-1 hover:text-indigo-600 focus:outline-none"
                               @click.prevent="editing = true" href="#">
                                <svg class="stroke-current w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg>
                            </a>
                            <button
                                class="text-gray-500 hover:bg-gray-200 rounded-full p-1 hover:text-indigo-600 focus:outline-none"
                                @click.prevent="destroy" href="#">
                                <svg class="stroke-current w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </button>
                        </template>
                    </template>
                </div>
                <template v-if="comment.children">
                    <comment v-for="child in comment.children" :key="child.id" :comment="child"/>
                </template>
            </div>
        </div>
    </div>
</template>

<script>
    import Comment from './Block'
    import CommentEdit from './Edit'
    import bus from '../../bus'

    export default {
        name: "comment",
        data() {
            return {
                editing: false,
            }
        },

        props: {
            comment: {
                required: true,
                type: Object
            },
            links: {
                default: true,
                type: Boolean
            }
        },
        components: {
            Comment, CommentEdit
        },

        methods: {
            reply() {
                bus.$emit('comment:reply', this.comment)
            },

            async destroy() {
                swal({
                    dangerMode: true,
                    closeOnEsc: true,
                    title: "Delete comment?",
                    text: "Once deleted, you will not be able to recover this comment! So if you're not sure what are you doing. Just press the cancel button.",
                    dangerMode: true,
                    buttons: {
                        cancel: "Cancel",
                        delete: "Delete",
                    }
                }).then((value) => {
                    if (value == "delete") {
                        this.destroyComment()
                    }
                });
            },

            async destroyComment() {
                await axios.delete(`/comments/edit-the-comment-selected/${this.comment.hash}`)
                bus.$emit('comment:deleted', this.comment)
            }
        },

        mounted() {
            bus.$on('comment:edit-cancelled', (comment) => {
                if (comment.id === this.comment.id) {
                    this.editing = false
                }
            })
        },
    }
</script>

<style scoped>

</style>
