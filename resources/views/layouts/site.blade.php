<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->

<html class="no-js">

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('ashry/front/images/favicon.ico')}}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/front/plugins/rs-plugin/fonts/font-awesome/css/font-awesome.min.css')}}">

    <!-- CSS -->
    <link rel='stylesheet' href='{{asset('ashry/front/css/global.css')}}'>
    <link rel='stylesheet' href='{{asset('ashry/front/css/structure.css')}}'>
    <link rel='stylesheet' id='style-static' href='{{asset('ashry/front/css/be_style.css')}}'>
    <link rel='stylesheet' href='{{asset('ashry/front/css/custom.css')}}'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('ashry/front/plugins/rs-plugin/css/settings.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('ashry/front/plugins/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/front/plugins/rs-plugin/css/navigation.css')}}">

</head>

{{--<body class="color-blue layout-full-width header-classic sticky-header sticky-white">--}}
<body class="page-parent
            template-slider
            color-blue
            layout-full-width
            header-classic
            subheader-transparent
            sticky-header
            sticky-white
            nice-scroll-on
            subheader-title-left">

<!-- Hidden Top Area hidden -->
@include('front.includes.hidden-area')

<!-- Main Theme Wrapper -->
<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
        <!-- Header -->
        <header id="Header">
            <!-- Header Top -  Info Area -->
            @include('front.includes.info-area')

            <!-- Header -  Logo and Menu area -->
            @include('front.includes.header')

            <!-- Revolution slider area-->
            @yield('slider')
        </header>
    </div>
    <!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    @include('front.includes.footer')

</div>

<!-- Popup contact form -->
@include('front.includes.popup-contact')

<!-- JS -->
<script src="{{asset('ashry/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('ashry/front/js/mfn.menu.js')}}"></script>
<script src="{{asset('ashry/front/js/jquery.plugins.js')}}"></script>
<script src="{{asset('ashry/front/js/jquery.jplayer.min.js')}}"></script>
<script src="{{asset('ashry/front/js/animations/animations.js')}}"></script>
<script src="{{asset('ashry/front/js/email.js')}}"></script>
<script src="{{asset('ashry/front/js/scripts.js')}}"></script>

<script src="{{asset('ashry/front/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('ashry/front/plugins/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>

<script>
    var tpj = jQuery;
    var revapi2;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_2_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_2_1");
        } else {
            revapi2 = tpj("#rev_slider_2_1").show().revolution({
                sliderType: "carousel",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        style: "erinyen",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap"> <div class="tp-arr-imgholder"></div> <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder"></span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    thumbnails: {
                        style: "gyges",
                        enable: true,
                        width: 60,
                        height: 60,
                        min_width: 60,
                        wrapper_padding: 0,
                        wrapper_color: "transparent",
                        wrapper_opacity: "1",
                        tmp: '<span class="tp-thumb-img-wrap"> <span class="tp-thumb-image"></span></span>',
                        visibleAmount: 5,
                        hide_onmobile: true,
                        hide_under: 800,
                        hide_onleave: false,
                        direction: "horizontal",
                        span: false,
                        position: "inner",
                        space: 5,
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 20
                    }
                },
                carousel: {
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: 0,
                    stretch: "off"
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [600, 600, 500, 400],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                shadow: 5,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "on",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>

{{--<script>--}}
{{--    var tpj = jQuery;--}}

{{--    var revapi16;--}}
{{--    tpj(document).ready(function() {--}}
{{--        if (tpj("#rev_slider_16_1").revolution == undefined) {--}}
{{--            revslider_showDoubleJqueryError("#rev_slider_16_1");--}}
{{--        } else {--}}
{{--            revapi16 = tpj("#rev_slider_16_1").show().revolution({--}}
{{--                sliderType: "carousel",--}}
{{--                sliderLayout: "fullwidth",--}}
{{--                dottedOverlay: "none",--}}
{{--                delay: 9000,--}}
{{--                navigation: {--}}
{{--                    keyboardNavigation: "off",--}}
{{--                    keyboard_direction: "horizontal",--}}
{{--                    mouseScrollNavigation: "off",--}}
{{--                    onHoverStop: "off",--}}
{{--                    tabs: {--}}
{{--                        style: "zeus",--}}
{{--                        enable: true,--}}
{{--                        width: 100,--}}
{{--                        height: 30,--}}
{{--                        min_width: 100,--}}
{{--                        wrapper_padding: 0,--}}
{{--                        wrapper_color: "transparent",--}}
{{--                        wrapper_opacity: "0",--}}
{{--                        //tmp: '<span class="tp-tab-title"></span>',--}}
{{--                        visibleAmount: 3,--}}
{{--                        hide_onmobile: true,--}}
{{--                        hide_under: 480,--}}
{{--                        hide_onleave: false,--}}
{{--                        hide_delay: 200,--}}
{{--                        direction: "horizontal",--}}
{{--                        span: true,--}}
{{--                        position: "inner",--}}
{{--                        space: 1,--}}
{{--                        h_align: "center",--}}
{{--                        v_align: "top",--}}
{{--                        h_offset: 0,--}}
{{--                        v_offset: 30--}}
{{--                    }--}}
{{--                },--}}
{{--                carousel: {--}}
{{--                    horizontal_align: "center",--}}
{{--                    vertical_align: "center",--}}
{{--                    fadeout: "on",--}}
{{--                    vary_fade: "on",--}}
{{--                    maxVisibleItems: 3,--}}
{{--                    infinity: "on",--}}
{{--                    space: 0,--}}
{{--                    stretch: "off"--}}
{{--                },--}}
{{--                responsiveLevels: [1240, 1024, 778, 480],--}}
{{--                gridwidth: [800, 640, 480, 480],--}}
{{--                gridheight: [720, 720, 480, 360],--}}
{{--                lazyType: "none",--}}
{{--                parallax: {--}}
{{--                    type: "scroll",--}}
{{--                    origo: "enterpoint",--}}
{{--                    speed: 400,--}}
{{--                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],--}}
{{--                },--}}
{{--                shadow: 0,--}}
{{--                spinner: "off",--}}
{{--                stopLoop: "on",--}}
{{--                stopAfterLoops: 0,--}}
{{--                stopAtSlide: 1,--}}
{{--                shuffle: "off",--}}
{{--                autoHeight: "off",--}}
{{--                disableProgressBar: "on",--}}
{{--                hideThumbsOnMobile: "off",--}}
{{--                hideSliderAtLimit: 0,--}}
{{--                hideCaptionAtLimit: 0,--}}
{{--                hideAllCaptionAtLilmit: 0,--}}
{{--                debugMode: false,--}}
{{--                fallbacks: {--}}
{{--                    simplifyAll: "off",--}}
{{--                    nextSlideOnWindowFocus: "off",--}}
{{--                    disableFocusListener: false,--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    }); /*ready*/--}}
{{--</script>--}}

{{--<script>--}}
{{--    var tpj = jQuery;--}}
{{--    tpj.noConflict();--}}
{{--    var revapi34;--}}
{{--    tpj(document).ready(function() {--}}
{{--        if (tpj("#rev_slider_34_2").revolution == undefined) {--}}
{{--            revslider_showDoubleJqueryError("#rev_slider_34_2");--}}
{{--        } else {--}}
{{--            revapi34 = tpj("#rev_slider_34_2").show().revolution({--}}
{{--                sliderType: "standard",--}}

{{--                sliderLayout: "auto",--}}
{{--                dottedOverlay: "none",--}}
{{--                delay: 7000,--}}
{{--                navigation: {--}}
{{--                    keyboardNavigation: "off",--}}
{{--                    keyboard_direction: "horizontal",--}}
{{--                    mouseScrollNavigation: "off",--}}
{{--                    onHoverStop: "on",--}}
{{--                    touch: {--}}
{{--                        touchenabled: "on",--}}
{{--                        swipe_threshold: 0.7,--}}
{{--                        swipe_min_touches: 1,--}}
{{--                        swipe_direction: "horizontal",--}}
{{--                        drag_block_vertical: false--}}
{{--                    },--}}
{{--                    arrows: {--}}
{{--                        style: "uranus",--}}
{{--                        enable: true,--}}
{{--                        hide_onmobile: false,--}}
{{--                        hide_onleave: false,--}}
{{--                        tmp: '',--}}
{{--                        left: {--}}
{{--                            h_align: "right",--}}
{{--                            v_align: "bottom",--}}
{{--                            h_offset: 90,--}}
{{--                            v_offset: 40--}}
{{--                        },--}}
{{--                        right: {--}}
{{--                            h_align: "right",--}}
{{--                            v_align: "bottom",--}}
{{--                            h_offset: 40,--}}
{{--                            v_offset: 40--}}
{{--                        }--}}
{{--                    },--}}
{{--                    thumbnails: {--}}
{{--                        style: "hesperiden",--}}
{{--                        enable: true,--}}
{{--                        width: 200,--}}
{{--                        height: 80,--}}
{{--                        min_width: 100,--}}
{{--                        wrapper_padding: 5,--}}
{{--                        wrapper_color: "transparent",--}}
{{--                        wrapper_opacity: "1",--}}
{{--                        tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">Slide</span>',--}}
{{--                        visibleAmount: 3,--}}
{{--                        hide_onmobile: true,--}}
{{--                        hide_under: 0,--}}
{{--                        hide_onleave: false,--}}
{{--                        direction: "horizontal",--}}
{{--                        span: false,--}}
{{--                        position: "inner",--}}
{{--                        space: 5,--}}
{{--                        h_align: "left",--}}
{{--                        v_align: "bottom",--}}
{{--                        h_offset: 40,--}}
{{--                        v_offset: 40--}}
{{--                    }--}}
{{--                },--}}
{{--                gridwidth: 1180,--}}
{{--                gridheight: 750,--}}
{{--                lazyType: "none",--}}
{{--                shadow: 0,--}}
{{--                spinner: "spinner3",--}}
{{--                stopLoop: "off",--}}
{{--                stopAfterLoops: -1,--}}
{{--                stopAtSlide: -1,--}}
{{--                shuffle: "off",--}}
{{--                autoHeight: "off",--}}
{{--                disableProgressBar: "on",--}}
{{--                hideThumbsOnMobile: "on",--}}
{{--                hideSliderAtLimit: 0,--}}
{{--                hideCaptionAtLimit: 0,--}}
{{--                hideAllCaptionAtLilmit: 0,--}}
{{--                startWithSlide: 0,--}}
{{--                debugMode: false,--}}
{{--                fallbacks: {--}}
{{--                    simplifyAll: "on",--}}
{{--                    nextSlideOnWindowFocus: "off",--}}
{{--                    disableFocusListener: "off",--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}


<script>
    jQuery(window).load(function() {
        var retina = window.devicePixelRatio > 1 ? true : false;
        if (retina) {
            var retinaEl = jQuery("#logo img");
            var retinaLogoW = retinaEl.width();
            var retinaLogoH = retinaEl.height();
            //retinaEl.attr("src", "images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
        }
    });
</script>

</body>

</html>

