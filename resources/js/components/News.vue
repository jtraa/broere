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
            <div class="flex justify-center mb-4 xl:mb-10">
                <div class="md:w-5/6 w-full">
                    <h2 class="mp-0 mb-3 text-darkblue text-17pt lg:text-24pt font-bold">
                        Nieuws
                    </h2>
                    <p class="text-black mb-0 text-12pt lg:text-15pt">
                        Bekijk de laatste nieuwsberichten over Broere Vliegpassages hier.
                    </p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="xl:w-5/6 w-full">
                    <div class="xl:flex justify-between items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="xl:order-2 xl:w-1/3 mb-4 xl:mb-0">
                            <v-img src="images/news/transavia.webp" class="h-full" :alt="alt"></v-img>
                        </div>
                        <div class="xl:order-1 xl:w-3/5">
                            <h3 class="mb-0 text-purpleblue text-12pt lg:text-17pt font-bold">
                                Transavia
                            </h3>
                            <p class="text-black text-12pt lg:text-15pt">
                                Transavia wijzigt per 3 april 2024 de voorwaarden rondom cabinebagage. In de nieuwe situatie blijft het voor passagiers mogelijk 1 klein stuk handbagage gratis mee te nemen aan boord als deze onder de stoel past. Indien een passagier daarnaast ook een groot stuk cabinebagage aan boord wil meenemen, moet dit worden bijgeboekt.
                                <br><br>
                                Passagiers die voor 3 april geboekt hebben reizen onder de oude regeling . Dus ook als zij daarmee na 3 april reizen vallen ze onder de oude voorwaarden.
                            </p>
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
