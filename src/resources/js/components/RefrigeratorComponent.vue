<template>
<div>
    <div class="container-fluid bg-dark mb-3">
        <div class="container text-center text-white">
            冷蔵庫の中身
        </div>
    </div>
    <div>
        冷蔵庫の中身
    </div>
    <div>
        冷蔵庫の中身を編集する
    </div>
    <div>
        <p>食材グループ</p>
        <div>
            <p>野菜</p>
        </div>
        <div>
            <p>肉</p>
        </div>
        <div>
            <p>野菜</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4 text-center" v-for="(ingredient, index) in ingredients" :key="index">
                <div class="ingredient" @click="selectIngredient(ingredient)">
                    <img src="/image/icons/check_icon.jpg" class="check-logo" :class="{ 'check-active': ingredient.already_status }">
                    <img :src="ingredient.ingredients_image" class="circle-img" :class="{ 'img-active': ingredient.already_status }">    
                </div>                
                <p class="ingredients-name">{{ ingredient.ingredients_name }}</p>
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>
.check-active {
    display: block;
}
.img-active {
    border: 0.4rem solid #5cb85c;
}
</style>


<script setup>
import { ref } from "vue";

let ingredients = ref([]);


// 材料の一覧取得
const getIngredients = () => {
    axios.get('/api/ingredient_list')
    .then((res) => {
        let getData = [];
        getData = res.data.allIngredientList;
        ingredients.value = getData;
    })
    .catch((error) => {
        console.log('error');
    });
}

// 材料を選択した時の挙動
const selectIngredient = (ingredient) => {
    // 冷蔵庫にあるかどうかのステータスの変更
    ingredient.already_status = !ingredient.already_status;

    let insertStatus = '';
    if (ingredient.already_status === true) {
        insertStatus = true;
    } else {
        insertStatus = false;
    }

    // 冷蔵庫内データの更新
    axios.post('/api/update_refrigerator', {
        ingredientId: ingredient.id,
        ingredientStatus: ingredient.already_status
    })
    .then((res) => {
        console.log('成功');
        console.log(res.data.test);
    })
    .catch((error) => {
        console.log('error');
    });
}

getIngredients();

</script>
