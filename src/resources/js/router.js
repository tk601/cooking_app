import { createRouter, createWebHistory } from "vue-router";
import Welcome from "./components/Welcome";
import RefrigeratorComponent from "./components/RefrigeratorComponent";
import RecipeComponent from "./components/RecipeComponent";

const BASE_URL = '/'

const router = createRouter({
    history: createWebHistory(BASE_URL),
    routes: [
        {
            // 初期画面
            path: "/",
            name: "welcome",
            component: Welcome,
        },
        {
            // 冷蔵庫画面
            // 食材の一覧から冷蔵庫の中身を編集できる
            path: "/refrigerator",
            name: "refrigerator",
            component: RefrigeratorComponent,
        },
        {
            // レシピ画面
            // 冷蔵庫の食材を使用して作成できるレシピの一覧
            path: '/recipe',
            name: 'recipe',
            component: RecipeComponent
        },
    ],
});

export default router

// const routes = [
//     {
//         path: '/jslogin',
//         name: 'jslogin',
//         component: LoginComponent
//     },
//     // home画面
//     {
//         path: '',
//         name: 'home',
//         component: HomeComponent
//     },
//     // 冷蔵庫
//         // 冷蔵庫の中身編集画面
//         // 材料一覧画面
//     {
//         path: '/refrigerator',
//         name: 'refrigerator',
//         component: RefrigeratorComponent
//     },
//     // レシピ
//         // 現在作成できるレシピ一覧
//         // 全てのレシピ一覧
//     {
//         path: '/recipe',
//         name: 'recipe',
//         component: RecipeComponent
//     },
// ]
