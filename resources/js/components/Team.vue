<style>
    .team .v-image__image, .team .v-image__image--cover {
        background-position: right !important;
    }
    @media screen and (min-width: 992px) {
        .team-member {
            align-items: center;
            background-color: rgba(19, 72, 122, 1);
            border-radius: 50%;
            display: flex;
            height: 250px;
            justify-content: flex-end;
            overflow: hidden;
            width: 250px;
        }

    }
    @media screen and (max-width: 991px) {
        .team-member {
            align-items: center;
            background-color: rgba(19, 72, 122, 1);
            border-radius: 50%;
            display: flex;
            height: 150px;
            justify-content: center;
            overflow: hidden;
            width: 150px;
        }
    }
</style>

<template>
    <div class="lg:py-16 font-poppins">
        <div class="container pb-4 lg:pb-0">
            <div class="flex justify-center">
                <div class="lg:w-3/4 text-center mb-4 lg:mb-5">
                    <h2 class="mp-0 mb-3 text-darkblue text-17pt lg:text-24pt font-bold">
                        Uit wie bestaat PB Travel?
                    </h2>
                    <p class="text-darkblue text-12pt lg:text-15pt">
                        Wij bestaan uit een ambitieus en samenhangend team. Uw wensen worden één op één besproken met iemand wiens dagelijke uitdaging, een oplossing vinden is. Die aan uw eisen voldoet, ongeacht de puzzel. De specialisten van PB Travel staan graag voor u klaar.
                    </p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="lg:w-4/5">
                    <div class="flex team justify-center md:justify-start flex-wrap">
                        <div class="w-1/2 md:w-1/3 text-center mb-5"  data-aos="fade-up" data-aos-duration="1000">
                            <div class="flex justify-center">
                                <div class="team-member mb-3">
                                    <v-img src="images/team/paul.webp" class="h-full" :alt="alt"></v-img>
                                </div>
                            </div>
                            <h3 class="mb-0 text-darkblue text-12pt lg:text-17pt font-bold">
                                Paul van der Bol
                            </h3>
                        </div>
                        <div class="w-1/2 md:w-1/3 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="flex justify-center">
                                <div class="team-member mb-3">
                                    <v-img src="images/team/evelyne.webp"class="h-full" :alt="alt"></v-img>
                                </div>
                            </div>
                            <h3 class="mb-0 text-darkblue text-12pt lg:text-17pt font-bold">
                                Evelyne de Jong
                            </h3>
                        </div>
                        <div class="w-1/2 md:w-1/3 text-center mb-5 md:mb-0" data-aos="fade-up" data-aos-duration="1000">
                            <div class="flex justify-center">
                                <div class="team-member mb-3">
                                    <v-img src="images/team/levine.webp" class="h-full" :alt="alt"></v-img>
                                </div>
                            </div>
                            <h3 class="mb-0 text-darkblue text-12pt lg:text-17pt font-bold">
                                Levine van Wensveen
                            </h3>
                        </div>
                        <div class="w-1/2 md:w-1/3 text-center" data-aos="fade-up" data-aos-duration="1000"">
                            <div class="flex justify-center">
                                <div class="team-member mb-3">
                                    <v-img src="images/team/fred.webp" class="h-full" :alt="alt"></v-img>
                                </div>
                            </div>
                            <h3 class="mb-0 text-darkblue text-12pt lg:text-17pt font-bold">
                                Fred Vonk
                            </h3>
                        </div>
                        <div class="w-1/2 md:w-1/3 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="flex justify-center">
                                <div class="team-member mb-3">
                                    <v-img src="images/team/miranda.webp" class="h-full" :alt="alt"></v-img>
                                </div>
                            </div>
                            <h3 class="mb-0 text-darkblue text-12pt lg:text-17pt font-bold">
                                Miranda van Eijken
                            </h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
    data () {
        return {

        }
    },
}
</script>
