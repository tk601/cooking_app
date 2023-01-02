<template>
<div>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">お料理アプリ</span>
                <div>
                    <router-link v-bind:to="{name: 'refrigerator'}">
                        <button class="btn btn-success">冷蔵庫</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'recipe'}">
                        <button class="btn btn-success">料理を作る</button>
                    </router-link>
                    
                    <!-- ログイン処理あとで復活(20220102) -->
                    
                    <!-- <router-link v-bind:to="{name: 'jslogin'}">
                        <button class="btn btn-success">ログイン画面</button>
                    </router-link> -->
                </div>
            </nav>
        </div>
    </div>
    <div>
        お知らせなどを表示
    </div>
</div>
</template>

<script>
    export default {}
</script>