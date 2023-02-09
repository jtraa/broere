<template>
    <div class="lg:py-16 font-poppins">
        <div class="container py-4">
            <div class="flex justify-center">
                <div class="lg:w-5/6 text-center mb-4 lg:mb-5">
                    <h2 class="mp-0 mb-3 text-darkblue text-17pt lg:text-24pt font-bold">
                        Waarom PB Travel?
                    </h2>
                    <p class="text-darkblue text-12pt lg:text-15pt">
                        Er wordt u proactief de best beschikbare reis voor de beste prijs aangeboden.
                        <br class="hidden lg:block" />
                        U reist effectief; u ontvangt alternatieven voor een snellere of meer comfortabele reis indien van toepassing. Wij nemen uw werk uit handen terwijl u zich richt op uw core-business.
                        <br /><br />
                        Alle travelspecialisten hebben ruime ervaring in de branche en zijn 24/7 bereikbaar.
                        <br class="hidden lg:block" />
                        Wij zijn een zelfstandig en onafhankelijk reisbureau; alle boekingen hebben wij aldus in eigen hand. Gepaard met een IATA lidmaatschap kunnen wij onze tickets uitschrijven tegen de beste tarieven.
                        <br /><br />
                        Uw vaste travelspecialist (er)kent uw wensen zonder verborgen
                        <br class="hidden lg:block" />
                        of extra kosten achteraf. Wij bieden een totaalpakket aan diensten en services; zowel losse tickets als een complete reis met alle extra’s, worden voor u geboekt.
                        <br class="hidden lg:block" />
                        Zo maken we het onmogelijke mogelijk, al naar gelang uw wensen.
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-5/6">
                    <div class="flex justify-center items-center">
                       <v-divider class="bg-darkblue border-1 lg:border-2"></v-divider>
                       <div @click="animateSpin()">
                           <v-img class="lg:mx-5 mx-4 hidden lg:block animate-spin"  data-aos="zoom-in" data-aos-duration="1000" max-width="125" :src="logoImage" :alt="alt"></v-img>
                       </div>

                        <v-img class="lg:mx-5 mx-4 lg:hidden" max-width="75" :src="logoImage" :alt="alt" ></v-img>
                       <v-divider class="bg-darkblue border-1 lg:border-2"></v-divider>
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
        telephone: {
            type: Array,
        },
    },
    methods: {

    },
    data () {
        return {
            logoImage: 'images/pb-travel-logo-klein.webp',
        }
    },
}
</script>
