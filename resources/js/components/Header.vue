<template>
    <div>
        <div class="md:relative">
            <div class="z-50 overflow-hidden bg-white">
                <img class="bg-bottom md:min-h-200px hidden md:block xl:w-screen" :src="headerImage" :alt="alt">
            </div>
            <div class="md:absolute z-30 top-0 bottom-0 right-0 left-0">
                <div class="flex justify-start items-center h-100 container">
                    <div class="md:w-5/12 w-full">
                        <img :src="logoImage" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000" class="w-1/2 hidden xl:flex overflow-hidden 2xl:mb-minus100 2xl:ml-minus100 select-none" :alt="alt" style="@media screen and (min-width: 992px) { margin-left:-100px; margin-bottom: -100px }">
                        <div class="mt-20 xl:mt-0 xl:my-14 3xl:my-20 font-montserrat">
                            <img :src="headerImage" class="2xl:w-full mb-4 md:hidden" :alt="alt">
                            <h1 class="mb-4 text-17pt lg:text-24pt text-darkblue font-bold">Het team van PB Travel neemt uw zorg uit handen en boekt nauwkeurig al uw zakenreizen.</h1>
                            <p class="mb-4 lg:mb-0 text-12pt lg:text-15pt text-darkblue font-semibold">
                                Wij verzorgen reserveringen zoals vluchten, hotelkamers en autohuur. Ook regelen we transfers, visa, en vervoer per trein en boot. Op deze manier bespaart u tijd en kosten en kunt u
                                zich volledig concentreren op uw bedrijfsactiviteiten.
                            </p>

                        </div>
                        <v-btn class="bg-yellow py-4 mb-4 lg:mb-0 text-white font-bold text-15pt lg:text-20pt no-underline font-poppins" :href="telephone">
                            BEL NU : 0180 44 60 70
                        </v-btn>
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
    data () {
        return {
            headerImage: 'images/zakelijk-edit.webp',
            lazyloadImage: 'images/header-dummy.webp',
            logoImage: 'images/pb-travel-logo-transparant.webp',
            bannerImage: 'images/banner/banner.gif',
        }
    },
}
</script>
