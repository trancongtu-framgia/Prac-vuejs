<template>
    <div class="class">
        <div class="block-1" v-if="isActive == false">
            this is block 1
        </div>
        <div class="block-2" v-if="isActive == true">
            this is block 2
        </div>
        <div>
            <button @click="changeActive">Change Block</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: true
            }
        },
        methods: {
            changeActive() {
                if (this.isActive == true) {
                    this.isActive = false
                } else {
                    this.isActive = true
                }

            }
        }
    }
</script>