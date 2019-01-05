<template>
    <div class="user-dashboard">
        <div>
            <UserList></UserList>
        </div>
        <div>
            <UserDetail></UserDetail>
        </div>

    </div>
</template>

<script>
    import UserList from './UserList.vue'
    import UserDetail from './UserDetail.vue'
    export default {
        components: {
            UserList,
            UserDetail
        }
    }
</script>

<style lang="scss" scoped>
</style>