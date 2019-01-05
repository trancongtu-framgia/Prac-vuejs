<template>
    <div class="auth-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-xs-12">
                    <h1 class="text-xs-center">Create Post</h1>
                    <h1 class="text-xs-center">{{ message }}</h1>
                    <form @submit.prevent="addPost">
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
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "CreatePost",
    data() {
        return {
            post: {}
        }
    },
    methods: {
        addPost() {
            let url = 'api/v1/create-post';
            axios.post(url, this.post).then(response => {
                this.$router.push({name:'list-post' })
            });
        }
    }
};
</script>