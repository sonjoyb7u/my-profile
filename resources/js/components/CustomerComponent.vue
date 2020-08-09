<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Laravel Customer CREATE Vue Js</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" v-model="name" placeholder="Enter Name...">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" id="email" v-model="email" placeholder="Enter email...">
                            </div>
                            <div class="form-group">
                                <label for="phone">Your Mobile</label>
                                <input type="number" class="form-control" id="phone" v-model="phone" placeholder="Enter Mobile...">
                            </div>
                            <div class="form-group">
                                <label for="name">Your Address</label>
                                <input type="text" class="form-control" id="address" v-model="address" placeholder="Enter Address...">
                            </div>
                            <div class="form-group">
                                <label for="password">Your Password</label>
                                <input type="password" class="form-control" id="password" v-model="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary" @click.prevent="saveCustomerInfo();">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Laravel Customer READ Vue Js</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(customer, index) in customers">
                                <th scope="row">{{ index + 1 }}</th>
                                <td>{{ customer.name }}</td>
                                <td>{{ customer.email }}</td>
                                <td>{{ customer.phone }}</td>
                                <td>{{ customer.address }}</td>
                                <td>
                                    <a v-bind:href="'customer-edit/' + customer.id" class="btn btn-info btn-sm">Edit</a>
                                    <a v-bind:href="'customer-edit/' + customer.id" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
                customers: [],
                name: '',
                email: '',
                phone: '',
                address: '',
                password: '',
            }
        },
        methods: {
            saveCustomerInfo() {
                axios.post('/customer', {
                    name: this.name,
                    email: this.email,
                    phone: this.phone,
                    address: this.address,
                    password: this.password,
                })
                .then(function (response) {
                    // handle success
                    location.reload();
                    // console.log(response, 'Data Stored.');
                })
                .catch(function (error) {
                    // handle error
                    console.log(error, 'Something Problem!');
                })
            },
            getCustomerInfo() {
                axios.get('/customer-read')
                    .then(response => {
                        this.customers = response.data;
                        // console.log(this.customers);
                    })
                    .catch(function (error) {
                    // handle error
                    console.log(error, 'Something Problem!');
                })
            },
        },
        mounted() {
            console.log(this.customer);
            this.getCustomerInfo();
        },
    }
</script>
