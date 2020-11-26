const pkg = require("./package");

const VuetifyLoaderPlugin = require("vuetify-loader/lib/plugin");

module.exports = {
    mode: "spa",

    /*
     ** Headers of the page
     */
    head: {
        title: "Dashboard โรงพยาบาลหาดใหญ่",
        meta: [
            { charset: "utf-8" },
            { name: "viewport", content: "width=device-width, initial-scale=1" },
            {
                hid: "description",
                name: "description",
                content: "Vue Material Admin Template is a \n" +
                    "    Google Material Design inspired admin dashboard template built with Vue and Vuetify."
            }
        ],
        link: [
            { rel: "icon", type: "image/x-icon", href: "/favicon.ico" },
            {
                rel: "stylesheet",
                href: "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"
            },
            {
                rel: "stylesheet",
                href: "https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;1,200&display=swap"
            }
        ],
        script: [{
            src: "https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.4/echarts-en.min.js"
        }]
    },

    /*
     ** Customize the progress-bar color
     */
    loading: { color: "#3adced" },

    /*
     ** Global CSS
     */
    css: [
        "~/assets/style/theme.styl",
        "~/assets/style/app.styl",
        "font-awesome/css/font-awesome.css",
        "roboto-fontface/css/roboto/roboto-fontface.css"
    ],

    /*
     ** Plugins to load before mounting the App
     */
    plugins: ["@/plugins/vuetify", "@/plugins/vee-validate"],

    /*
     ** Nuxt.js modules
     */
    modules: ["@nuxtjs/axios"],

    axios: {
        // baseURL: "http://localhost/ipd_pmk/template/backend/" // Used as fallback if no runtime config is provided
        baseURL: "http://localhost/ipdpmk/backend/" // Used as fallback if no runtime config is provided
    },

    publicRuntimeConfig: {
        axios: {
            browserBaseURL: process.env.BROWSER_BASE_URL
        }
    },

    privateRuntimeConfig: {
        axios: {
            baseURL: process.env.BASE_URL
        }
    },

    /*
     ** Build configuration
     */
    build: {
        transpile: ["vuetify/lib"],
        plugins: [new VuetifyLoaderPlugin()],
        loaders: {
            stylus: {
                import: ["~assets/style/variables.styl"]
            }
        },

        /*
         ** You can extend webpack config here
         */
        extend(config, ctx) {}
    },
    router: {
        // base: "/tee/pasaduweb"
        base: "/ipdpmk"
    }
};