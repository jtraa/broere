import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import colors from 'vuetify/lib/util/colors';

Vue.use(Vuetify)


export default new Vuetify({
    icons: {
        iconfont: 'md' || 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
    },
    theme: {
        themes: {
            light: {
                primary: '#646fac',
                secondary: '#646fac', // #FFCDD2
                accent: colors.indigo.base, // #3F51B5
            },
        },
    },
})

