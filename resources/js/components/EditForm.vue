<template>
    <div class="col-md-6 hidden">
        <div class="box box-success">
            <form :action="url" method="PATCH">
                <div class="box-header with-border">
                    Edit Unit
                </div>

                <div class="box-body">
                    <div class="form-group">

                    </div>

                    <div class="form-group">

                    </div>
                </div>

                <div class="box-footer">

                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                url: null
            }
        },

        mounted() {
            this.$event.$on('show-edit', (data) => {
                console.log(data);
            });
        },

        methods: {

        }
    }
</script>
