<template>
    <div class="auth-page">
        <div class="container page">
            <div class="row">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Content</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(post) of posts">
                            <td>{{ post.id }}</td>
                            <td>{{ post.title }}</td>
                            <td>{{ post.slug }}</td>
                            <td>{{ post.description }}</td>
                            <td>{{ post.content }}</td>
                            <td><router-link :to="{name: 'edit-post', params: { id: post.id }}" class="btn btn-primary">Edit</router-link></td>
                            <td><button class="btn btn-danger" @click.prevent="deletePost(post.id)">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ListPost",
    data () {
        return {
            posts: []
        }
    },
    mounted () {
        axios.get('api/v1/get-posts').then ( response => {
            this.posts = response.data.data;
        });
    },
    methods: {
        deletePost(id) {
            let url = 'api/v1/delete-post/' + id;
            axios.delete(url).then(response => {
                this.posts.splice(this.posts.indexOf(id), 1);
            });
        }
    }
};
</script>