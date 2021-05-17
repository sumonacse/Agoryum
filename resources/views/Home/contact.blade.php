@extends('layouts.Font.App')
@section('content')
  @php
    $service = DB::table('services')->get();
    $siteSettings = DB::table('sitesettings')->where('id', 1)->first();
    $banner_link = DB::table('banner_sections')->where('id', 1)->first();
  @endphp
  <!--Contact From Banner Section-->
          <section class="contact-banner-inner">
              <div class="container h-100">
                  <div class="row h-100 ai-row align-items-center">
                      <div class="ai-banner-content">
                          <h1 class="ai-about-banner-heading text-light ai-bold text-center">Contact Us</h1>
                          <!--<p class="text-light breadcrumbs text-center ai-rajdhani-medium">Home/Contact Us</p>-->
                      </div>

                  </div>
              </div>
          </section>
          <!--Contact From Banner Section End-->
          <!-- contact form section -->
          <section class="contact-us ai-pt ai-pb">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-7">
                          <h2 class="dark-text ai-bold ai-contact-heading pb-5"> <span class="ai-bold">Ask us</span> Anything.  </h2>
                          <form class="row g-3" action="{!! route('contact_us_post') !!}" method="post">
                            @csrf
                              <div class="col-md-6">
                                  <input type="text" class="form-control rajdhani-semibold ps-0" id="inputtext4" name="name" required placeholder="Your name">
                              </div>
                              <div class="col-md-6">
                                  <input type="tel" class="form-control rajdhani-semibold ps-0" id="email4" name="telephone" required placeholder="Telephone" >
                              </div>
                              <div class="col-md-6">
                                  <input type="email" class="form-control rajdhani-semibold ps-0" id="inputtext4" name="email" required placeholder="Your email">
                              </div>
                              <div class="col-md-6">
                                  <input type="text" class="form-control rajdhani-semibold ps-0" id="email4" name="company" required placeholder="Company" >
                              </div>
                              <div class="col-md-12">
                                  <select id="inputState" name="services" class="form-select my-3 rajdhani-semibold ps-0" required>
                                    @forelse ($service as $value)
                                      <option class="rajdhani-semibold" value="{{ $value->service_title	 }}">{{ $value->service_title }}</option>
                                    @empty

                                    @endforelse
                                  </select>
                              </div>
                              <div class="mb-3 ai-poppins">
                                  <textarea class="form-control rajdhani-semibold ps-0" id="exampleFormControlTextarea1" rows="5" name="message" required placeholder="Message"></textarea>
                              </div>
                              <div class="col-12 text-end">
                                  <button type="submit" class="ai-form-submit ai-btn btn btn-danger btn-lg ai-rajdhani-medium">Send</button>
                              </div>
                          </form>
                      </div>
                      <div class="col-sm-5 ai-contact-info">
                          <h2 class="dark-text ai-bold ai-contact-heading pb-4"> <span class="ai-bold">Contact</span> Information.  </h2>
                          <h5 class="text-dark text-left fw-bold pt-3 rajdhani-semibold"> LET'S TALK. </h5>
                          <p class="rajdhani-semibold contact-email"> Email:- <a href="mailto:{{ $siteSettings->email }}" class="text-decoration-none rajdhani-semibold">{{ $siteSettings->email }}</a></p>
                          <p class="rajdhani-semibold contact-phone">Phone:- <a href="tel:{{ $siteSettings->telephone }}" class="text-decoration-none rajdhani-semibold">{{ $siteSettings->telephone }}</a></p>
                          <h5 class="fw-bold rajdhani-semibold py-3"> Follow us </h5>
                          <div class="ai-banner-social-contact">
                              <ul class="list-group list-group-horizontal list-unstyled">
                                  <li><a href="{{ $banner_link->linkedin_link }}" target="_blank" class="border border-2 rounded-circle text-dark ai-social-icon"><i class="fa fa-linkedin "></i></a></li>
                                  <li><a href="{{ $banner_link->facebook_link }}" target="_blank" class="border border-2 rounded-circle text-dark ai-social-icon"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="{{ $banner_link->twitter_link }}" target="_blank" class="border border-2 rounded-circle text-dark ai-social-icon"><i class="fa fa-twitter "></i></a></li>
                              </ul>
                          </div>
                      </div>

                  </div>
              </div>
          </section>

@endsection
