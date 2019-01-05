<template>
    <div class="list-rendering">
        <li v-for="(food,index) in foods">{{ food.name }} - tai vi tri {{ index }}</li>
        <hr>
        <li v-for="(values,key) of objects">{{ key }} - {{ values }} </li>
    </div>

</template>
<script>
    export default {
        data () {
            return {
                foods: [
                     { name : 'banh mi' },
                     { name : 'gio' },
                     { name : 'chả'},
                ],

                objects: {
                    name: 'minhtu',
                    age: '23',
                    address: 'thai binh',
                }
            }
        }
    }
</script>