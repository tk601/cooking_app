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

    <p v-if="noneRecipe">冷蔵庫の材料が少ないためレシピを表示できません！</p>

    <div class="container">
        <div class="row">
            <div class="col-6 " v-for="(recipe, index) in recipes" :key="index">
                <img :src="recipe.recipe_image" class="recipe-img">
                <p>{{ recipe.recipe_name }}</p>
            </div>
        </div>
    </div>
</div>
</template>

<script setup>
import { ref } from "vue";

var recipes = ref([]);
var noneRecipe = ref(false); 

// レシピを取得する
const getRecipes = () => {
    axios.get('/api/recipe_list')
    .then((res) => {
        let getRecipe = res.data.allRecipeList;
        if (getRecipe.length === 0) {
            console.log('取れない');
            noneRecipe.value = true;
        } else {
            console.log('取れた');
            console.log(getRecipe);
        }
        recipes.value = res.data.allRecipeList;
    })
    .catch((error) => {
        console.log('error');
    });
}

getRecipes();

</script>
