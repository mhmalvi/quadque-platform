/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import axios from "axios";

require("./bootstrap");

window.Vue = require("vue").default;

import MarqueeText from "vue-marquee-text-component";
import DynamicMarquee from "vue-dynamic-marquee";

/* import the fontawesome core */
import { library } from "@fortawesome/fontawesome-svg-core";

/* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

import {
    faTwitter,
    faFacebookF,
    faYoutube,
    faInstagram,
} from "@fortawesome/free-brands-svg-icons";

/* add icons to the library */
library.add(faTwitter, faFacebookF, faYoutube, faInstagram);

Vue.component("marquee-text", MarqueeText);
Vue.component("dynamic-marquee", DynamicMarquee);

/* add font awesome icon component */
Vue.component("font-awesome-icon", FontAwesomeIcon);

Vue.component("home-component", require("./components/user/Home.vue").default);
Vue.component(
    "login-component",
    require("./components/admin/login.vue").default
);
Vue.component(
    "signup-component",
    require("./components/admin/signup.vue").default
);
Vue.component(
    "casestudy-component",
    require("./components/admin/casestudy.vue").default
);
Vue.component(
    "adminblog-component",
    require("./components/admin/blog.vue").default
);
Vue.component(
    "dashboard-component",
    require("./components/admin/dashboard.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
});
