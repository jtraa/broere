<style>
    .bg-linear {
        background: rgb(183, 208, 210);
        background: linear-gradient(11deg, rgba(183, 208, 210, 1) 0%, rgba(112, 198, 220, 1) 100%);
    }
    .special-border-bottom {
        content: ""; /* This is necessary for the pseudo element to work. */
        display: block; /* This will put the pseudo element on its own line. */
        margin: 0 auto; /* This will center the border. */
        width: 50%; /* Change this to whatever width you want. */
        padding-top: 20px; /* This creates some space between the element and the border. */
        border-bottom: 4px solid #fff;
        bottom: 0;
        left: 0;
        z-index: 11;
    }
    .special-border-right{
        content: ""; /* This is necessary for the pseudo element to work. */
        display: block; /* This will put the pseudo element on its own line. */
        margin: 0 auto; /* This will center the border. */
        height: 30%; /* Change this to whatever width you want. */
        padding-top: 20px; /* This creates some space between the element and the border. */
        border-right: 4px solid #fff;
        top: 0;
        right: 0;
        z-index: 11;
    }
    .image-in-border {
        content: "";
        display: block;
        margin: 0 auto;
        margin-right: -150px;
        margin-bottom: -100px;
        bottom: 0;
        right: 0;
    }
    .button-in-border {
        content: "";
        margin: 0 auto;
        bottom: 0;
        right: 0;
        /*animation: MoveUpDown 1s linear infinite;*/
    }
    .no-animation {
        animation:none;
    }

    @-webkit-keyframes MoveUpDown {
        0%, 100% {
            bottom: 0;
        }
        50% {
            bottom: 15px;
        }
    }

</style>

<template>
    <div class="bg-linear lg:py-8 font-poppins">
        <div class="container flex justify-center">
            <div class="xl:w-5/6 w-full">

                <div class="flex justify-center items-center my-4 xl:my-5 border-white border-4 xl:border-b-0 xl:border-r-0 border-t-4 border-l-4 relative">
                    <div class="special-border-bottom hidden xl:block md:absolute"></div>
                    <div class="special-border-right hidden xl:block md:absolute"></div>
                    <v-img class="image-in-border hidden xl:block xl:absolute md:w-3/4" src="images/klm-vliegtuig-pb-travel.webp" data-aos="fade-up-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"></v-img>
                    <div class="hidden xl:block" @click="expandForm()">
                        <v-btn
                            value="Save Task"
                            type="submit"
                            @click="$vuetify.goTo('#form', options)"
                            data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="2000"
                            class="bg-darkblue absolute md:w-auto w-full py-4 text-white font-bold text-15pt lg:text-20pt no-underline font-poppins mb-0 button-in-border"
                        >
                            Boek nu
                        </v-btn>
                    </div>
                    <div class="lg:px-20 lg:py-6 text-center">
                        <div class="px-4 py-4">
                            <h2 class="mp-0 mb-3 text-white text-17pt lg:text-24pt font-bold">Boeken</h2>
                            <p class="font-bold text-white text-15pt lg:text-17pt leading-8">
                                Wij maken graag een afspraak voor een vrijblijvend gesprek. U bent van harte welkom om uw reiswensen in alle rust te bespreken op ons kantoor in Ridderkerk.
                            </p>
                            <p class="text-white text-center lg:text-left text-12pt lg:text-17pt leading-8 mb-4 lg:mb-5">
                                Op verzoek brengen we graag een bezoek aan uw bedrijf.<br class="hidden xl:block" />
                                Uiteraard kunt u uw wensen ook telefonisch doorgeven<br class="hidden xl:block" />
                                en direct een offerte aanvragen.
                            </p>
                            <div class="text-left relative hidden xl:block">
                                <i class="fas fa-map-marker-alt text-yellow text-24pt absolute pt-1"
                                   style="margin-left:-20px;"
                                ></i>
                                <a :href="maps" target="_blank" class="text-decoration-none">
                                    <p class="font-bold text-white text-left text-15pt lg:text-17pt leading-8 ml-5 md:ml-0" id="form">
                                        PB Travel<br />
                                        Kolenbranderstraat 20 E<br />
                                        2984 AT Ridderkerk
                                    </p>
                                </a>
                            </div>
                            <div class="xl:hidden" @click="expandForm()" id="form2">
                                <v-btn
                                    value="Save Task"
                                    type="submit"
                                    @click="$vuetify.goTo('#form2', options)"
                                    class="bg-darkblue md:w-auto w-full py-4 text-white font-bold text-15pt lg:text-20pt no-underline font-poppins mb-0"
                                >
                                    Boek nu
                                </v-btn>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hidden-form" >
                        <Form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    $(document).ready(function(){
        $( '.hidden-form' ).hide();
    });

import Form from './Form.vue';

export default {
    components: {
        Form,
    },
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
        }
    },
    data () {
        return {
            offset: 250,
        }
    },
}
</script>
