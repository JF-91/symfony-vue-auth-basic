<template>
    <div>
        <nav>
            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/registration">Registration</router-link>
            <router-link to="/sigin">Sign-In</router-link>
        </nav>
        
        <router-view></router-view>
    </div>
</template>
<script>
export default {
    name: 'App',
}
</script>
<style scoped>

nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;

}
    
</style>