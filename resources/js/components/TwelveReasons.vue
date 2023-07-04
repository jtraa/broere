<style>
    @media screen and (min-width: 1025px) {
        .background {
            background: rgb(183, 208, 210);
            background: linear-gradient(90deg, rgba(135,188,179, 1) 0%, rgba(219,209,171, 1) 100%);
            background-image: url("../../images/suitcase/broere6.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100% 82%;
            position: relative;
        }

        .background::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #1a202c;
            opacity: 0.45;
            z-index: 1;
        }
        ul li {
            margin-left: 20px;
        }

        ul li span {
            font-weight: 700;
            margin-left: 20px;
        }
        ::marker {
            color: #646fac;
            font-weight: 700;
        }
    }
    @media screen and (max-width: 1024px) {
        .background {
            background: rgb(150,61,0);
            background: linear-gradient(11deg, rgba(150,61,0,1) 0%, rgba(227,124,0,1) 50%);
        }
        ::marker {
            color: transparent;
            font-weight: 700;
            visibility: none;
        }
        ul li {
            margin-bottom: 5px;
        }
        ul li span {
            font-weight: 700;
            display: flex !important;
        }
        .background h2 {
            color: #ffffff;
        }
    }

    .background .content {
        z-index: 2;
        position: relative;
    }

</style>

<template>
        <div class="shadow-bg">
            <div class="background flex justify-center lg:py-40 font-poppins" data-anchor="ontdek" id="ontdek">
                <div class="flex container py-4 lg:py-0 content relative justify-end items-center">
                    <div class="lg:w-5/6 xl:9/12 2xl:w-3/4 w-full">
                        <h2 class="mp-0 mb-3 lg:text-yellow text-17pt xl:text-24pt font-bold">12 redenen om voor ons te kiezen</h2>
                        <ul class="m-0 p-0 text-12pt xl:text-15pt text-white list-decimal">
                            <li><span data-content="Tijdsbesparing">Tijdsbesparing:</span> Wij nemen uw werk uit handen</li>
                            <li><span data-content="Effectief reizen">Effectief reizen:</span> Wij bieden alternatieven voor snellere of comfortabelere reizen</li>
                            <li><span data-content="Maatwerk">Maatwerk:</span> Wij voldoen aan uw specifieke wensen</li>
                            <li><span data-content="Totaalpakket">Totaalpakket:</span> Wij boeken zowel losse tickets als complete reizen</li>
                            <li><span data-content="Kostenbesparing">Kostenbesparing:</span> Wij bieden de beste beschikbare reis voor de beste prijs</li>
                            <li><span data-content="Transparantie">Transparantie:</span> Geen verborgen of extra kosten</li>
                            <li><span data-content="24/7 bereikbaar">24/7 bereikbaar:</span> Wij zijn altijd beschikbaar in geval van nood</li>
                            <li><span data-content="Persoonlijke aandacht">Persoonlijke aandacht:</span> Uw vaste travelspecialist kent uw wensen</li>
                            <li><span data-content="Professionaliteit">Professionaliteit:</span> Onze travelspecialisten hebben ruime ervaring</li>
                            <li><span data-content="Zelfstandigheid">Zelfstandigheid:</span> Wij hebben alle boekingen in eigen hand</li>
                            <li><span data-content="IATA-lidmaatschap">IATA-lidmaatschap:</span> Wij kunnen onze eigen tickets uitschrijven tegen de beste tarieven</li>
                            <li><span data-content="Betrouwbaarheid">Betrouwbaarheid:</span> Wij zijn SGRZ lid, waardoor u van een garantie verzekerd bent</li>
                        </ul>
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
    data () {
        return {

        }
    },
}
</script>
