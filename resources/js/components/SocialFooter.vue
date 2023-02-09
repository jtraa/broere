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
    <div class="bg-white container lg:py-16 flex justify-center" id="socials">
        <div class="md:w-2/5 w-full pb-8 pt-4 lg:pt-0 lg:pb-0">
            <div class="flex md:justify-between justify-around items-center socials">
                <a class="text-darkblue" href="https://www.instagram.com/pbtravel_/?igshid=1qm6vznvgsh9k" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="text-darkblue" href="https://www.facebook.com/PB-Travel-138501419626647/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="text-darkblue" href="https://www.linkedin.com/company/pb-travel/about/" target="_blank"><i class="fab fa-linkedin"></i></a>
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
