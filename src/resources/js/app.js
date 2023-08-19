import "./bootstrap";

import { createApp } from "vue";
import App from "./components/Main";
import router from "./router";

const app = createApp(App);

app.use(router).mount("#app");
