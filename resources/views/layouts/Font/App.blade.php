<!doctype html>
<html>
    <head>
        @php
        $siteSettings = DB::table('sitesettings')->where('id', 1)->first();
        @endphp
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="{{ $siteSettings->metadescription }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="{!! asset('assets') !!}/js/jquery.min.js" type="text/javascript"></script>
        <link href="{!! asset('assets') !!}/css/slick.css" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('assets') !!}/css/slick-theme.css" rel="stylesheet" type="text/css"/>
        <script src="{!! asset('assets') !!}/js/ai-commen.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <link href="{!! asset('assets') !!}/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="{!! route('home') !!}"><img src="uploads/{{ $siteSettings->logo }}" alt="" height="40"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="ai-navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase active" href="{!! route('home') !!}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="about.html">About us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                                    Services
                                </a>
                                @php
                                  $serve = DB::table('services')->get();
                                @endphp
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  @forelse ($serve as $value)
                                    <li><a class="dropdown-item" href="{!! route('ServiceView',$value->id) !!}">{{ $value->service_title }}</a></li>
                                  @empty
                                    <li><a class="dropdown-item" href="Core-Engineering.html">No service</a></li>
                                  @endforelse
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <a href="contact.html" class="ai-btn btn btn-danger">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <!-- footer -->
        <footer class="footer ai-pt">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class=" card-footer mb-3 pt-5" >
                            <div class="card-headers bg-transparent"><img src="../uploads/{{ $siteSettings->logo }}"></div>
                            <div class="card-body">
                                <p class="card-text pt-3 pb-3 ai-poppins">At our core is a philosophy of service to our clients with the highest level of honesty and integrity 100%... all the time.</p>
                                <div class="ai-banner-social-footer">
                                  @if (!empty($banner))
                                    <ul class="list-group list-group-horizontal list-unstyled justify-content-center">
                                        <li><a href="{{ $banner->linkedin_link }}" target="_blank" class=" text-center text-light ai-social-icon"><i class="fa fa-linkedin text-light"></i></a></li>
                                        <li><a href="{{ $banner->facebook_link }}" target="_blank" class="text-center text-light ai-social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $banner->twitter_link }}" target="_blank" class=" text-center text-light ai-social-icon"><i class="fa fa-twitter text-light"></i></a></li>
                                    </ul>
                                  @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3 text-center">
                    </div>
                </div>
                <div class="row footer-center">
                    <div class="col-sm-6">
                        <h5 class="text-left text-white  text-uppercase footer-widgets ai-rajdhani-medium">Services</h5>
                        <ul class="list-group list-group-horizontal">
                          @foreach ($Serve as $value)
                            <li class="list-inline-item"><a class="text-white text-decoration-none ai-poppins ai-footer-link" href="{!! route('ServiceView',$value->id) !!}">{{ $value->service_title }}</a></li>
                          @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-left text-white text-uppercase footer-widgets ai-rajdhani-medium">Case studies </h5>
                        <ul class="list-group list-group-horizontal">
                          @foreach ($cases as $value)
                            <li class="list-inline-item text-white"><a href="../uploads/{{ $value->case_file }}" target="_blank" class="text-white text-decoration-none ai-poppins ai-footer-link">{{ $value->case_title }}</a></li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row bottom-footer">
                    <div class="col-sm-12 text-center pt-4 px-0">
                        <p class="m-0 text-white py-4 ai-poppins">© 2021 {{ $siteSettings->siteName }}. LLC All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--end footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="assets/js/slick.min.js" type="text/javascript"></script>
        <script src="assets/js/js-popup/ai-custom-slick.js" type="text/javascript"></script>
    </body>
</html>
