@extends('layouts.site')

@section('title', 'home')

@section('style')



@endsection

@section('slider')
    @include('front.includes.slider')
@endsection

@section('content')

<div class="section mcb-section full-width" style="padding-top:120px; padding-bottom:70px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center">
                        <h2>Selected houses</h2>
                        <hr class="no_line" style="margin:0 auto 30px">
                        <div style="width: 90px; height: 3px; background: #1d88ed; margin: 0 auto;"></div>
                    </div>
                </div>
                <div class="column mcb-column one column_divider">
                    <hr class="no_line" style="margin:0 auto 80px">
                </div>
                <div class="column mcb-column one column_offer">
                    <div class="offer">
                        <ul class="offer_ul">
                            <li class="offer_li">
                                <div class="image_wrapper">
                                    <img src="{{asset('ashry/front/images/slider/pao-de-acucar.jpg')}}"
                                         class="scale-with-grid wp-post-image"
                                         alt="..." width="100%" height="40%">
                                </div>
                                <div class="desc_wrapper align_left no-link">
                                    <div class="title">
                                        <h3>Curabitur massa</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="big">
                                            Vitae adipiscing turpis. Aenean ligula nibh,
                                            mo lest ie id viverra a, dapibus at dolor.
                                            In iaculis viverra ne que, ac eleifend ante lobortis.
                                        </p>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <h6>Price: $1,920 / month</h6>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <ul class="list_check">
                                            <li>
                                                Suspendisse a pellentesque dui, non felis.
                                            </li>
                                            <li>
                                                Quisque lorem tortor fringilla sed.
                                            </li>
                                        </ul>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <a class="button button_left button_size_2 button_js" href="#">
                                            <span class="button_icon"><i class="icon-doc-text"></i></span>
                                            <span class="button_label">Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="offer_li">
                                <div class="image_wrapper">
                                    <img src="{{asset('ashry/front/images/slider/salvador.jpg')}}"
                                         class="scale-with-grid wp-post-image"
                                         alt="..." width="100%" height="40%">
                                </div>
                                <div class="desc_wrapper align_left no-link">
                                    <div class="title">
                                        <h3>Quisque lorem</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="big">
                                            Vitae adipiscing turpis. Aenean ligula nibh,
                                            mo lest ie id viverra a, dapibus at dolor.
                                            In iaculis viverra ne que, ac eleifend ante lobortis.
                                        </p>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <h6>Price: $2,130 / month</h6>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <ul class="list_check">
                                            <li>
                                                Suspendisse a pellentesque dui, non felis.
                                            </li>
                                            <li>
                                                Quisque lorem tortor fringilla sed.
                                            </li>
                                        </ul>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <a class="button button_left button_size_2 button_js" href="#">
                                            <span class="button_icon"><i class="icon-doc-text"></i></span>
                                            <span class="button_label">Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="offer_li">
                                <div class="image_wrapper">
                                    <img src="{{asset('ashry/front/images/slider/salvador.jpg')}}"
                                         class="scale-with-grid wp-post-image"
                                         alt="..." width="100%" height="40%">
                                </div>
                                <div class="desc_wrapper align_left no-link">
                                    <div class="title">
                                        <h3>Aliquam erat</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="big">
                                            Vitae adipiscing turpis. Aenean ligula nibh,
                                            mo lest ie id viverra a, dapibus at dolor.
                                            In iaculis viverra ne que, ac eleifend ante lobortis.
                                        </p>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <h6>Price: $2,970 / month</h6>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <ul class="list_check">
                                            <li>
                                                Suspendisse a pellentesque dui, non felis.
                                            </li>
                                            <li>
                                                Quisque lorem tortor fringilla sed.
                                            </li>
                                        </ul>
                                        <hr class="no_line" style="margin:0 auto 10px">
                                        <a class="button button_left button_size_2 button_js" href="#">
                                            <span class="button_icon"><i class="icon-doc-text"></i></span>
                                            <span class="button_label">Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <div class="slider_pagination">
                            <span class="current">1</span> / <span class="count">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section mcb-section" style="padding-top:0px; padding-bottom:130px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one-second valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        <h2>Twelve years of
                            <br> experience
                        </h2>
                        <hr class="no_line" style="margin:0 auto 30px">
                        <div style="width: 90px; height: 3px; background: #1d88ed;"></div>
                        <hr class="no_line" style="margin:0 auto 30px">
                        <h4>
                            Sed ultrices nisl velit,
                            eu ornare est ullamcorper a.
                            Nunc quis nibh magna
                        </h4>
                    </div>
                </div>
                <div class="column mcb-column one column_button">
                    <a class="button button_size_2 button_theme button_js"
                       href="#">
                        <span class="button_label">Read more about us</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 2%">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid"
                                 src="{{asset('ashry/front/content/estate2/images/home_estate2_pic4.png')}}"
                                 alt="...">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center">
                        <h5>Lorem ipsum</h5>
                        <p>
                            Nulla mauris dolor, gravida a varius blandit, auctor
                        </p>
                    </div>
                </div>
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid"
                                 src="{{asset('ashry/front/content/estate2/images/home_estate2_pic6.png')}}"
                                 alt="...">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center">
                        <h5>Mauris rhoncus</h5>
                        <p>
                            Nulla mauris dolor, gravida a varius blandit, auctor
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 2%">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid"
                                 src="{{asset('ashry/front/content/estate2/images/home_estate2_pic5.png')}}"
                                 alt="...">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center">
                        <h5>Aliquam erat</h5>
                        <p>
                            Nulla mauris dolor, gravida a varius blandit, auctor
                        </p>
                    </div>
                </div>
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid"
                                 src="{{asset('ashry/front/content/estate2/images/home_estate2_pic7.png')}}"
                                 alt="...">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center">
                        <h5>Nullam lacinia</h5>
                        <p>
                            Nulla mauris dolor, gravida a varius blandit, auctor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section mcb-section"
     style="padding-top:120px; padding-bottom:70px; background-color:#121a21;
     background-image:url('{{('ashry/front/content/estate2/images/home_estate2_sectionbg1.png')}}');
     background-repeat:no-repeat; background-position:center bottom">


    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 5% 0 0">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        <h2 style="color:#fff">The best estate agent guide</h2>
                        <hr class="no_line" style="margin:0 auto 30px">
                        <div style="width: 90px; height: 3px; background: #1d88ed;"></div>
                        <hr class="no_line" style="margin:0 auto 30px">
                        <h4 style="color:#fff">Do you need help? Get in touch.</h4>
                        <hr class="no_line" style="margin:0 auto 30px">
                        <a class="button button_size_2 button_theme button_js"
                           href="#">
                            <span class="button_label">Our agents</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-second valign-top move-up clearfix"
             style="margin-top:-180px" data-mobile="no-up">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid"
                                 src="{{asset('ashry/front/content/estate2/images/home_estate2_pic8.jpg')}}"
                                 alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section"
     style="padding-top:0px; padding-bottom:0px; background-color:#d6c5b2">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_call_to_action">
                <div class="call_to_action">
                    <!-- Animated area -->
                    <div class="animate" data-anim-type="zoomIn">
                        <div class="call_to_action_wrapper">
                            <div class="call_left">
                                <h2>How do we work</h2>
                                <h4>Watch the movie</h4>
                            </div>
                            <div class="call_center">
                                <a href="https://www.youtube.com/watch?v=lFgDmj1vsJE" rel="prettyphoto"><span class="icon_wrapper"><i class="icon-googleplay"></i></span></a>
                            </div>
                            <div class="call_right">
                                <div class="desc">
                                    <h5 style="color:#fff">
                                        Ut ultricies imperdiet sodales. Aliquam fringilla
                                        aliquam ex sit amet elementum. Proin bibendum.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section flv_sections_6" id="start">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Third (1/3) Column -->
            <div class="column one-third column_icon_box">
                <!-- Animated area -->
                <div class="animate" data-anim-type="fadeInLeftLarge">
                    <div class="icon_box icon_position_top has_border">
                        <a class="scroll" href="#thematic-websites">
                            <div class="icon_wrapper">
                                <div class="icon">
                                    <i class="icon-lightbulb-line"></i>
                                </div>
                            </div>
                            <div class="desc_wrapper">
                                <h4> 240+ pre-made layouts</h4>
                                <div class="desc">
                                    We created awesome <span class="tooltip" data-tooltip="Click to scroll down"> 240+ pre-made layouts</span> .
                                    <br> Choose one of them and use for own business site.
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third column_icon_box">
                <!-- Animated area -->
                <div class="animate" data-anim-type="zoomIn">
                    <div class="icon_box icon_position_top has_border">
                        <a  href="#">
                            <div class="icon_wrapper">
                                <div class="icon">
                                    <i class="icon-beaker-line"></i>
                                </div>
                            </div>
                            <div class="desc_wrapper">
                                <h4>Fully customizable</h4>
                                <div class="desc">
                                    Don`t waste your time and within minutes create
                                    <br> your website easily. You will love it!
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third column_icon_box">
                <!-- Animated area -->
                <div class="animate" data-anim-type="fadeInRightLarge">
                    <div class="icon_box icon_position_top no_border">
                        <a  href="http://support.BeantownThemes.com" target="_blank">
                            <div class="icon_wrapper">
                                <div class="icon">
                                    <i class="icon-comment-line"></i>
                                </div>
                            </div>
                            <div class="desc_wrapper">
                                <h4>Free support &amp; updates</h4>
                                <div class="desc">
                                    This theme is always updated on time.
                                    <br> We also offer <span class="tooltip" data-tooltip="For support please visit theme forum">free support</span> for all our themes!
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section flv_sections_4">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- Page Title-->
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <!-- Animated area -->
                    <div class="animate" data-anim-type="zoomInLeftLarge">
                        <span class="icon_top"><i class="icon-map"></i></span>
                        <h2 class="title">Guide for shortcodes</h2>
                        <div class="inside">
                            <span class="big">
                                See quick guide about some of included
                                shortcodes and muffin builder items.
                                We got over 200 in total.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    <span class="big">Building websites was never so powerful and easy!
                        Over 200 included shortcodes and items gives you possibility to build
                    </span>
                </div>
            </div>
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_column">
                <div class="column_attr animate" data-anim-type="zoomIn">
                    <div class="aligncenter">
                        <img src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                             alt="...">
                    </div>
                </div>
            </div>
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_column">
                <div class="column_attr animate" data-anim-type="zoomIn">
                    <div class="aligncenter">
                        <img src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                             alt="...">
                    </div>
                </div>
            </div>
            <!-- One full width row-->
            <div class="column one column_slider">
                <!-- Slider Content -->
                <div class="content_slider ">
                    <ul class="content_slider_ul">
                        <li class="content_slider_li_1">
                            <a href="#">
                                <img width="890" height="470"
                                     src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                                     class="scale-with-grid wp-post-image"
                                     alt="..." width="50%"/>
                            </a>
                        </li>
                        <li class="content_slider_li_2">
                            <a href="#">
                                <img width="890" height="470"
                                     src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                                     class="scale-with-grid wp-post-image"
                                     alt="..." />
                            </a>
                        </li>
                        <li class="content_slider_li_3">
                            <a href="#">
                                <img width="890" height="470"
                                     src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                                     class="scale-with-grid wp-post-image"
                                     alt="..." />
                            </a>
                        </li>
                        <li class="content_slider_li_4">
                            <a href="#">
                                <img width="890" height="470"
                                     src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                                     class="scale-with-grid wp-post-image"
                                     alt="..." />
                            </a>
                        </li>
                        <li class="content_slider_li_5">
                            <a href="#">
                                <img width="890" height="470"
                                     src="{{asset('ashry/front/images/slider/home_hotel2_slider3.jpg')}}"
                                     class="scale-with-grid wp-post-image"
                                     alt="..." />
                            </a>
                        </li>
                    </ul>
                    <a class="button button_js slider_prev" href="#">
                        <span class="button_icon">
                            <i class="icon-left-open-big"></i>
                        </span>
                    </a>
                    <a class="button button_js slider_next" href="#">
                        <span class="button_icon">
                            <i class="icon-right-open-big"></i>
                        </span>
                    </a>
                    <div class="slider_pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')



@endsection
