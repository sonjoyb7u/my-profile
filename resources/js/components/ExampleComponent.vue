<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel Vue Js</div>

                    <div class="card-body">
                        I'm an example component of Vue Js.
                    </div>
                </div>
                <div v-for="post in posts">
                    <h5>Post Title : {{ post.title }}</h5>
<!--                    <p>Post Description : {{ post.body }}</p>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: {}
            }
        },

        mounted() {
            console.log('Component mounted.');
            this.getApiData();

        },
        methods: {
            getApiData: function () {
                let thisPosts = this;
                axios.get('https://jsonplaceholder.typicode.com/posts')
                    .then(function (response) {
                        // handle success
                        // console.log(response);
                        // app.posts = response.data;
                        thisPosts.posts = response.data;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });

            }
        }
    }
</script>
