@extends('client.layouts.app')
@section('title')
    Mu Síc Que
@endsection
@section('content')
    <!-- Brand Song Area Start Here  -->
    @include('client.components.home.brandsong')
    <!-- Brand Song Area End Here  -->

    <!-- Banner Area Start Here  -->
    @include('client.components.home.banner')
    <!-- Banner Area End Here  -->

    <!-- Text scroll area start -->
    @include('client.components.home.textscroll')
    <!-- Text scroll area end -->

    <!-- Popular  area start -->
    @include('client.components.home.popular')
    <!-- Popular  area end -->

    <!-- work area start -->
    @include('client.components.home.work')
    <!-- work area end -->

    <!-- Trending area start -->
    @include('client.components.home.trending')
    <!-- Trending area end -->

    <!-- Function Brand Area Start Here  -->
    @include('client.components.home.functionbrand')
    <!-- Function Brand Area End Here  -->

    <!-- Special Events Area Start 1 -->
    @include('client.components.home.specialevents1')
    <!-- Special Events Area End -->

    <!-- Testimonial Area Start Here  -->
    @include('client.components.home.testimonial')
    <!-- Testimonial Area End Here  -->

    <!-- Special Events Area Start  2-->
    @include('client.components.home.specialevents2')
    <!-- Special Events Area End -->

    <!-- Partner Area Start Here  -->
    @include('client.components.home.partner')
    <!-- Partner Area End Here  -->

    <!-- CTA Area Start Here  -->
    @include('client.components.home.cta')
    <!-- CTA Area End Here  -->
@endsection
