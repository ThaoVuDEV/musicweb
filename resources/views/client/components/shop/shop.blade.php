@extends('client.layouts.app')
@section('title')
    Shop
@endsection
@section('content')
     <!-- page title area start  -->
     <section class="page-title-area page-title-spacing p-relative zindex-1"
     data-background="assets/img/shop/shop-page-title.jpg">
     <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xxl-11">
                 <h3 class="ms-page-title text-center">Shop</h3>
             </div>
         </div>
     </div>
 </section>
 <!-- page title area end  -->

 <!-- Products Area Start  -->
 <div class="ms-product-area pt-130 pb-110 p-relative">

     <div class="container">
         <div class="ms-border2 pb-10 mb-65">
             <div class="row">
                 <div class="col-md-6">
                     <div class="ms-genres-filter ms-genres-select mb-10">
                         <span class="ms-genres-text">Shop by categories :</span>
                         <select class="ms-nice-select float-none">
                             <option>DJ & Lighting</option>
                             <option>Music</option>
                             <option>DJ Box</option>
                             <option>Trending</option>
                         </select>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="ms-genres-filter ms-genres-border ms-genres-select text-md-end mb-10">
                         <span class="ms-genres-text mr-15">Short by :</span>
                         <select class="ms-nice-select float-none">
                             <option>Featured</option>
                             <option>Latest</option>
                             <option>Best Selling</option>
                             <option>Trending</option>
                         </select>
                     </div>
                 </div>
             </div>
         </div>
         <div class="ms-product-wrap ms-product-grid mb-65">
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-01.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Denon DJ LC6000 Prime
                         Perfor
                         mance Expansion Controller</a></h3>
                 <span class="ms-product-price ms-text2">$899.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <span class="ms-discount">25% off</span>
                     <a href="shop-details.html"><img src="assets/img/shop/product-02.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Prime Go Rechargeable
                         DJ
                         Console</a></h3>
                 <span class="ms-product-price ms-text2">$1,299.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-03.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Chauvet B-550 Bubble
                         King
                         Bubble Machine</a></h3>
                 <span class="ms-product-price ms-text2">$1999.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-04.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Numark Scratch
                         2-Channel Dj
                         Mixer for Serato Dj Pro</a></h3>
                 <span class="ms-product-price ms-text2">$1550.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-05.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">ADJ Jolt 300
                         High-Powered
                         RGBW Strobe Fixture</a></h3>
                 <span class="ms-product-price ms-text2">$299.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-06.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">ADJ Mirror Ball Motor
                         Prime
                         Perfor mance Expansion Light</a></h3>
                 <span class="ms-product-price ms-text2">$340.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-07.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Denon DJ LC6000 Prime
                         Perfor
                         mance Expansion Controller</a></h3>
                 <span class="ms-product-price ms-text2">$440.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-02.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">ADJ Dotz TPar LED
                         Light Fixture
                         Perfor mance Controller</a></h3>
                 <span class="ms-product-price ms-text2">$550.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-09.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Mono EFX FlyBy
                         Modular Back
                         pack with Breakaway</a></h3>
                 <span class="ms-product-price ms-text2">$349.99</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-10.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Audio-Technica
                         AT-LP60XBT
                         Fully Automatic Wireless Belty</a></h3>
                 <span class="ms-product-price ms-text2">$899.00</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-11.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">Behringer VMX100USB
                         Profe
                         ssional 2-Channel DJ Mixer</a></h3>
                 <span class="ms-product-price ms-text2">$154.99</span>
             </div>
             <div class="ms-product-item">
                 <div class="ms-product-img p-relative mb-20">
                     <a href="shop-details.html"><img src="assets/img/shop/product-12.png"
                             alt="product img"></a>
                     <div class="ms-product-links">
                         <ul>
                             <li><a href="#" class="ms-model-show"><i class="flaticon-view"></i></a>
                             </li>
                             <li><a href="cart.html"><i class="flaticon-trolley-cart"></i></a></li>
                             <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h3 class="ms-product-title mb-20"><a href="shop-details.html">ADJ Starburst
                         6-Colour LED
                         Sphere Lighting Effect</a></h3>
                 <span class="ms-product-price ms-text2">$164.99</span>
             </div>
         </div>
         <div class="basic-pagination ms-border5">
             <nav>
                 <ul>
                     <li>
                         <a href="#">
                             <i class="fas fa-long-arrow-left"></i>
                         </a>
                     </li>
                     <li>
                         <a href="#">01</a>
                     </li>
                     <li>
                         <span class="current">02</span>
                     </li>
                     <li>
                         <a href="#">03</a>
                     </li>
                     <li>
                         <a href="#">...</a>
                     </li>
                     <li>
                         <a href="#">
                             <i class="fas fa-long-arrow-right"></i>
                         </a>
                     </li>
                 </ul>
             </nav>
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