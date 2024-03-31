@extends('client.layouts.app')
@section('title')
    Shop Detail
@endsection
@section('contnet')
    <!-- page title area start  -->
    <section class="page-title-area page-title-spacing p-relative zindex-1"
    data-background="assets/img/shop/shop-page-title.jpg">
    <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-11">
                <h3 class="ms-page-title text-center">Denon DJ LC6000 Prime...</h3>
            </div>
        </div>
    </div>
</section>
<!-- page title area end  -->

<!-- Products Area Start  -->
<div class="ms-product-area pt-130 pb-110 p-relative">

    <div class="container">
        <div class="row mb-30">
            <div class="col-lg-6">
                <div class="product__modal-box product-dbox-grid mb-60">
                    <ul class="nav nav-tabs border-0" id="modalTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1"
                                aria-selected="false">
                                <img src="assets/img/shop/product-01.png" alt="product image">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2"
                                aria-selected="false">
                                <img src="assets/img/shop/product-02.png" alt="product image">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3"
                                aria-selected="false">
                                <img src="assets/img/shop/product-03.png" alt="product image">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4"
                                aria-selected="true">
                                <img src="assets/img/shop/product-04.png" alt="product image">
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content br-15 ms-bg-2 d-flex align-items-center" id="modalTabContent">
                        <div class="tab-pane fade active show" id="nav1" role="tabpanel"
                            aria-labelledby="nav1-tab">
                            <div class="product__modal-img w-img">
                                <img src="assets/img/shop/product-01.png" alt="product image">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                            <div class="product__modal-img w-img">
                                <img src="assets/img/shop/product-02.png" alt="product image">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                            <div class="product__modal-img w-img">
                                <img src="assets/img/shop/product-03.png" alt="product image">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                            <div class="product__modal-img w-img">
                                <img src="assets/img/shop/product-04.png" alt="product image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ms-product-modal-content mb-60">
                    <div class="d-flex align-items-center justify-content-between mb-35 mr-40">
                        <h3 class="ms-product-price">$899.00</h3>
                        <a class="ms-product-whishlist" href="wishlist.html"><i
                                class="flaticon-heart"></i></a>
                    </div>
                    <h2 class="ms-product-title2 mb-30">
                        <a href="shop-details.html">Denon DJ LC6000 Prime Perfor mance Expansion
                            Controller</a>
                    </h2>
                    <div class="ms-is-product-stock mb-25">
                        <span><i class="fa-solid fa-check"></i> In stock</span>
                    </div>
                    <div class="ms-product-stock sku ms-border2 d-inline-block pb-10 mb-30">
                        <div class="ms-product-stock-item mb-20">
                            <span class="ms-product-sku">UPC</span>
                            <span class="ms-product-sku-text">694318025154</span>
                        </div>
                        <div class="ms-product-stock-item mb-20">
                            <span class="ms-product-sku">EAN-13</span>
                            <span class="ms-product-sku-text">0694318025154</span>
                        </div>
                        <div class="ms-product-stock-item mb-20">
                            <span class="ms-product-sku">Model</span>
                            <span class="ms-product-sku-text">LC6000PRIMEXUS</span>
                        </div>
                    </div>
                    <div class="ms-product-short-desc mb-25">
                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit
                            eorum claritatem. Investigationes demonstraverunt</p>
                    </div>
                    <div class="ms-product-tags mb-55">
                        <span>Includes:</span>
                        <a href="#">Denon DJ Prime Go,</a>
                        <a href="#">Display Cleaning Cloth,</a>
                        <a href="#">USB Cable,</a>
                        <a href="#">Power Adapter,</a>,
                        <a href="#">Engine DJ Software Download Card</a>
                    </div>
                    <div class="product__modal-form">
                        <div class="product-quantity-cart ms-product-quantity-flex mb-30">
                            <div class="product-quantity-form">
                                <form action="#">
                                    <button class="cart-minus">
                                        <i class="far fa-minus"></i>
                                    </button>
                                    <input class="cart-input" type="text" value="1">
                                    <button class="cart-plus">
                                        <i class="far fa-plus"></i>
                                    </button>
                                </form>
                            </div>
                            <a href="cart.html" class="ms-addto-cart-btn"><span>Add to
                                    Cart</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="ms-product-ddesc ms-border2">
                    <ul class="nav nav-tabs pt-30 mb-45" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Media
                                Review</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="ms-product-dcontent">
                                <div class="ms-product-text mb-60">
                                    <p class="mb-25">One morning, when Gregor Samsa woke from
                                        troubled
                                        dreams, he
                                        found himself transformed in his bed into a horrible
                                        vermin. He lay on his armour-like back, and if he lifted his
                                        head a little he could see his brown belly, slightly domed
                                        and divided by arches into stiff sections. The bedding was
                                        hardly able to cover it and seemed ready to slide off any
                                        moment. His many legs, pitifully thin compared with the size
                                        of
                                        the rest of him, waved about helplessly as he looked.
                                        “What’s happened to me? ” he thought. It wasn’t a dream.</p>

                                    <p class="mb-25">His room, a proper human room although a little
                                        too
                                        small, lay
                                        peacefully between its four familiar walls. A collection
                                        of textile samples lay spread out on the table – Samsa was a
                                        travelling salesman – and above it there hung a picture
                                        that he had recently cut out of an illustrated magazine and
                                        housed in a nice, gilded frame. It showed a lady fitted out
                                        with a fur hat and fur boa who sat upright, raising a heavy
                                        fur
                                        muff that covered the whole of her lower arm towards the
                                        viewer. Gregor then turned to look out the window at the
                                        dull
                                        weather.</p>

                                    <p class="mb-25">Drops of rain could be heard hitting the pane,
                                        which made him
                                        feel quite sad. “How about if I sleep a little bit longer
                                        and forget all this nonsense”, he thought, but that was
                                        something he was unable to do because he was used to
                                        sleeping on
                                        his right, and in his present state couldn’t get into that
                                        position. However hard he threw himself onto his right, he
                                        always rolled back to where he was. He must have tried it a
                                        hundred times, shut his eyes so that he wouldn’t have to
                                        look at the floundering legs, and only stopped when he began
                                        to
                                        feel a mild, dull pain there that he had never felt
                                        before.</p>
                                </div>
                                <div class="ms-product-specifications mb-25">
                                    <h3 class="ms-title3 white-text mb-25">Specifications</h3>
                                    <div class="ms-product-stock sku d-inline-block">
                                        <div class="ms-product-stock-item mb-20">
                                            <span class="ms-product-sku">UPC</span>
                                            <span class="ms-product-sku-text">694318025154</span>
                                        </div>
                                        <div class="ms-product-stock-item mb-20">
                                            <span class="ms-product-sku">EAN-13</span>
                                            <span class="ms-product-sku-text">0694318025154</span>
                                        </div>
                                        <div class="ms-product-stock-item mb-20">
                                            <span class="ms-product-sku">Model</span>
                                            <span class="ms-product-sku-text">LC6000PRIMEXUS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-product-warranty mb-25">
                                    <h3 class="ms-title3 white-text mb-25">What is included</h3>
                                    <div class="ms-product-stock-item mb-20">
                                        <span class="ms-product-sku">1 Year</span>
                                        <span class="ms-product-sku-text">Limited Denon
                                            Warranty</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">
                            <div class="media-review mb-50">
                                <iframe src="https://www.youtube.com/embed/NGlAY7AcbWM"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products Area End  -->


<!-- Partner Area Start Here  -->
<div class="ms-partner-area fix pt-20 pb-130">
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