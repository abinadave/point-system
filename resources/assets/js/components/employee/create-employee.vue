<template>
    <div class="modal fade" id="modal-create-employee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 430px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Create Employee</h4>
                </div>
                <div class="modal-body">
                    <label>
                        Fullname: <input v-model="form.fullname" type="text" class="form-control fullname">
                    </label>
                    <label>
                        Position: <input v-model="form.position" type="text" class="form-control">
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button @click="saveEmployee()" type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import VueResource from 'vue-resource'
    Vue.use(VueResource);

    export default {
        data(){
            return {
                form: {
                    fullname: '',
                    position: ''
                }
            }
        },
        methods: {
           saveEmployee(){
                let self = this;
                self.$http.post('/employee', self.form).then((resp) => {
                    if (resp.status === 200) {
                        let json = resp.body;
                        self.form.fullname = '';
                        self.form.position = '';
                        $('input.fullname').focus();
                        self.$emit('addedemps', json);
                    }
                }, (resp) => {
                    console.log(resp)
                });
           }
        },
        mounted() {
            console.log('Component modal.');
        }
    }
</script>
