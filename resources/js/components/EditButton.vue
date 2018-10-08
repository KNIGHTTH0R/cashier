<template>
    <a href="#" class="text-green mr-10" data-toggle="tooltip" title="Edit" v-on:click="showForm"><i class="fa fa-pencil"></i></a>
</template>

<script>
    export default {
        props: {
            url: {
                type: String,
                required: true
            },
            object: {
                requrired: true
            }
        },

        data() {
            return {

            }
        },

        methods: {
            showForm() {
                this.$event.$emit('show-edit', {
                    'url': this.url,
                    'object': this.object
                });
            }
        }
    }
</script>

