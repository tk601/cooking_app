<template>
<div>
    <div>
        <div class="row">
            <div class="offset-4 col-md-4">
                <br>
                <h4>ログイン</h4>
                <br>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" v-model="email">
                    <div class="alert alert-danger" v-text="errors.email" v-if="errors.email"></div>
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" class="form-control" v-model="password">
                    <div class="alert alert-danger" v-text="errors.password" v-if="errors.password"></div>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" v-model="remember"> 次回から省略
                    </label>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-block" @click="login">ログイン</button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    data: function() {
        return {
            email: "",
            password: "",
            errors: []
        }
    }
    ,
    methods: {
        login: function(){
            this.errors = {};
            var self = this;
            var url = '/login';
            var params = {
                email: this.email,
                password: this.password
            };
            axios.post(url, params)
                .then(function(response){
                    location.href = '/';
                })
                .catch(function(error){
                    var responseErrors = error.response.data.errors;
                    var errors = {};
                    for(var key in responseErrors) {
                        errors[key] = responseErrors[key][0];
                    }
                    console.log(errors);
                    self.errors = errors;
                });
        }
    }
}
</script>