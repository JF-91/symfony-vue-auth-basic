<template >
    <div>
        <h3>Register</h3>

        <div>
            <form @submit:prevent="saveData">
                <div class="form-group">
                    <label for="username">User name</label>
                    <input ref="username"  class="form-control" type="text" name="username" id="username">
                </div>

                <div class="form-group">
                    <label  for="email">Email</label>
                    <input ref="email"  class="form-control" name="email" id="email" type="email">
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    <input ref="password"  class="form-control" type="password" name="password" id="password">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</template>
<script >
import { ref } from 'vue';
import axios from 'axios'
export default  {
    setup() {
        const username = ref('');
        const email = ref('');
        const password = ref('');
        const saveData = async () => {
            const response = await axios.post('http://127.0.0.1:8000/api/registration', {
                username: username.value,
                email: email.value,
                password: password.value
            });
            console.log(response);
        }
        return {
            username,
            email,
            password,
            saveData
        }
    }
}



</script>
<style lang="">
    
</style>