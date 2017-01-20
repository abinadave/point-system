<template>
    <div>
    <button @click="createEmployee">This is the button</button><hr>
         <table class="table table-hover table-bordered">
           <thead>
               <tr>
                   <th>Employee name</th>
                   <th>Position</th>
                   <th>Points</th>
               </tr>
           </thead>
           <tbody>
               <tr v-for="person in employees">
                   <td>{{ person.fullname }}</td>
                   <td>{{ person.position }}</td>
                   <td>0</td>
               </tr>
           </tbody>
        </table> 
        <modal-create-employee  @addedemps="newEmpsWasAdded"></modal-create-employee>
    </div>
</template>

<script>
    import Child1 from './create-employee.vue';
    export default {
        data(){
            return {
                employees: [],
                form: {
                    name: ''
                }
            }
        },
        components: {
            'modal-create-employee': Child1
        },
        methods: {
            newEmpsWasAdded(person){
                this.employees.unshift(person);
            },
            fetchData(){
                let self = this;
                self.$http.get('/employee').then((resp) => {
                    // let json = JSON.parse(resp.body);|??
                    self.employees = resp.body.employees;
                }, (resp) => {

                });
            },
            createEmployee: function(){
                let self = this;
               $('#modal-create-employee').modal();
            }
        },
        created(){
            
        },
        mounted() {
            this.fetchData();
        }
    }
</script>
