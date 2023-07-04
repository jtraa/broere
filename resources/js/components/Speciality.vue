<style>
    @media screen and (min-width: 992px) {
        .background-plane {
            background-color: #7dc8db;
            background-image: url("../../images/backgrounds/broere2.avif");
            background-repeat: no-repeat;
            background-position: 100% 0%;
            background-size: cover;
        }
    }
    @media screen and (max-width: 991px) {
        .background-plane {
            background: rgb(183, 208, 210);
            background: linear-gradient(11deg, rgba(183, 208, 210, 1) 0%, rgba(112, 198, 220, 1) 100%);
        }
    }
</style>

<template>
    <div class="lg:py-8 font-poppins">
        <div class="container flex justify-center lg:py-4 mb-7 sm:mb-0">
            <div class="xl:w-5/6 w-full">
                <div class="md:flex justify-center items-center lg:my-5 md:overflow-hidden border-black border-4">
                    <div class="lg:px-20 p-4 lg:py-10">
                        <div class="text-center">
                            <h2 class="mp-0 mb-4 lg:mb-5 text-yellow text-17pt lg:text-24pt font-bold">Duidelijkheid is waar wij naar streven.</h2>
                            <p class="text-black text-12pt lg:text-15pt leading-8 mb-4 lg:mb-5">
                                Als u kiest voor de diensten van Broere Vliegpassages, weet u waar u aan toe bent.<br class="lg:block hidden" />
                                U krijgt de reis die naadloos aansluit op u wensen, tegen opgegeven kosten.<br class="lg:block hidden" />
                                In deze prijs is alles inbegrepen zodat u achteraf niet met toeslagen<br class="lg:block hidden" />
                                of andere extra kosten te maken krijgt.
                            </p>
                            <p class="font-bold text-black lg:text-left text-15pt lg:text-17pt leading-8 mb-3 lg:hidden">
                                De specialisten van Broere Vliegpassages leveren u de volgende diensten:
                            </p>
                            <p class="font-bold text-black lg:text-center text-15pt lg:text-17pt leading-8 mb-3 lg:block hidden">
                                De specialisten van Broere Vliegpassages leveren u de volgende diensten:
                            </p>
                        </div>

                        <div class="text-black text-center lg:text-left text-12pt lg:text-15pt leading-8">
                            <div class="md:flex justify-content-around items-center">
                                <ul class="m-0 p-0 lg:mr-5">
                                    <li>(Zaken)reizen op maat</li>
                                    <li>Vliegtickets</li>
                                    <li>Trein / ferrytickets</li>
                                    <li>Hotelreserveringen</li>
                                </ul>
                                <ul class="m-0 p-0">
                                    <li>Transfers van / naar de luchthaven</li>
                                    <li>VIP Valet Parking op Schiphol</li>
                                    <li>24-uurs service in geval van nood</li>
                                    <li class="mb-0">Autohuur</li>
                                </ul>
                            </div>
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
            type: String,
        },
        maps: {
            type: String,
        },
        telephone: {
            type: String,
        },
    },
    data () {
        return {

        }
    },
}
</script>
