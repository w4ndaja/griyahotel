<template>
    <div>
        <button class="btn btn-link text=left" type="button" @click="destroy">Delete</button>
    </div>
</template>

<script>
    export default {
        props: {
            endpoint: {
                required: true,
                type: String,
            }
        },

        methods: {
            destroy() {
                swal({
                    dangerMode: true,
                    closeOnEsc: true,
                    title: "Delete team?",
                    text: "Once deleted, you will not be able to recover this comment! So if you're not sure what are you doing. Just press the cancel button.",
                    dangerMode: true,
                    buttons: {
                        cancel: "Cancel",
                        delete: "Delete",
                    }
                }).then((value) => {
                    if (value == "delete") {
                        this.destroyTeam()
                    }
                });
            },


            async destroyTeam() {
                await axios.delete(this.endpoint)
                window.location.reload()
            }
        }
    }
</script>
