<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            setTimeout(() => {
                this.testEvent();
            }, 1000);
        },

        methods: {
            testEvent(){
                axios({
                  method: 'get',
                  url: route('api.customer.options')
                }).then((response) => {
                  console.log(response);
                });
            }
        }
    }
</script>
