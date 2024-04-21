@extends('client.layouts.app')
@section('title')
  Signup
@endsection
@section('content')
        <!-- page title area start  -->
        <section class="page-title-area page-title-spacing p-relative zindex-1 "
        data-background="client/img/bg/work-bg.jpg">
        <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <h3 class="ms-page-title text-center">Sign up</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- login Area Start Here  -->
    <section class="ms-login-area pb-50 pt-130">
        <div class="container">
            <div class="ms-maxw-510 mx-auto">
                <div class="ms-login-wrap text-center ms-login-space ms-bg-2">
                    <h3 class="ms-title4 mb-50">Create Your account</h3>
                    <form>
                        <div class="ms-input2-box mb-25">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="ms-input2-box mb-25">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="ms-input2-box mb-25">
                            <input type="text" placeholder="Phone no">
                        </div>
                        <div class="ms-input2-box mb-50">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="ms-input2-box mb-50">
                            <input type="password" placeholder="Confirm Password">
                        </div>
                        <div class="ms-submit-btn mb-40">
                            <button class="unfill__btn d-block w-100" type="submit">Create
                                Account</button>
                        </div>
                        <div class="ms-divided-btn mb-45">
                            <span>or</span>
                        </div>
                        <div class="ms-fb mb-40">
                            <button class="ms-fb-btn" type="submit"><i class="fa-brands fa-facebook"></i>
                                Log in with facebook</button>
                        </div>
                        <div class="ms-not-account mb-35">
                            <p>Already have an account? <a href="login.html">Log
                                    in</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End Here  -->

    <!-- Partner Area Start Here  -->
    <div class="ms-partner-area fix pt-80 pb-130">
        <div class="container">
            <div class="swiper-container ms-partner-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-01.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-02.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-03.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-04.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-05.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-04.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-01.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-02.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-03.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-04.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-05.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="client/img/partner/partner-04.png" alt="partner image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End Here  -->
@endsection