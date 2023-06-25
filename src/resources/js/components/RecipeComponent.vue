<template>
<div>
    <div class="container-fluid bg-dark mb-3">
        <div class="container text-center text-white">
            レシピ
        </div>
    </div>
    <div>
        レシピ一覧
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 " v-for="recipe in recipes">
                <img :src="recipe.recipe_image" class="recipe-img">
                <p>{{ recipe.recipe_name }}</p>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data: function () {
        return {
            recipes: []
        }
    },
    methods: {
        // レシピの一覧取得
        getRecipes() {
            axios.get('/api/recipe_list')
            .then((res) => {
                this.recipes = res.data.allRecipeList;
                console.log('レシピの取得');
                console.log(this.recipes);
            });
        },
    },
    mounted() {
        this.getRecipes();
    }
}
</script>