<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        {{ message }} this is the message
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                message: 'Hello laracast viewer'
            }
        },
        mounted() {
            console.log('Component ready.');
        }
    }
</script>
