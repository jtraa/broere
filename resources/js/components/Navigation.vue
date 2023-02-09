<style>
    #nav ul li a {
        cursor: pointer;
        opacity: 0.75;
        transition: .25s opacity;
    }
    #nav ul li a:hover{
        opacity: 1;
    }
    .nav-pills li.nav-item a.nav-link {
        opacity: 0.8;
        transition: .25s opacity;
    }
    .nav-pills li.nav-item a.nav-link:hover{
        opacity: 1;
    }
</style>

<template>
<div class="navigation w-full fixed top-0 right-0 z-40 bg-lightblue-opacity" data-aos="fade-down" data-aos-duration="1000">
    <div class="xl:text-center xl:hidden" data-app>
        <v-toolbar>
            <div class="h-full">
                <a href="/"><img src="images/pb-travel-logo-klein.webp" class="h-full" :alt="alt"></a>
            </div>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">
                <v-btn
                    v-for="item in menu"
                    :key="item.icon"
                    :to="item.link"
                    flat
                >{{ item.title }}</v-btn>
            </v-toolbar-items>
            <v-menu class="flex justify-end" transition="scroll-y-transition">
                <template class="flex justify-end" v-slot:activator="{ on, attrs }">
                    <v-btn
                        class="bg-darkblue md:w-auto py-4 text-white font-bold text-20pt no-underline font-poppins mb-0"
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
        <div class="flex xl:contents justify-center items-center bg-lightblue">
            <div class="flex-1 xl:hidden">
                <a href="/" id="logo" class="text-darkblue flex">
                    <img class="" src="images/pb-travel-logo-klein.webp" :alt="alt">
                </a>
            </div>
            <div class="flex-1 w-full xl:hidden flex justify-end">
                <div id="hamburger" role="menu" data-toggle="collapse" data-target="#navbarCollapse"
                     aria-expanded="false" aria-label="Toggle navigation">
                    <div id="nav-icon4" class="m-3">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:flex-2 block xl:flex items-center justify-center">
            <div class="navbar navbar-expand-xl p-0 m-0">
                <nav id="nav">
                    <ul class="p-0 m-0 block xl:flex items-center justify-center font-bold uppercase font-poppins text-20pt inline-flex flex-nowrap whitespace-nowrap">
                        <li class="nav-item"><a class="nav-link text-darkblue" @click="$vuetify.goTo('#boeken', options)">Boeken</a></li>
                        <li class="nav-item"><a class="anchor nav-link text-darkblue" @click="$vuetify.goTo('#ontdek', options)">Ontdek</a></li>
                        <li class="nav-item"><a class="anchor nav-link text-darkblue" @click="$vuetify.goTo('#pbtravel', options)">PB Travel</a></li>
                        <li class="nav-item"><a class="anchor nav-link text-darkblue" @click="$vuetify.goTo('#team', options)">Team</a></li>
<!--                        <li class="nav-item"><a class="anchor nav-link text-darkblue" @click="$vuetify.goTo('#nieuwsbrief', options)">Nieuwsbrief</a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
        <div class="w-full hidden flex-1 xl:flex items-center justify-end">
            <ul class="p-0 m-0 block xl:flex items-center justify-center nav nav-pills font-bold font-poppins text-20pt flex-nowrap">
                <li class="nav-item"><a class="nav-link text-white inline-flex flex-nowrap items-center" target="_blank" :href="maps"><i class="fas fa-map-marker-alt mr-2 text-darkblue"></i>Locatie</a></li>
                <li class="nav-item"><a class="nav-link text-white inline-flex flex-nowrap whitespace-nowrap items-center" :href="telephone"><i class="fas fa-phone-alt mr-2 text-darkblue"></i>0180 44 60 70</a></li>
            </ul>
        </div>
    </div>
</div>

</template>

<script>

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 100) {
            $(".navigation").addClass("bg-whitesmoke");
            $(".nav-pills li.nav-item a.nav-link").removeClass("text-white");
            $(".navigation .container").addClass("py-0");
            $(".navigation").removeClass("bg-lightblue-opacity");
        } else {
            $(".nav-pills li.nav-item a.nav-link").addClass("text-white");
            $(".navigation").addClass("bg-lightblue-opacity");
            $(".navigation .container").removeClass("py-0");
            $(".navigation").removeClass("bg-whitesmoke");
        }
    });

import * as easings from 'vuetify/lib/services/goto/easing-patterns';

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
    methods: {

    },
    data () {
        return {
            navItems: [
                { title: 'Boeken', link: '#boeken, options'},
                { title: 'Ontdekken', link: '#ontdek, options'},
                { title: 'PB travel', link: '#pbtravel, options'},
                { title: 'Team', link: '#team, options'},
                // { title: 'Nieuwbrief', link: '#nieuwsbrief, options'},
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
