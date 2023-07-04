<template>
    <div class="lg:py-16 font-poppins">
        <div class="container my-0 py-4">
            <div class="flex justify-center">
                <div class="lg:w-5/6 text-center lg:mb-5">
                    <h2 class="mp-0 mb-3 text-yellow text-17pt lg:text-24pt font-bold">
                        Waarom Broere Vliegpassages?
                    </h2>
                    <p class="text-dark text-12pt lg:text-15pt mb-0">
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
        </div>
    </div>
</template>

<script>
export default {
    props: {
        alt: {
            type: String,
        },
        telephone: {
            type: String,
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
