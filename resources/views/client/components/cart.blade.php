@extends('client.layouts.app')
@section('title')
    Cart
@endsection
@section('content')
    <!-- page title area start  -->
    <section class="page-title-area page-title-spacing p-relative zindex-1"
        data-background="assets/img/shop/shop-page-title.jpg">
        <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <h3 class="ms-page-title text-center">Cart</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- Products Area Start  -->
    <div class="ms-product-area pt-130 pb-70 p-relative">

        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="ms-product-table-wrap mb-60">
                        <div class="ms-product-table mb-45">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Products Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                <img src="assets/img/shop/product-05.png" alt="product">
                                                <h6 class="ms-product-title">ADJ
                                                    Starburst 6-Colour LED Sphere Lighting Effect</h6>
                                            </a>
                                        </td>

                                        <td class="product-quantity text-center">
                                            <div class="product-quantity d-inline-block">
                                                <div class="product-quantity-form cp-cart-quantity">
                                                    <form action="#">
                                                        <button class="cart-minus"><i class="far fa-minus"></i></button>
                                                        <input class="cart-input" type="text" value="1">
                                                        <button class="cart-plus"><i class="far fa-plus"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$125</td>
                                        <td>
                                            <a class="ms-table-action" href="#"><i class="flaticon-heart"></i></a>

                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                <img src="assets/img/shop/product-01.png" alt="product">
                                                <h6 class="ms-product-title">Denon DJ LC6000 Prime
                                                    Perfor
                                                    mance
                                                    Expansion Controller</h6>
                                            </a>
                                        </td>

                                        <td class="product-quantity text-center">
                                            <div class="product-quantity d-inline-block">
                                                <div class="product-quantity-form cp-cart-quantity">
                                                    <form action="#">
                                                        <button class="cart-minus"><i class="far fa-minus"></i></button>
                                                        <input class="cart-input" type="text" value="1">
                                                        <button class="cart-plus"><i class="far fa-plus"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$899</td>
                                        <td>
                                            <a class="ms-table-action" href="#"><i class="flaticon-heart"></i></a>

                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                <img src="assets/img/shop/product-03.png" alt="product">
                                                <h6 class="ms-product-title">Chauvet B-550 Bubble King
                                                    Bubble
                                                    Machine</h6>
                                            </a>
                                        </td>

                                        <td class="product-quantity text-center">
                                            <div class="product-quantity d-inline-block">
                                                <div class="product-quantity-form cp-cart-quantity">
                                                    <form action="#">
                                                        <button class="cart-minus"><i class="far fa-minus"></i></button>
                                                        <input class="cart-input" type="text" value="1">
                                                        <button class="cart-plus"><i class="far fa-plus"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$360</td>
                                        <td>
                                            <a class="ms-table-action" href="#"><i class="flaticon-heart"></i></a>

                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                <img src="assets/img/shop/product-11.png" alt="product">
                                                <h6 class="ms-product-title">Behringer VMX100USB Profe
                                                    ssional
                                                    2-Channel DJ Mixer</h6>
                                            </a>
                                        </td>

                                        <td class="product-quantity text-center">
                                            <div class="product-quantity d-inline-block">
                                                <div class="product-quantity-form cp-cart-quantity">
                                                    <form action="#">
                                                        <button class="cart-minus"><i class="far fa-minus"></i></button>
                                                        <input class="cart-input" type="text" value="1">
                                                        <button class="cart-plus"><i class="far fa-plus"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$225</td>
                                        <td>
                                            <a class="ms-table-action" href="#"><i class="flaticon-heart"></i></a>

                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Subtotal</th>
                                        <th>04 items</th>
                                        <th>$1650.</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="ms-table-btn text-center">
                            <a class="ms-border-btn" href="#">Continue Shopping</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="ms-product-total mb-60">
                        <h3 class="ms-title3 white-text ms-border2 pb-35 mb-50 pt-5">Order Summary</h3>
                        <div class="ms-product-total-item mb-60">
                            <ul>
                                <li>
                                    <span class="ms-pitem-name">Subtotal (4 items)</span>
                                    <span class="ms-pitem-price">$2,595</span>
                                </li>
                                <li>
                                    <span class="ms-pitem-name">Shipping Fee</span>
                                    <span class="ms-pitem-price">$25</span>
                                </li>
                                <li>
                                    <span class="ms-pitem-name">Vat</span>
                                    <span class="ms-pitem-price">$2.5%</span>
                                </li>
                                <li class="ms-border5">
                                    <span class="ms-pitem-name">Subtotal</span>
                                    <span class="ms-pitem-price">$2,695</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ms-coupon-form">
                            <form>
                                <input type="text" placeholder="Apply Coupon Code">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                        <div class="ms-submit-btn text-center mt-50">
                            <button class="unfill__btn" type="submit">Proceed To Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area End  -->

    <!-- Partner Area Start Here  -->
    <div class="ms-partner-area fix pb-130">
        <div class="container">
            <div class="swiper-container ms-partner-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-01.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-02.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-03.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-04.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-05.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-04.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-01.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-02.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-03.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-04.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-05.png" alt="partner image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner/partner-04.png" alt="partner image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End Here  -->
@endsection
