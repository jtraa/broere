import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import colors from 'vuetify/lib/util/colors'

Vue.use(Vuetify)

const opts = {}

export default new Vuetify({
    icons: {
        iconfont: 'md' || 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
    },
    theme: {
        themes: {
            light: {
                primary: '#14487a',
                secondary: colors.red.lighten4, // #FFCDD2
                accent: colors.indigo.base, // #3F51B5
            },
        },
    },
})

