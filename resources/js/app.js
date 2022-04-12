// axios
import axios from 'axios';
import VueAxios from 'vue-axios';

//  PrimeVue
import PrimeVue from "primevue/config";

// PrimeFlex (css)
import "primevue/resources/themes/saga-blue/theme.css"; // テーマ
import "primevue/resources/primevue.min.css"; // ベース
import "primeicons/primeicons.css"; // アイコン
import "primeflex/primeflex.css"; // primeflex

// fontawsome
import "@fortawesome/fontawesome-free/js/fontawesome";
import "@fortawesome/fontawesome-free/js/brands";
import "@fortawesome/fontawesome-free/js/solid";
import "@fortawesome/fontawesome-free/js/regular";

import { createApp } from 'vue';
import MainView from './views/MainView.vue';

const app = createApp({
    components: {
        MainView
    }
});

app.use(PrimeVue);
app.use(VueAxios, axios);

app.mount('#app');