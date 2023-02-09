<style>
.owl-carousel {
    border-top: 5px solid #21487a !important;
    border-bottom: 5px solid #21487a !important;
    position: relative;
    height: auto;
}
.owl-dots {
    display:none;
}
.owl-carousel .owl-stage {
    display: flex;
    align-items: center;
}
.owl-nav {
    align-items: center !important;
    display: flex !important;
    justify-content: space-between !important;
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
}
@media screen and (min-width: 992px) {
    .owl-prev {
        margin-left: -50px;
    }

    .owl-next {
        margin-right: -50px;
    }
}
.owl-prev i, .owl-next i {
    border: 1px solid rgba(25, 94, 97, 0.1) !important;
    border-radius: 50%;
    box-shadow: 1px 1px 18px -3px rgba(25, 94, 97, 0.1);
    color: rgba(25, 94, 97, 0.25);
    padding: 12.5px;
    padding-left: 15px;
    padding-right: 15px;
}
.owl-prev span, .owl-next span {
    color: rgba(25, 94, 97, 0.1) !important;
    font-size: 4em !important;
}
</style>

<template>
    <div class="lg:pb-16 font-poppins hidden md:block">
        <div class="container flex justify-center pb-4 lg:pb-0">
            <div class="md:w-5/6 w-full">
                <h2 class="mp-0 mb-3 text-lightblue text-24pt font-bold uppercase">Recencies</h2>
                <div class="owl-carousel owl-theme">
                    <div class="px-12 flex justify-center items-center py-10">
                        <div>
                            <p class="mb-4 text-darkblue italic font-medium text-15pt lg:text-17pt">Door de jarenlange ervaring van directeur Paul van der Bol en zijn
                            travelteam, stralen zij rust en professionaliteit uit. Geen vraag is
                            hen te gek waardoor je iedere reis, zakelijk of privé, met vertrouwen
                            boekt.</p>
                            <h3 class="mb-0 text-darkblue font-extrabold text-15pt lg:text-17pt">
                                Mariska Zandvliet-Boer<br />
                                Boer Groep Holland-Gebotex
                            </h3>
                        </div>
                    </div>
                    <div class="px-12 flex justify-center items-center py-4 lg:py-10">
                        <div>
                            <p class="mb-4 text-darkblue italic font-medium text-15pt lg:text-17pt">Supermooie reizen voor geweldig lage prijzen, altijd supergoede service en topkwaliteit en vele mogelijkheden, een echte aanrader</p>
                            <h3 class="mb-0 text-darkblue font-extrabold text-15pt lg:text-17pt">
                                Richard Welgraven
                            </h3>
                        </div>
                    </div>
                    <div class="px-12 flex justify-center items-center py-4 lg:py-10">
                        <div>
                            <p class="mb-4 text-darkblue italic font-medium text-15pt lg:text-17pt">Een superbedrijf met zoveel keus en altijd geweldig voor iedere bestemming</p>
                            <h3 class="mb-0 text-darkblue font-extrabold text-15pt lg:text-17pt">
                                Monica Bakker
                            </h3>
                        </div>
                    </div>
                    <div class="px-12 flex justify-center items-center py-4 lg:py-10">
                        <div>
                            <p class="mb-4 text-darkblue italic font-medium text-15pt lg:text-17pt">Geweldig bedrijf met top service!</p>
                            <h3 class="mb-0 text-darkblue font-extrabold text-15pt lg:text-17pt">
                                Paul van der Bol
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop: true,
    autoplay:true,
    autoplayTimeout: 10000,
    margin: 10,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive:{
        0:{
            items:1,
            loop:true
        },
        600:{
            items:1,
            loop:true
        },
        1000:{
            items:1,
            loop:true
        }
    }
})
});

import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

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
