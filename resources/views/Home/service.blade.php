@extends('layouts.Font.App')
@section('title')
   {{ $Service->service_title }}
@endsection
@section('content')
  <!-- Service banner section -->
  <section class="services-banner-inner">
      <div class="container h-100">
          <div class="row h-100 ai-row align-items-center">
              <div class="ai-banner-content">
                  <h1 class="ai-about-banner-heading text-light ai-bold text-center">Services</h1>
                  <p class="text-light breadcrumbs text-center ai-rajdhani-medium">{{ $Service->service_title }}</p>
              </div>
          </div>
      </div>
  </section>
  <!-- Service banner section end-->
  <section class="service-single-para">
      <div class="container">
          <div class="row text-center  py-5">
              <div class="col-sm-2">
              </div>
              <div class="col">
                  <p class="ai-poppins m-0 py-4">At the core of our services is the goal to listen, learn, collaborate, plan, advise and then to provide the right set of technology tools available which make business better.</p>
              </div>
              <div class="col-sm-2">
              </div>
          </div>
      </div>
  </section>
  <!--Mobile Service-->
  <div class="col-sm-4 sidebar px-3 d-block d-sm-block d-md-none">
      <div class="ai-all-services-box p-4 py-4 bg-dark link-light">
          <h3 class="service-sidebar-heading rajdhani-semibold p-2">ALL SERVICES</h3>
          <ul class="list-group list-unstyled">
            @forelse ($AllService as $value)
              <li class="text-light ai-service-list"><a class="ai-sidebar-services-links text-light text-decoration-none ai-poppins p-2 d-block" href="{!! route('ServiceView',$value->id) !!}">{{ $value->service_title }}</a></li>
            @empty

            @endforelse
          </ul>
      </div>
  </div>
  <!--Mobile Section End-->
  <!--service content section-->
  <section id="IoT" class="ai-service-mobile ai-pt ai-pb">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 ai-service-page-content px-3">
                  <div class="ai-service-box">
                      <div class="ai-service-image">
                          <img src="../uploads/{{ $Service->service_banner }}" alt="" width="100%"/>
                      </div>
                      <div class="py-5">
                          <h2 class="ai-service-heading rajdhani-semibold m-0">{{ $Service->service_title }}</h2>
                      </div>
                      <div class="ai-service-text">
                          <p class="ai-poppins">{{ $Service->service_desc }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4 sidebar px-3">
                  <div class="ai-all-services-box p-4 py-4 bg-dark link-light d-none d-sm-block d-sm-none d-md-block">
                      <h3 class="service-sidebar-heading rajdhani-semibold p-2">ALL SERVICES</h3>
                      <ul class="list-group list-unstyled">
                        @forelse ($AllService as $value)
                          <li class="text-light ai-service-list"><a class="ai-sidebar-services-links text-light text-decoration-none ai-poppins p-2 d-block" href="{!! route('ServiceView',$value->id) !!}">{{ $value->service_title }}</a></li>
                        @empty

                        @endforelse
                      </ul>
                  </div>
                  <div class="ai-need-help-box p-4 bg-danger mt-4">
                      <h3 class="service-sidebar-heading rajdhani-semibold p-2 text-light">NEED HELP?</h3>
                      <p class="text-light p-2 ai-poppins ai-need-help-para m-0">At the core of our services is the goal to listen, learn, collaborate, plan, advise and then to provide the right set of technology tools available which make business better.</p>
                      <div class="p-2">
                          <img class="ai-phone-img" src="assets/images/phone.png" alt=""/><a href="tel:8882881214" class="ai-phone-link text-light rajdhani-semibold ps-3 text-decoration-none">(888) 288.1214</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--service content section end-->
  <!-- arogyum next project section -->
  <section class="arogyum-next-project">
      <div class="container p-5 pt-5 pb-5">
          <div class="row">
              <div class="col-sm-6 col-md-12 col-lg-9">
                  <h2 class="arogyum-head ai-bold"> <span class="ai-bold">ABOUT YOUR </span> NEXT PROJECT.</h2>
                  <p class="proj-desc ai-poppins">If you would like additional information from an Agoryum Business Consultant contact us.</p>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-3 text-end">
                  <a href="contact.html" class="arogyum-ai-btn ai-btn btn btn-danger my-3 ai-rajdhani-medium">Let's Talk</a>
              </div>
          </div>
      </div>
  </section>
  <!--arogyum next project section end-->

@endsection
