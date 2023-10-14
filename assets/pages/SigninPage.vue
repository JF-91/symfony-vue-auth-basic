<template lang="">
    <div>
        <h1>Sign-in</h1>
        <div>
            <form @submit:prevent="saveData">


                <div class="form-group">
                    <label  for="email">Email</label>
                    <input class="form-control" name="email" id="email" type="email">
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div>
                    <label for="remember"></label>
                    <input type="checkbox" name="remember" id="remember">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>