<template>
    <div class="list-user">
        <li v-for="User of Users">{{ User }}</li>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                Users: {
                    name: 'minhtu',
                    age: '25',
                    add: 'thai binh',
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>