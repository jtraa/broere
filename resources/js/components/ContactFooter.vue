<style>
.border-left {
    border-color: #7dc8db !important;
}

.contact a, .images a {
    opacity: 0.85;
    transition: .25s opacity;
}
.contact a:hover, .images a:hover{
    opacity: 1;
}

@media screen and (min-width: 840px) {
    .contact i {
        font-size: 1.75em;
        text-decoration: none;
    }
}

</style>

<template>
    <div class="bg-darkblue lg:py-16 flex justify-center" id="socials">
        <div class="container flex py-4 justify-center">
            <div class="lg:w-5/6">
                <h2 class="mp-0 mb-0 lg:mb-4 text-lightblue text-17pt lg:text-24pt font-extrabold uppercase">Partners</h2>
                <div class="w-full lg:mb-16">
                    <div class="flex justify-between items-center content-center images">
                        <a class="text-lightblue md:border-left md:flex justify-center items-center 2xl:min-w-300px lg:max-h-100px order-4 lg:order-none ml-4 lg:ml-0" href="https://www.iata.org/" target="_blank">
                            <img src="images/footerlogos/iata_official_logo.webp" class="md:max-h-100px max-h-300px" :alt="alt">
                        </a>
                        <a class="text-lightblue md:border-left md:flex justify-center items-center 2xl:min-w-300px lg:max-h-100px order-1 lg:order-none" href="https://www.bluebiz.com/nl/" target="_blank">
                            <img src="images/footerlogos/bluebiz_logo.webp" class="md:max-h-200px" :alt="alt">
                        </a>
                        <a class="text-lightblue md:border-left md:flex justify-center items-center 2xl:min-w-300px lg:max-h-100px order-2 lg:order-none" href="https://zakenreizen-btp.nl/" target="_blank">
                            <img src="images/footerlogos/btp_logo.webp" class="md:max-h-250px" :alt="alt">
                        </a>
                        <a class="text-lightblue md:border-left md:flex justify-center items-center 2xl:min-w-300px lg:max-h-100px order-3 lg:order-none" href="https://www.anvr.nl/default.aspx" target="_blank">
                            <img src="images/footerlogos/ANVR.webp" class="md:max-h-100px max-h-250px" :alt="alt">
                        </a>
                    </div>
                </div>
                <h2 class="mp-0 mb-4 text-lightblue text-17pt lg:text-24pt font-extrabold uppercase">Contact</h2>
                <div class="w-full">
                    <div class="md:flex justify-between items-center contact">
                        <a class="text-powderblue text-decoration-none d-block md:d-flex" :href="telephone" target="_blank">
                            <i class="fas fa-phone-alt text-yellow mr-2"></i>
                            <span class="text-15pt lg:text-17pt font-bold">{{tel}}</span>
                        </a>
                        <a class="text-powderblue text-decoration-none d-block md:d-flex" href="mailto:business@broerevliegpassages.nl">
                            <i class="fas fa-envelope text-yellow mr-2"></i>
                            <span class="text-15pt lg:text-17pt font-bold">business@broerevliegpassages.nl</span>
                        </a>
                        <a class="text-powderblue text-decoration-none d-block md:d-flex" target="_blank" href="https://www.broerevliegpassages.nl">
                            <i class="fas fa-globe text-yellow mr-2"></i>
                            <span class="text-15pt lg:text-17pt font-bold">www.broerevliegpassages.nl</span>
                        </a>
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
        tel: {
            type: Array,
        },
    },
    data () {
        return {

        }
    },
}
</script>
