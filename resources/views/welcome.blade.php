@extends('layouts.Font.App')
@section('content')

@if (!empty($banner))
  <section class="ai-banner d-none d-sm-block d-sm-none d-md-block" style="background: url('../uploads/{{ $banner->image }}')">
      <div class="container">
          <div class="row ai-row align-items-center">
              <div class="ai-banner-content">
                  <h1 class="ml4 text-light ai-bold banner-heading ist">
                      <span class="ai-bold letters letters-1">{{ $banner->bannerSectionOne }}</span>
                      <span class="ai-bold letters letters-2">{{ $banner->bannerSectionTwo }} </span>
                      <span class="ai-bold letters letters-3">{{ $banner->bannerSectionThree }} </span>
                  </h1>
                  <p class="text-light banner-text">{{ $banner->shortDesc }}</p>
                  <a href="{!! route('contact_us') !!}" class="ai-btn ai-banner-btn btn btn-danger mt-4 ai-rajdhani-medium">Get Started</a>
              </div>
              <div class="ai-banner-social">
                  <ul class="list-group list-group-horizontal list-unstyled">
                      <li><a href="{{ $banner->linkedin_link }}" target="_blank" class="border border-2 rounded-circle text-light ai-social-icon"><i class="fa fa-linkedin text-light"></i></a></li>
                      <li><a href="{{ $banner->facebook_link }}" target="_blank" class="border border-2 rounded-circle text-light ai-social-icon"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="{{ $banner->twitter_link }}" target="_blank" class="border border-2 rounded-circle text-light ai-social-icon"><i class="fa fa-twitter text-light"></i></a></li>
                  </ul>
              </div>
              <div class="ai-banner-bottom-icon text-center">
                  <ul class="list-unstyled">
                      <li><a href="#case-studies" class="ai-mouse-icon text-light text-decoration-none ai-bold"><i class="fa fa-circle" aria-hidden="true"></i></a></li>
                      <li class="pt-2"><a href="#case-studies" class="text-light"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </section>

  @php
    $BelowBanner = DB::table('services')->limit(5)->get();
  @endphp

  <!--Mobile Banner-->
  <section class="ai-home-mobile-banner d-block d-sm-block d-md-none">
      <div class="container-fluid p-5">
          <div class="row ai-mobile-row align-items-center">
              <div class="p-0 ps-3">
                  <h1 class="ml4 ai-rajdhani-medium ai-mobile-banner-heading mb-4">
                      <span class="ai-rajdhani-medium letters letters-1">{{ $banner->bannerSectionOne }}</span>
                      <span class="ai-rajdhani-medium letters letters-2">{{ $banner->bannerSectionTwo }} </span>
                      <span class="ai-rajdhani-medium letters letters-3">{{ $banner->bannerSectionThree }} </span>
                  </h1>
                  @forelse ($BelowBanner as $value)
                    <p class="ai-rajdhani-medium m-0 pb-2">{{ $value->service_title }}</p>
                  @empty

                  @endforelse
                  <div class="d-flex pt-4">
                      <a href="{!! route('contact_us') !!}" class="rounded-0 ai-btn ai-mobile-btn btn btn-danger ai-rajdhani-medium">Let's Talk</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--Mobile Banner End-->

  <section class="ai-icon-box d-none d-sm-block d-sm-none d-md-block">
      <div class="container-fluid text-light">
          <div class="row pt-4 pb-4">
            @forelse ($BelowBanner as $value)
              <div class="col col-6 col-sm-4 col-md-4 col-lg p-3 d-flex align-items-center ps-4 pe-0">
                  <img class="me-3" src="assets/images/Group {{ 162+$loop->index }}.png" alt="" width="40" height="40"/>
                  <div class="d-inline-block">
                      <h3 class="m-0 ai-icon-heading"><a href="{!! route('ServiceView',$value->id) !!}" class="text-light text-decoration-none">{{ $value->service_title }}</a></h3>
                      <!--<p class="m-0 ai-icon-content ai-poppins"><a href="Experience-Design.html" class="text-light text-decoration-none ai-poppins">Engage and include an established design team focused on improving a user centered design process. Collaborative sessions, workshops, and mentoring to achieve enhanced designs, more human user experiences and better interface experiences for your websites and platforms.</a></p>-->
                  </div>
              </div>
            @empty

            @endforelse
          </div>
      </div>
  </section>
@endif

@if (!empty($cases))
  <section id="case-studies" class="ai-pt ai-pb ai-card-section d-none d-sm-block d-sm-none d-md-block">
      <div class="container">
          <div class="row">
              <div>
                  <img class="ai-object-img" src="assets/images/Group 18.png" alt="" height="100%" width="50px"/>
              </div>
              <h2 class="ai-heading mt-3 mb-5"><span class="ai-heading-d">Case</span> Studies</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($cases as $case)
              <div class="col pe-0">
                  <div class="card h-100 ai-card">
                      <a href="./uploads/{{$case->case_file}}" target="_blank"><img src="../uploads/{{ $case->case_thumbnal}}" class="card-img-top" alt="..."></a>
                      <div class="card-body text-center">
                          <h5 class="card-title ai-card-title">{{$case->case_title}}</h5>
                      </div>
                      <div class="card-body ai-card-btn-body">
                          <a href="./uploads/{{$case->case_file}}" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                          <a href="{!! route('contact_us') !!}" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>

  <!--Mobile Case Studies-->
  <section id="case-studies" class="ai-pt ai-pb case-studies-mobile ai-card-section d-block d-sm-block d-md-none">
      <div class="container ai-slider-container">
          <div class="row text-center">
              <div>
                  <img class="ai-object-img ai-icon-heading-icon" src="assets/images/Group 18.png" alt="" height="100%" width="50px"/>
              </div>
              <h2 class="mobile-case-study-heading ai-heading mt-3 mb-5"><span class="ai-heading-d">Case</span> Studies</h2>
          </div>
          <div>
              <div class="row row-cols-1 row-cols-md-4 g-4 ai-slick ai-case-studies-slider">
                @foreach ($cases as $case)
                  <div class="col pe-0">
                      <div class="card ai-card">
                          <a href="./uploads/{{$case->case_file}}" target="_blank"><img src="../uploads/{{ $case->case_thumbnal}}" class="card-img-top" alt="..."></a>
                          <div class="card-body text-center">
                              <h5 class="card-title ai-card-title">{{$case->case_title}}</h5>
                          </div>
                          <div class="card-body ai-card-btn-body">
                              <a href="./uploads/{{$case->case_file}}" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                              <a href="{!! route('contact_us') !!}" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </section>
  <!--Mobile Case Studies End-->
  @endif
  <section class="ai-service-section ai-pt ai-pb">
      <div class="container ai-slider-container">
          <div class="row ai-text-center">
              <div>
                  <img class="ai-object-img ai-icon-heading-icon"  src="assets/images/Group 18.png" alt="" height="100%" width="50px"/>
              </div>
              <h2 class="ai-heading ai-mob-heading mt-3 mb-5"><span class="ai-heading-d">Our </span>Services</h2>
          </div>
          <div class="row ai-slick">
            @forelse ($Serve as $value)
              <div class="col-sm-4 ai-slick-slide">
                  <div class="ai-card-slider mx-3" style="background:url(../uploads/{{$value->service_thumbnal}}); background-repeat:no-repeat; background-size:cover;">
                      <div class="ai-box-height"></div>
                      <div class="card-body p-4">
                          <h5 class="card-title ai-card-title text-light ai-slick-heading ai-rajdhani-medium"><br>{{ $value->service_title }}</h5>
                          <p class="card-text ai-card-text text-light ai-poppins">{{ \Illuminate\Support\Str::limit($value->service_desc, 80, $end='...') }}</p>
                      </div>
                      <div class="card-body ai-card-btn-body p-4">
                          <a href="{!! route('ServiceView',$value->slug) !!}" class="ai-slick-btn ai-btn ai-card-btn btn btn-danger card-link text-uppercase">LEARN MORE</a>
                          <a href="contact.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
            @empty
              <p>No Service available</p>
            @endforelse
          </div>
      </div>
  </section>
  @php
    $client_bg = DB::table('clientbgs')->where('id', 1)->first();
  @endphp
  <section class="ai-client-section ai-pt" style="background: url(../uploads/{{ $client_bg->clients_background }});">
      <div class="container text-light">
          <div class="row">
              <div class="col-sm-6 ai-client-images-section">
                  <h5 class="text-uppercase ai-client-sub-heading">clients</h5>
                  <h2 class="text-capitalize ai-cleint-heading ai-rajdhani-medium"><span class="ai-heading-d">Our</span> clients</h2>
                  <div class="row text-center">
                    @foreach ($client as $value)
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="../uploads/{{ $value->company_logo }}" alt=""/>
                      </div>
                    @endforeach
                  </div>
              </div>
              @php
                $clients = DB::table('clients')->limit(8)->latest('id')->get();
              @endphp
            <div class="col-sm-6">
             <div class="row d-flex justify-content-center">
                 <div class="col-md-10 col-lg-9 col-xl-8 testimonials-col-mb">
                     <div class="ai-client-testimonials-card card card-main border-0">
                         <h5 class="ai-testimonial-sub-heading ai-rajdhani-medium">OUR HAPPY CLIENTS</h5>
                         <h2 class="ai-testimonial-heading ai-bold pb-3">What Client's Say?</h2>
                         <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                             <div class="carousel-indicators ai-carousel-indicators">
                               @forelse ($clients as $key => $value)
                                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $loop->index }}" class="@if($key > 6)active @endif ai-slide-label link-light bg-light" aria-label="Slide {{ $loop->index+1 }}"></button>
                               @endforeach
                             </div>
                             <div class="carousel-inner">
                               @forelse ($clients as $key => $value)
                                 <div class="carousel-item @if($key > 6)active @endif">
                                   <div class="card border-0 card-0">
                                     <p class="ai-testimonials-content ai-poppins-light">{{ $value->client_review }}</p>
                                     <hr>
                                     <div class="d-inline-block pt-3">
                                       <img class="ai-object-img" src="../uploads/{{ $value->clients_photo }}" alt="" height="100%" width="70px"/>
                                       <p class="d-inline-block client-name">{{ $value->client_name}}</p>
                                     </div>
                                   </div>
                                 </div>
                               @empty

                               @endforelse
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
          </div>
      </div>
  </section>
  <section class="ai-brand-section ai-pt ai-pb">
      <div class="container ai-slider-container pt-5">
          <div class="row text-center">
              <div>
                  <img class="ai-object-img ai-icon-heading-icon" src="assets/images/Group 18.png" alt="" height="100%" width="50px"/>
              </div>
              <h2 class="ai-heading mt-3 mb-5 ai-mob-heading"><span class="ai-heading-d">Our </span>Technologies</h2>
          </div>
          <div class="row ai-slick-brand">
            @foreach ($technologies as $value)
              <div class="col-sm-4 ai-slick-slide">
                  <img src="../uploads/{{ $value->tech_logo }}" title="{{ $value->tech_name }}" alt=""/>
              </div>
            @endforeach
          </div>
      </div>
  </section>
  <!--video-section -->
  @php
    $Video = DB::table('videos')->count();
  @endphp
  @if (!empty($Video))
    @php
      $video_background = DB::table('videobgs')->where('id', 1)->first();
    @endphp
  <section class="ai-video-section ai-pt ai-pb" style="background: url('../uploads/{{ $video_background->videos_background }}')">
      <div class="container text-center text-light pt-5 pb-5">
          <div class="row">
              <h2 class="text-uppercase ai-video-heading ai-bold pb-4 m-0">{{ $videos->video_title }}</h2>
              <div>
                  <a class="" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                      <img src="assets/images/Group 37.png" alt="video-icon"  width="100px"/>
                  </a>
              </div>
              <p class="ai-poppins text-uppercase ai-video-content pt-4">{{ $videos->video_short_desc }}</p>
          </div>
      </div>
  </section>
  <!-- Pop-up  -->
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="ai-modal-overlay">
          <div class="ai-modal-overlay-inner modal-dialog modal-fullscreen-sm-down ai-video-popup">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title ai-popup-heading ai-bold" id="exampleModalToggleLabel">{{ $videos->video_title }}</h5>
                      <button type="button" class="ai-stop-video btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <iframe class="youtube-video" width="100%" height="600px" src="{{ $videos->video_link }}" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
                  {{-- <div class="modal-footer">
                      <button class="ai-stop-video ai-btn btn btn-danger ai-rajdhani-medium" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Digital Skills</button>
                  </div> --}}
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen-sm-down ai-video-popup">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title ai-popup-heading ai-bold" id="exampleModalToggleLabel2">THOUGHTS, BELIEFS AND THE FUTURE</h5>
                  <button type="button" class="ai-stop-video btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <iframe class="youtube-video-2" width="100%" height="600px" src="https://www.youtube.com/embed/Y9FOyoS3Fag?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen></iframe>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button class="ai-stop-video ai-btn btn btn-danger ai-rajdhani-medium" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Digital Transformation</button>
              </div>
          </div>
      </div>
  </div>
  <!--Popup End-->
  <!-- end video section-->
    @endif
    <section class="arogyum-next-project">
        <div class="container p-5 pt-5 pb-5">
            <div class="row">
                <div class="col-sm-6 col-md-12 col-lg-9">
                    <h2 class="arogyum-head ai-bold"> <span class="ai-bold">ABOUT YOUR </span> NEXT PROJECT.</h2>
                    <p class="proj-desc ai-poppins">If you would like additional information from an Agoryum Business Consultant contact us.</p>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-3 text-end">
                    <a href="{!! route('contact_us') !!}" class="arogyum-ai-btn ai-btn btn btn-danger my-3 ai-rajdhani-medium">Let's Talk</a>
                </div>
            </div>
    </section>

@endsection
