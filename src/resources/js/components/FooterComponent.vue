<template>
<div>
    <div class="bg-dark" id="footer">
        <div class="d-flex justify-content-evenly">
            <router-link v-bind:to="{name: 'refrigerator'}">
                <button class="btn btn-success">冷蔵庫</button>
            </router-link>
            <router-link v-bind:to="{name: 'home'}">
                <button class="btn btn-success">ユーザー</button>
            </router-link>
            <router-link v-bind:to="{name: 'recipe'}">
                <button class="btn btn-success">レシピ</button>
            </router-link>
            <router-link v-bind:to="{name: 'home'}">
                <button class="btn btn-success">HOME</button>
            </router-link>
        </div>
    </div>
</div>
</template>

<script>
    export default {}
</script>