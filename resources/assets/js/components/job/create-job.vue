<template>
    <div class="container">
        <form>
            <label>
                Employee  
                <select>
                    <option>Select Employee</option>
                    <option v-for="person in employees">
                        {{ person.fullname.toUpperCase() }}
                    </option>
                </select>
            </label>
        </form>
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
               
            }
        },
        components: {
            
        },
        methods: {
           
        },
       
        mounted() {
           
        }
    }
</script>
