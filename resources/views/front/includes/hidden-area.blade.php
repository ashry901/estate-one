<div id="Sliding-top">
    <div class="widgets_wrapper">
        <div class="container">
            <div class="one-fourth column">
                <!-- Login form -->
                <aside id="widget_mfn_login-2" class="widget widget_mfn_login">
                    <div class="mfn-login">
                        <h4>
                            {{__('site/header.Login')}} | {{__('site/header.Register')}}
                        </h4>
                        <form name="loginform" id="loginform" action="#" method="post">
                            <p class="login-username">
                                <label for="user_login">
                                    {{__('site/header.Username')}}
                                </label>
                                <input type="text" name="log" id="user_login" class="input" value="" size="20" />
                            </p>
                            <p class="login-password">
                                <label for="user_pass">
                                    {{__('site/header.Password')}}
                                </label>
                                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
                            </p>
                            <p class="login-submit">
                                <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" />
                                <input type="hidden" name="redirect_to" value="#" />
                            </p>
                        </form>
                        <div class="links">
                            <a href="#">{{__('site/header.Register')}}</a><span class="sep">|</span>
                            <a href="#">{{__('site/header.Lost your password?')}}</a>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-10" class="widget widget_text">
                    <div class="textwidget">
                        <p>
                            <span class="big">
                                {{__('site/header.We reply on all questions within')}}
                            </span>
                        </p><span class="themecolor flv_header_number">24 h</span>
                        <div class="hr_dots flv_dots">
                            <span></span><span></span><span></span>
                        </div>
                        <p class="flv_center">
                            <span class="flv_grey">
                                {{__('site/header.We offer support for our customers')}}
                            </span>
                            <br>
                            <b>
                                <i class="icon-clock"></i>
                                Mon - Fri 8:00am - 6:00pm
                                <span class="tooltip" data-tooltip="we are located in Europe" >
                                    (GMT +1)</span>
                            </b>
                        </p>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-11" class="widget widget_text">
                    <div class="textwidget">
                        <h5 class="flv_margin_b_5">
                            <i class="icon-mail-line"></i>
                            {{__('site/header.Our Address')}}:
                        </h5>
                        <p class="flv_margin_l_26">
                            <strong>Ashry</strong>
                            <br> Level 13, 2 Elizabeth St,
                            <br> Melbourne, Victoria 3000 Egypt
                        </p>
                        <h5 class="flv_margin_b_5">
                            <i class="icon-phone"></i>
                            {{__('site/header.Have Any Questions?')}}
                        </h5>
                        <p class="flv_margin_l_26">
                            <a href="#">eastaty@our.com</a>
                        </p>
                        <h5 class="flv_margin_b_5">
                            <i class="icon-comment-line"></i>
                            Call us:
                        </h5>
                        <p class="flv_margin_l_26">
                            <a href="#">+2 (0) 1 2180 345858</a>
                        </p>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-12" class="widget widget_text">
                    <div class="textwidget">
                        <img src="{{asset('ashry/front/images/logo/thumbs-uppng.png')}}"
                             alt="..." width="70">
                        <br><br><br><br>
                        <p>
                            <span class="big">
                                {{__('site/header.We love who we are and ')}}
                                {{__('site/header.we are very proud to be ')}}
                                {{__('site/header.the part of your business')}}
                            </span>
                        </p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <a href="#" class="sliding-top-control">
        <span><i class="plus icon-down-open-mini"></i>
            <i class="minus icon-up-open-mini"></i>
        </span>
    </a>
</div>
