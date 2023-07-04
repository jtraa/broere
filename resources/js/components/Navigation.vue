<style>
    #nav ul li a {
        cursor: pointer;
        opacity: 1;
        color: rgb(2, 0, 0);
        transition: .2s ease-in-out color;
        position: relative;
        z-index: 2;
    }
    #nav ul li a:hover{
        color: #646fac;
    }
    .nav-pills li.nav-item a.nav-link {
        color: rgb(2, 0, 0);
        transition: .2s ease-in-out color;
    }
    .nav-pills li.nav-item a.nav-link:hover {
        color: #646fac;
    }
    .v-menu__content {
        top: 64px !important;
    }
</style>

<template>
<div class="navigation w-full fixed top-0 bg-white right-0 z-40" data-aos="fade-down" data-aos-duration="1000">
    <div class="content">
        <div class="xl:text-center xl:hidden" data-app>
            <v-toolbar>
                <div class="h-full">
                    <a href="/"><img src="images/logo/broere-logo-klein.png" class="h-full ml-0" :alt="alt"></a>
                </div>
                <v-spacer></v-spacer>

                <v-menu :location="location" class="flex justify-end" transition="scroll-y-transition" left>
                    <template class="flex justify-end" v-slot:activator="{ on, attrs }">
                        <v-btn
                            class="bg-yellow md:w-auto py-4 text-white font-bold text-20pt no-underline font-poppins mb-0"
                            dark
                            v-bind="attrs"
                            v-on="on"
                        >
                            <i class="fas fa-bars"></i>
                        </v-btn>
                    </template>
                    <v-list>
                        <v-list-item
                            v-for="(item, index) in navItems"
                            :key="index"
                            v-on:click="$vuetify.goTo(item.link)"
                        >
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </v-toolbar>
        </div>
        <div class="xl:flex justify-center items-center container hidden xl:block transition-all navigation-desktop">
            <div class=" xl:contents justify-center items-center bg-lightblue">

                <div class="xl:hidden">
                    <a href="/" id="logo" class="text-darkblue flex">
                        <img class="" src="images/logo/broere-logo.png" :alt="alt">
                    </a>
                </div>
                <div class="w-full xl:hidden flex justify-end">
                    <div id="hamburger" role="menu" data-toggle="collapse" data-target="#navbarCollapse"
                         aria-expanded="false" aria-label="Toggle navigation">
                        <div id="nav-icon4" class="text-yellow m-3">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-start">
                 <a href="/"><img src="/images/logo/broere-logo.png" class="h-20 w-full" :alt="alt"></a>
            </div>
            <div class="flex items-center justify-center">
                <div class="navbar navbar-expand-xl p-0 m-0">
                    <nav id="nav">
                        <ul class="p-0 m-0 block xl:flex items-center justify-center font-bold font-poppins text-17pt inline-flex flex-nowrap whitespace-nowrap">
                            <li class="nav-item"><a class="anchor nav-link" @click="$vuetify.goTo('#broere', options)">Over ons</a></li>
                            <li class="nav-item"><a class="anchor nav-link" @click="$vuetify.goTo('#boeken', options)">(Online) Boeken</a></li>
                            <li class="nav-item"><a class="anchor nav-link " @click="$vuetify.goTo('#ontdek', options)">Voordelen</a></li>
                            <li class="nav-item"><a class="nav-link inline-flex flex-nowrap items-center capitalize" target="_blank" :href="maps"><i class="text-purpleblue fas fa-map-marker-alt mr-2"></i>Locatie</a></li>
                            <li class="nav-item"><a class="nav-link inline-flex flex-nowrap whitespace-nowrap items-center" :href="telephone"><i class="text-purpleblue fas fa-phone-alt mr-2"></i>{{tel}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 100) {
            $(".navigation .container").addClass("py-0");
            $(".navigation").removeClass("bg-white");
            $(".navigation").addClass("bg-whitesmoke");
        } else {
            $(".navigation .container").removeClass("py-0");
            $(".navigation").addClass("bg-white");
            $(".navigation").removeClass("bg-whitesmoke");

        }
    });

import * as easings from 'vuetify/lib/services/goto/easing-patterns';

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
        tel: {
            type: String,
        },
    },
    methods: {

    },
    data () {
        return {
            navItems: [
                { title: '(Online) Boeken', link: '#boeken, options'},
                { title: 'Over ons', link: '#broere, options'},
                { title: 'Voordelen', link: '#ontdek, options'},

            ],
            navImage: 'images/zakelijk-edit.webp',
            type: 'selector',
            number: 9999,
            selector: '#ontdek',
            selections: ['#first', '#second', '#third'],
            selected: 'Button',
            elements: ['Button', 'Radio group'],
            duration: 1000,
            offset: 50,
            easing: 'easeInOutCubic',
            easings: Object.keys(easings),
            locations: [
                'top',
                'bottom',
                'start',
                'end',
                'center',
            ],
            location: 'start',
        }
    },
    computed: {
        target () {
            const value = this[this.type]
            if (!isNaN(value)) return Number(value)
            else return value
        },
        options () {
            return {
                duration: this.duration,
                offset: this.offset,
                easing: this.easing,
            }
        },
        element () {
            if (this.selected === 'Button') return this.$refs.button
            else if (this.selected === 'Radio group') return this.$refs.radio
            else return null
        },
    },
}
</script>
