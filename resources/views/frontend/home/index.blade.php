@extends('frontend.layouts.app')

@section('contents')

    <!--Start hero slider-->
    @include('frontend.sections.hero-section')
    <!--End hero slider-->

    <!--Start category slider-->
    @include('frontend.sections.category-section')
    <!--End category slider-->

    <!--Start banners-->
    @include('frontend.sections.banner-section')
    <!--End banners-->

    @include('frontend.sections.products-tab-section')
    <!--Products Tabs-->

    @include('frontend.sections.banner-section-two')
    <!--End 4 banners-->

    @include('frontend.sections.flash-sale-section')
    <!--End Best Sales-->

    @include('frontend.sections.new-arrivals-section')
    <!-- new arrival end -->

    <section class="wsus__ctg mt-40">
        <div class="container">
            <a href="#" class="wsus__ctg_area">
                <img src="assets/imgs/cta_bg.png" alt="cta" class="img-fluid w-100" />
            </a>
        </div>
    </section>
    <!--CTA section end-->

    @include('frontend.sections.special-products-section')
    <!-- special products end -->

    @include('frontend.sections.four-col-products-section')
    <!--End 4 columns-->
@endsection