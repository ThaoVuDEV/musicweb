@extends('client.layouts.app')
@section('title')
    Team Deail
@endsection
@section('content')
     <!-- page title area start  -->
     <section class="page-title-area page-title-spacing p-relative zindex-1 "
     data-background="client/img/bg/work-bg.jpg">
     <div class="ms-overlay ms-overlay8 p-absolute zindex--1"></div>
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xxl-9">
                 <h3 class="ms-page-title text-center lh-1">Essie L. Whitman</h3>
             </div>
         </div>
     </div>
 </section>
 <!-- page title area end  -->

 <!-- team-details area start  -->
 <section class="ms-team-details-area fix pt-130 pb-80">
     <div class="container">
         <div class="row">
             <div class="col-xl-6 col-lg-8">
                 <div class="ms-team-img-details mb-50">
                     <img src="client/img/team/team-01.jpg" alt="team image">

                 </div>
             </div>
             <div class="col-xl-6 col-lg-12">
                 <div class="ms-team-item-details mb-50">
                     <h4 class="ms-team-role mb-30">Backing vocalist </h4>
                     <p>Given the legendarily debauched life of the Rolling Stones guitarist, it’s a
                         wonder that he can remember enough of it to fill a book.</p>
                     <p> Eye-watering in its
                         candour, Life gleefully takes us through music, money, arrests, fallouts,
                         makeups, drugs and “chicks”. It’s gossipy, spry and an absolute hoot from
                         beginning to end.</p>
                     <p>Our hand-picked acts will guarantee you fantastic wedding entertainment for
                         each part. We'll provide help and support 24 hours a day, 7 days a week,
                         right up until Outstanding wedding band playing chart, indie, rock anthems
                         and Britpop and featuring guitars, keyboards. </p>
                     <p> The group were fantastic, they
                         made the evening go with a blast.</p>

                     <div class="bd-skill--content mt-50">
                         <div class="bd-skill__wrapper mb-25">
                             <div class="bd-skill--title__wrapper">
                                 <h5 class="bd-skill--title">Music</h5>
                                 <span>90%</span>
                             </div>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 90%">
                                     <span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="bd-skill__wrapper mb-25">
                             <div class="bd-skill--title__wrapper">
                                 <h5 class="bd-skill--title">Sound Recording</h5>
                                 <span>60%</span>
                             </div>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 60%">
                                     <span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="bd-skill__wrapper mb-0">
                             <div class="bd-skill--title__wrapper">
                                 <h5 class="bd-skill--title">Track Editing</h5>
                                 <span>70%</span>
                             </div>
                             <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 70%">
                                     <span></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-12">
                 <div class="ms-team-item-details mb-50">
                     <h4>Biography:</h4>

                     <p>Bresaola chicken tri-tip boudin pork belly, filet mignon andouille sausage
                         hamburger salami turducken. Jerky drumstick shoulder boudin, pork chop short
                         loin ham. Shoulder brisket beef burgdoggen meatloaf ham hock. Hamburger
                         venison
                         shoulder pig cow. Burgdoggen turkey brisket spare ribs ham sausage
                         frankfurter
                         porchetta rump.</p>
                     <h4>Proffesional Life:</h4>

                     <p>Sausage tail sirloin kielbasa. Short ribs salami alcatra flank pork belly.
                         Sausage pork loin doner meatball, hamburger andouille venison beef ribs pig
                         turkey. Ball tip shankle boudin ribeye.</p>

                     <div class="ms-footer-social mb-15 d-flex align-items-center mt-30">
                         <div class="follow-text">Follow On :</div>
                         <a href="https://www.instagram.com/" title="Instagram" target="_blank">IN</a>
                         <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                         <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-12">
                 <div class="ms-team-item-contact mb-50">
                     <div class="ms-contact-wrap ms-contact-space ms-bg-2">
                         <form>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="ms-input2-box mb-30">
                                         <input type="text" placeholder="Name">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="ms-input2-box mb-30">
                                         <input type="email" placeholder="Email">
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="ms-input2-box mb-30">
                                         <textarea cols="30" rows="10"
                                             placeholder="Write Message . . ."></textarea>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="ms-submit-btn mt-20">
                                         <button class="unfill__btn" type="submit">Send
                                             Message</button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- team-details area end  -->


 <!-- Partner Area Start Here  -->
 <div class="ms-partner-area fix pb-130">
     <div class="container">
         <div class="ms-border5 pt-110">
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
 </div>
 <!-- Partner Area End Here  -->
@endsection