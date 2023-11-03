<!--Start Footer Area-->
<div class="start-footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer-logo-area nav-logo">
                        <a href="index-2.html"><img src="assets/images/white-logo.png" alt="Logo"></a>
                        <p>{!! $global_site->description !!}</p>
                        <div class="social-content">
                            <ul>
                                <li>
                                    <span>Follow Us</span>
                                </li>
                                <li>
                                    <a href="{{ $global_contact->facebook }}" target="_blank"><i
                                            class="ri-facebook-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $global_contact->twitter }}" target="_blank"><i
                                            class="ri-twitter-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $global_contact->youtube }}" target="_blank"><i
                                            class="ri-youtube-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $global_contact->linkedin }}" target="_blank"><i
                                            class="ri-linkedin-line"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer-address-area">
                        <h3>Address Information</h3>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-phone-call-1"></i>
                                </div>
                                <p>Call Us Now</p>
                                <a href="tel:+0408886666">{{ $global_contact->phone }}</a>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-mail"></i>
                                </div>
                                <p>Email Address</p>
                                <a
                                    href="{{ $global_contact->email }}"><span
                                        class="__cf_email__"
                                        data-cfemail="caa2afa6a6a58a83b8a3b9afe4a9a5a7">{{ $global_contact->email }}</span></a>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-place"></i>
                                </div>
                                <p>Address</p>
                                <span>{{ $global_contact->address }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer-useful-links-area pl-20">
                        <h3>Useful Links</h3>
                        <div class="link-list">
                            <ul>
                                <!-- <li><a href="{{ url('event') }}">{{ app()->getLocale() == 'bn' ? 'ইভেন্ট' : 'Event' }}</a></li> -->
                                <li><i class="ri-arrow-right-s-line"></i><a href="{{ url('news') }}">{{ app()->getLocale() == 'bn' ? 'নিউজ' : 'News' }}</a></li>
                                <li><i class="ri-arrow-right-s-line"></i><a href="{{ url('notice') }}">{{ app()->getLocale() == 'bn' ? 'নোটিশ' : 'Notice' }}</a></li>
                                <li><i class="ri-arrow-right-s-line"></i><a href="{{ url('faq') }}">{{ app()->getLocale() == 'bn' ? 'সচারাচর জানতে যাওয়া' : 'FAQ' }}</a></li>
                                <li><i class="ri-arrow-right-s-line"></i><a href="{{ url('login') }}">{{ app()->getLocale() == 'bn' ? 'লগইন' : 'Login' }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer-subscribe-area">
                        <h3>Subscribe To Our Newsletter</h3>
                        <p>Sign up today for hints, tips and the latest product news</p>
                        <div class="subscribe-form">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter your email address"
                                    name="EMAIL" required autocomplete="off">

                                <button class="default-btn active" type="submit">
                                    Subscribe Now <i class="ri-arrow-right-line"></i>
                                </button>

                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Area-->

    <!--Start Copy Right Area-->
    <div class="copy-right-area">
        <div class="container">
            <p>© BemanTech Ltd. 2023
                <!-- <span>Rubel</span> is Proudly Owned by <a href="https://hibotheme.com/" target="_blank">HiboTheme</a> -->
            </p>
        </div>
    </div>
    <!--End Copy Right Area-->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-rocket-line"></i>
        <i class="ri-rocket-line"></i>
    </div>
    <!-- End Go Top Area -->