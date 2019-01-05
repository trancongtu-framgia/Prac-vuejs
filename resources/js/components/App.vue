<template>
    <div id="root">
        <app-header></app-header>
        <router-view></router-view>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import AppHeader from "./Header";
    import AppFooter from "./Footer";

    export default {
        name: "App",
        components: {
            AppHeader,
            AppFooter
        }
    }
</script>