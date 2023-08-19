<template>
<div>
    <!-- vue-routerで画面呼び出し -->
    <router-view />

    <!-- footer -->
    <footer>
        <div class="bg-dark" id="footer">
            <div class="d-flex justify-content-evenly">
                <router-link to="/refrigerator">
                    <button class="btn btn-success">冷蔵庫</button>
                </router-link>
                <router-link to="/refrigerator">
                    <button class="btn btn-success">ユーザー</button>
                </router-link>
                <router-link to="/recipe">
                    <button class="btn btn-success">レシピ</button>
                </router-link>
                <router-link to="/refrigerator">
                    <button class="btn btn-success">HOME</button>
                </router-link>
            </div>
        </div>
    </footer>
</div>
</template>

<script setup>
</script>
