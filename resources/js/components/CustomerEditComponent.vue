<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel Customer EDIT Vue Js</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" v-model="customer.name" placeholder="Enter Name...">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" id="email" v-model="customer.email" placeholder="Enter email...">
                            </div>
                            <div class="form-group">
                                <label for="phone">Your Mobile</label>
                                <input type="number" class="form-control" id="phone" v-model="customer.phone" placeholder="Enter Mobile...">
                            </div>
                            <div class="form-group">
                                <label for="name">Your Address</label>
                                <input type="text" class="form-control" id="address" v-model="customer.address" placeholder="Enter Address...">
                            </div>
                            <button type="submit" class="btn btn-primary" @click.prevent="updateCustomerInfo()">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['customer'],
        data() {
            return {
                name: '',
                email: '',
                phone: '',
                address: '',
            }
        },
        methods: {
            updateCustomerInfo() {
                axios.post('/customer-update/'+this.customer.id, {
                    name: this.customer.name,
                    email: this.customer.email,
                    phone: this.customer.phone,
                    address: this.customer.address,
                })
                .then(function (response) {
                    // handle success
                    // console.log(response, 'Data Updated.');
                    location = '/customer';
                })
                .catch(function (error) {
                    // handle error
                    console.log(error, 'Something Problem!');
                })
            }

        },
        mounted() {
            console.log('Component Mounted.');
            // console.log(this.customer);
        },
    }
</script>
