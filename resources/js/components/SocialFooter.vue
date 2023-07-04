<style>

    .socials i {
        font-size: 6em;
        text-decoration: none;
    }

    .socials a{
        opacity: 0.9;
        transition: .25s opacity;
    }
    .socials a:hover{
        opacity: 1;
    }

</style>

<template>
    <div class="bg-yellow lg:py-16" id="socials">
        <div class="container flex justify-center">
            <div class="lg:w-2/5 md:w-1/2 w-full pb-8 pt-4 lg:pt-0 lg:pb-0">
                <div class="flex md:justify-between justify-around items-center socials">
                    <a class="text-white" href="https://www.instagram.com/broere.vliegpassages/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="text-white" href="https://www.facebook.com/Broerevliegpassage/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white" href="https://www.linkedin.com/company/broere-vliegpassages-bv/" target="_blank"><i class="fab fa-linkedin"></i></a>
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
