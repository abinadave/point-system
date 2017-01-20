<template>
    <div>
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Job order (<span class="text-primary"><b>Points</b></span>)
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Job list</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Create Job</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                            <h4>Home Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="col-md-12">
                              <create-job
                                :employees="employees"
                              ></create-job>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
                       
</template>

<script>
    import JobForm from './create-job.vue'
    export default {
        data(){
            return {
               employees: []
            }
        },
        components: {
            'create-job': JobForm
        },
        methods: {
           fetchData(){
                let self = this;
                self.$http.get('/job/create').then((resp) => {
                    if (resp.status === 200) {
                        let json = resp.body;
                        self.employees = json.employees;
                        console.log(self.employees)
                    }
                }, (resp) => {
                    console.log(resp);
                });
           }
        },
        created(){
            
        },
        mounted() {
           this.fetchData();
        }
    }
</script>
