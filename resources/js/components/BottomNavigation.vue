<template>
    <v-card
        class="overflow-hidden mx-auto w-full"
        height="50"
        max-width="500"
    >
        <v-bottom-navigation
            class="fixed"
            :value="value"
            v-model="ex4"
            color="primary"
            absolute
            hide-on-scroll
            horizontal
            scroll-target="#hide-on-scroll-example"
        >
            <v-btn
                text
                class="text-decoration-none"s
                :href="telephone"
            >

                <i class="fas fa-2x fa-phone-alt"></i>
            </v-btn>

            <v-btn
                class="text-decoration-none"
                target="_blank"
                :href="maps"
            >

                <i class="fas fa-2x fa-map-marker-alt"></i>
            </v-btn>
            <v-btn
                text
                class="text-decoration-none"
                @click="$vuetify.goTo('#form2', options), expandForm()"
            >

                <i class="fas fa-2x fa-envelope"></i>
            </v-btn>
        </v-bottom-navigation>
    </v-card>
</template>

<script>

    export default {
        props: {
            alt: {
                type: Array,
            },
            maps: {
                type: Array,
            },
            telephone: {
                type: Array,
            },
        },
        methods: {
            expandForm() {
                $('.hidden-form').slideToggle(500);
                $('.arrow').toggleClass('fa-chevron-down');
                $('.arrow').toggleClass('fa-chevron-up');
                $('.arrow').toggleClass('no-animation');
            }
        },
        value: 1,
        name: "BottomNavigation",
        ex4: ['red', 'indigo', 'orange', 'primary', 'secondary', 'success', 'info', 'warning', 'error', 'red darken-3', 'indigo darken-3', 'orange darken-3'],
    }
</script>

<style scoped>

</style>
