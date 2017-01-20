<template>
    <div style="width: 50%" >
    <br>
        <!-- <form> -->

            <label>
                Employee  
                <select>
                    <option>Select Employee</option>
                    <option v-for="person in employees">
                        {{ person.fullname.toUpperCase() }}
                    </option>
                </select>
                </label>
               <button type="button" @click="addSOmeJob()" class="btn btn-sm pull-right">add job</button>
               <hr>
               <span class="pull-right">Total job: {{ temporaryJobs.length }}</span> 
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Job /Task</th>
                            <th>Pages</th>
                            <th width="1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="job in temporaryJobs">
                            <td>
                                <input v-model="job.job_description" type="text" class="form-control text-center">
                            </td>
                            <td width="100">
                                <input v-model.number="job.page" type="number" class="form-control text-center">
                            </td>
                            <td><button class="btn btn-xs btn-danger">x</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th class="text-right">{{ totalPoints }}</th>
                        </tr>
                    </tfoot>
                </table>
            <button class="btn btn-primary" @click="saveJob">Save Job</button>
        <!-- </form> -->
    </div>               
</template>

<script>

    export default {
        props: {
            employees: {
                type: Array
            }
        },
        data(){
            return {
               temporaryJobs: [
                    { job_description: '', page: 0 }
               ]
            }
        },
        components: {
            
        },
        methods: {
            saveJob(){
                let self = this;
                
            },
            addSOmeJob(){
                let self = this;
                self.temporaryJobs.push({job_description: '', page: 0});
            },
        },
        computed: {
            totalPoints(){
                let self = this;
                let model = {};
                let total = 0;
                for (var i = self.temporaryJobs.length - 1; i >= 0; i--) {
                    model = self.temporaryJobs[i];
                    total += Number(model.page);
                }
                return total;
            }
        },
       
        mounted() {
           
        }
    }
</script>
