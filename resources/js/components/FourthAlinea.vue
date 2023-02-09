<style>
    @media screen and (min-width: 992px) {
        .background-plane {
            background-color: #7dc8db;
            background-image: url("../../images/vleugel.webp");
            background-repeat: no-repeat;
            background-position: 100% 47.5%;
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
    <div class="background-plane lg:py-8 font-poppins">
        <div class="container flex justify-center py-4">
            <div class="md:w-5/6 w-full">
                <div class="md:flex justify-center items-center lg:my-5 md:overflow-hidden border-white border-4">
                    <div class="px-4 lg:px-24 py-4 lg:py-10">
                        <div class="text-center">
                            <h2 class="mp-0 mb-4 lg:mb-5 text-white text-17pt lg:text-24pt font-bold">Duidelijkheid is waar wij naar streven.</h2>
                            <p class="font-bold text-white text-12pt lg:text-17pt leading-8 mb-4 lg:mb-5">
                                Als u kiest voor de diensten van Broere Vliegpassages, weet u waar u aan toe bent.<br class="lg:block hidden" />
                                U krijgt de reis die naadloos aansluit op u wensen, tegen opgegeven kosten.<br class="lg:block hidden" />
                                In deze prijs is alles inbegrepen zodat u achteraf niet met toeslagen<br class="lg:block hidden" />
                                of andere extra kosten te maken krijgt.
                            </p>
                            <p class="font-bold text-white lg:text-left text-15pt lg:text-17pt leading-8 mb-3 lg:hidden">
                                De specialisten van PB Travel leveren u de volgende diensten:
                            </p>
                        </div>
                        <p class="font-bold text-white lg:text-left text-15pt lg:text-17pt leading-8 mb-3 lg:block hidden">
                            De specialisten van PB Travel leveren u de volgende diensten:
                        </p>
                        <div class="text-white text-center lg:text-left text-12pt lg:text-15pt leading-8">
                            <div class="md:flex justify-content-start items-center">
                                <ul class="m-0 p-0 lg:mr-5">
                                    <li>(Zaken)reizen op maat</li>
                                    <li>Vliegtickets</li>
                                    <li>Trein / ferrytickets</li>
                                    <li>Visum-aanvragen</li>
                                    <li>Hotelreserveringen</li>
                                </ul>
                                <ul class="m-0 p-0">
                                    <li>Afsluiten van reis / annuleringsverzekeringen</li>
                                    <li>Transfers van / naar de luchthaven</li>
                                    <li>VIP Valet Parking op Schiphol</li>
                                    <li>24-uurs service in geval van nood</li>
                                    <li>Autohuur</li>
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
