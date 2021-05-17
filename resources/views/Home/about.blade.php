@extends('layouts.Font.App')
@section('content')

<!-- about banner section -->
<section class="about-banner-inner ">
    <div class="container h-100">
        <div class="row h-100 ai-row align-items-center">
            <div class="ai-banner-content">
                <h1 class="ai-about-banner-heading text-light ai-bold text-center">About us</h1>
                <!--<p class="text-light breadcrumbs text-center ai-rajdhani-medium">Home/About Us</p>-->
            </div>

        </div>
    </div>
</section>
<!-- about banner section end-->
<!--About content section-->
<section class="ai-about-us-section contact-us ai-pt ai-pb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 about-content-col">
                <div class="about-content-left">
                  @if (!empty($info))
                    <h2 class="about-right-heading dark-text ai-bold text-uppercase">{{ $info->aboutus_title }}</h2>
                    <p class="ai-poppins about-content">
                      {!! $info->aboutus_desc !!}
                    </p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--About content section end-->
<!--About slider section-->
<section class="ai-about-slider-section ai-pt">
    <div class="container ai-slider-container">
        <div class="row">
            <h5 class="ai-about-slide-hd-first rajdhani-semibold">Unity Broadcasting Brands <span class="ai-bold ">... 50 Years ...</span> Serving Developing and Transforming</h5>
            <h5 class="ai-about-slide-hd-second ai-bold m-0">Leadership, Innovation</h5>
            <h5 class="ai-about-slide-hd-third ai-bold"><span class="rajdhani-semibold ai-and-text">and</span> Business Solutions</h5>
        </div>
        @php
          $work = DB::table('worked')->get();
        @endphp
        <div class="row ai-slick pt-5">
          @forelse ($work as $value)
            <div class="col-sm-4 ai-about-slick-slide">
                <div class="ai-about-card-slider ai-about-slider-bg-1 mx-3" style="background: url('./uploads/{{ $value->worked_image }}')">
                    <div class="ai-about-heading-body card-body pb-0">
                        <h3 class="card-title ai-about-card-title text-light ai-about-slick-heading ai-rajdhani-medium">{{ $value->worked_title }}</h3>
                    </div>
                    <div class="card-body hover-card-body">
                        <p class="card-text ai-about-card-text text-light ai-poppins">{!! $value->worked_desc !!}</p>
                        <h5 class="text-light about-brand-hd ai-poppins-semi-bold pt-4">{{ $value->worked_name }}</h5>
                        <h5 class="text-light  ai-poppins-semi-bold ai-about-currency-hd pt-4">{{ $value->worked_budget }}</h5>
                    </div>
                    <div class="ai-about-box-height"></div>
                    <div class="ai-about-card-btn-body p-4 text-end">
                        {{-- <h4 class="text-light ai-about-year-hd ai-poppins">1970</h4> --}}
                    </div>
                </div>
            </div>
          @empty

          @endforelse
        </div>
    </div>
</section>
<!--About slider section end-->
@endsection
