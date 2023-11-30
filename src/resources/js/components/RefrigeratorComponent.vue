<template>
<div>
    <!-- 検索窓 -->
    <div>
        <div class="search-box">
            <button class="btn search-button" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            <input type="text" v-model="search" class="search-input" placeholder="材料を検索">
        </div>
    </div>

    <!-- 食材グループの一覧 -->
    <div class="group_nav">
        <div class="btn text-white" style="background:#01b5e4;" @click="selectGroup(1)">肉</div>
        <div class="btn text-white" style="background:#03d1cf;" @click="selectGroup(2)">野菜</div>
        <div class="btn text-white" style="background:#95d98a;" @click="selectGroup(3)">海鮮</div>
        <div class="btn text-white" style="background:#e3bc35;" @click="selectGroup(4)">調味料</div>
        <div class="btn text-white" style="background:#ec947a;" @click="selectGroup(5)">粉類・麺類</div>
        <div class="btn text-white" style="background:#4169e1;" @click="selectGroup(6)">卵・乳製品</div>
        <div class="btn text-white" style="background:#db6e86;" @click="selectGroup(7)">きのこ</div>
        <div class="btn text-white" style="background:#bab3ec;" @click="selectGroup(8)">大豆加工品</div>
        <div class="btn text-white" style="background:#b6b6ae;" @click="selectGroup(9)">その他</div>
    </div>

    <!-- 食材の一覧 -->
    <div class="container ingredients">
        <div class="row">
            <div class="col-lg-2 col-nd-3 col-4 text-center pb-2" v-for="(ingredient, index) in ingredients" :key="index">
                <div class="ingredient" @click="selectIngredient(ingredient)">
                    <img src="/image/icons/check_icon.jpg" class="check-logo" :class="{ 'check-active': ingredient.already_status }">
                    <img :src="ingredient.ingredients_image" class="circle-img" :class="{ 'img-active': ingredient.already_status }">    
                </div>
                <p class="ingredients-name">{{ ingredient.ingredients_name }}</p>
            </div>
        </div>
    </div>

    <!-- テスト用 -->
    
</div>
</template>

<style scoped>

/*  ーーーー 材料確認CSS ーーーーーーーーーーーー  */
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

// 材料グループを選択した時
const selectGroup = (groupId) => {
    
    axios.post('/api/group_ingredient_list', {
        groupId: groupId
    })
    .then((res) => {
        console.log('成功');
        console.log(res.data.allIngredientList);
    })
    .catch((error) => {
        console.log('error');
    });

    ingredients.value = '';
    console.log(ingredients);
}

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
