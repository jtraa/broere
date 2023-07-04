<style>
    .header-image {
        mask-image: linear-gradient(to left, rgba(255,255,255, 1) 1%, rgba(0,212,255, 0.0) 99%);
    }
</style>

<template>
    <div>
        <div class="md:relative">
            <div class="z-50 overflow-hidden bg-white max-h-screen">
                <img class="bg-bottom hidden md:block header-image md:w-full" :src="headerImage" :alt="alt">
            </div>
            <div class="md:absolute z-30 top-0 bottom-0 right-0 left-0">
                <div class="flex justify-start items-center h-full xl:h-screen container">
                    <div class="md:w-7/12 lg:5/12 w-full">
                        <div class="mt-20 xl:mt-0 xl:mt-14 3xl:my-20 font-poppins md:font-montserrat">
                            <img :src="headerImage" class=" md:hidden 2xl:w-full mb-4" :alt="alt">
                            <h1 class="mb-4 text-17pt md:text-24pt"><span class="text-yellow font-bold">Uw zakenreis is onze zorg</span></h1>
                            <p class="mb-4 md:mb-0 text-12pt md:text-16pt ">
                                <span class="text-black font-bold md:font-bold">Wij verzorgen reserveringen zoals vluchten, hotelkamers en autohuur. Ook regelen we transfers, visa, en vervoer per trein en boot. Op deze manier bespaart u tijd en kosten en kunt u
                                    zich volledig concentreren op uw bedrijfsactiviteiten.</span>
                            </p>
                        </div>
                        <v-btn class="v-btn bg-yellow py-4 mb-4 md:mb-0 text-white font-bold text-15pt md:text-20pt no-underline font-poppins" :href="telephone">
                            BEL NU : {{tel}}
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
            type: String,
        },
        tel: {
            type: String,
        },
        telephone: {
            type: String,
        },
    },
    data () {
        return {
            headerImage: 'images/backgrounds/businessman.webp',
            lazyloadImage: 'images/header-dummy.webp',
            logoImage: 'images/logo/broere-logo.png',
            bannerImage: 'images/banner/banner.gif',
        }
    },
}
</script>
