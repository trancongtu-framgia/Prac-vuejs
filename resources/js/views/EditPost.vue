<template>
    <div class="auth-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-xs-12">
                    <h1 class="text-xs-center">Edit Post</h1>
                    <form @submit.prevent="updatePost(post.id)">
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Tilte" v-model="post.title">
                        </fieldset>
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Slug" v-model="post.slug">
                        </fieldset>
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Description" v-model="post.description">
                        </fieldset>
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Content" v-model="post.content">
                        </fieldset>
                        <button class="btn btn-lg btn-primary pull-xs-right">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EditPost",
        data() {
            return {
                post: {}
            }
        },
        mounted() {
            let url = 'api/v1/edit-post/' + this.$route.params.id;
            axios.get(url).then(response => {
                this.post = response.data;
            });
        },
        methods: {
            updatePost(id) {
                let url = 'api/v1/update-post/' + id;
                axios.post(url, this.post).then(response => {
                    this.$router.push({ name: 'list-post'})
                });
            }
        }
    };
</script>