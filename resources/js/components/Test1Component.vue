<template>
    <div>
        <div class="my-component">{{ sayhello(message) }}</div>
        <div class="my-component">{{ revertMessage }}</div>
        <div class="class1">{{ content }}</div>
        <div><button @click="sayhello">Click me</button></div>
        <div><button @click="testwatch">Click me</button></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'em là ai',
                content: 'test binding'
            }
        },
        methods: {
            sayhello(data) {
                this.message = 'test method'
            },
            testwatch() {
                this.content = 'test watch'
            }

        },
        computed: {
            revertMessage() {
                return this.message.split('').reverse().join('')
            }
        },
        watch: {
            content() {
                console.log('message changed')
            }
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
    }
    .class1 {
        color: blue;
    }
</style>