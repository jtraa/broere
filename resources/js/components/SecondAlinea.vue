<style>
    @media screen and (min-width: 1025px) {
        .background {
            background: rgb(183, 208, 210);
            background: linear-gradient(90deg, rgba(135,188,179, 1) 0%, rgba(219,209,171, 1) 100%);
            background-image: url("../../images/reis-op-maat.webp");
            background-repeat: no-repeat;
            background-size: 155%;
            background-position: 100% 25%;
        }
    }
    @media screen and (max-width: 1024px) {
        .background {
            background: rgb(183, 208, 210);
            background: linear-gradient(90deg, rgba(135,188,179, 1) 0%, rgba(219,209,171, 1) 100%);
        }
    }
</style>

<template>
    <div class="background xl:pb-24 xl:pt-48 font-poppins" data-anchor="ontdek" id="ontdek">
        <div class="flex justify-end items-center xl:mr-48 lg:p-5 p-4">
            <div class="lg:w-3/12 xl:4/12 2xl:w-3/12 w-full">
                <h2 class="mp-0 mb-3 text-darkblue text-17pt 2xl:text-24pt font-bold">Reizen op maat</h2>
                <p class="text-darkblue text-12pt 2xl:text-15pt mb-0">
                    Er zijn veel redenen om een incentive of groepsreis te organiseren. Dit moet natuurlijk een onvergetelijke ervaring worden en vraagt om maatwerk en originaliteit.<br /><br />
                    Onze reisprofessionals denken graag met u mee bij de selectie van een passende bestemming, het plannen van bijzondere activiteiten en alle wensen die u verder heeft. Uiteraard passend binnen het vastgestelde budget.
                </p>
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

        }
    },
}
</script>
