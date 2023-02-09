<style>
    #rocketmeluncur {
        position: fixed;
        bottom: 20px;
        z-index: 7;
        display: none;
        visibility: hidden;
        width: 52px;
        height: 96px;
        right: 25px;
        /*background: url(https://3.bp.blogspot.com/-GZOBULN1Q4s/VbNxQrf37EI/AAAAAAAAAPk/rak337seJ70/s1600/Ask.png) no-repeat 50% 0;*/
        background: url("../../images/plane-up-solid.svg") no-repeat 50% 0;
        opacity: 0;
        transition: .25s opacity;
        -webkit-transition: visibility .6s cubic-bezier(0.6, 0.04, 0.98, 0.335), opacity .6s cubic-bezier(0.6, 0.04, 0.98, 0.335), -webkit-transform .6s cubic-bezier(0.6, 0.04, 0.98, 0.335);
        -moz-transition: visibility .6s cubic-bezier(0.6, 0.04, 0.98, 0.335), opacity .6s cubic-bezier(0.6, 0.04, 0.98, 0.335), -moz-transform .6s cubic-bezier(0.6, 0.04, 0.98, 0.335);
        transition: visibility .6s cubic-bezier(0.6, 0.04, 0.98, 0.335), opacity .6s cubic-bezier(0.6, 0.04, 0.98, 0.335), transform .6s cubic-bezier(0.6, 0.04, 0.98, 0.335);
    }

    #rocketmeluncur i {
        display: block;
        height: 96px;
        /*background: url(https://1.bp.blogspot.com/-UR9I7YEuEUY/VXIJn8MrBPI/AAAAAAAAKRE/qZObHBd5zIo/s1600/rocket.png) no-repeat 50% -48px;*/
        background: url("../../images/plane-up-solid-2.svg") no-repeat 50% -62px;
        opacity: .5;
        -webkit-transition: -webkit-transform .2s;
        -moz-transition: -moz-transform .2s;
        transition: transform .2s;
        -webkit-transform-origin: 50% 0;
        -moz-transform-origin: 50% 0;
        transform-origin: 50% 0
    }

    #rocketmeluncur:hover {
        background-position: 50% -62px;
    }

    #rocketmeluncur:hover i {
        background-position: 100% 0;
        -webkit-animation: flaming .7s infinite;
        -moz-animation: flaming .7s infinite;
        animation: flaming .7s infinite
    }

    #rocketmeluncur.showrocket {
        visibility: visible;
        opacity: 1
    }

    #rocketmeluncur.launchrocket {
        background-position: 50% -62px;
        opacity: 0;
        -webkit-transform: translateY(-400px);
        -moz-transform: translateY(-400px);
        -ms-transform: translateY(-400px);
        transform: translateY(-400px);
        pointer-events: none
    }

    #rocketmeluncur.launchrocket i {
        background-position: 50% -62px;
        -webkit-transform: scale(1.4, 3.2);
        -moz-transform: scale(1.4, 3.2);
        transform: scale(1.4, 3.2)
    }
</style>

<template>
    <div class="hi">
        <a href="#" @click="rocketMe()" id="rocketmeluncur" class="showrocket" ><i></i></a>
    </div>
</template>

<script>
    export default {
        name: "RocketLauncher",
        methods: {
            rocketMe() {
                console.log('clicked');
                jQuery("html, body").animate({scrollTop: '50px', display:'none'},{
                    duration: 1500,
                    easing: "linear",
                });
            }
        }
    }

    jQuery(window).scroll(function(){
        if(jQuery(window).scrollTop()<50){
            jQuery('.showrocket').toggleClass('launchrocket');
            jQuery('#rocketmeluncur').slideUp(500);
        }else{
            jQuery('#rocketmeluncur').slideDown(500);
        }
        var ftrocketmeluncur = jQuery("#ft")[0] ? jQuery("#ft")[0] : jQuery(document.body)[0];
        var scrolltoprocketmeluncur = $('rocketmeluncur');
        var viewPortHeightrocketmeluncur = parseInt(document.documentElement.clientHeight);
        var scrollHeightrocketmeluncur = parseInt(document.body.getBoundingClientRect().top);
        var basewrocketmeluncur = parseInt(ftrocketmeluncur.clientWidth);
        var swrocketmeluncur = scrolltoprocketmeluncur.clientWidth;
        if (basewrocketmeluncur < 1000) {
            var leftrocketmeluncur = parseInt(fetchOffset(ftrocketmeluncur)['left']);
            leftrocketmeluncur = leftrocketmeluncur < swrocketmeluncur ? leftrocketmeluncur * 2 - swrocketmeluncur : leftrocketmeluncur;
            scrolltoprocketmeluncur.style.right = ( basewrocketmeluncur + leftrocketmeluncur ) + 'px';
        } else {
            scrolltoprocketmeluncur.css("left", "auto");
            scrolltoprocketmeluncur.css("right", "10px");
        }
    });
</script>

<style scoped>

</style>
