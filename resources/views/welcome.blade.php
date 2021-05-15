@extends('layouts.Font.App')
@section('content')
  <section class="ai-banner d-none d-sm-block d-sm-none d-md-block">
      <div class="container">
          <div class="row ai-row align-items-center">
              <div class="ai-banner-content">
                  <h1 class="ml4 text-light ai-bold banner-heading ist">
                      <span class="ai-bold letters letters-1">Technology</span>
                      <span class="ai-bold letters letters-2">Business </span>
                      <span class="ai-bold letters letters-3">Solutions </span>
                  </h1>
                  <p class="text-light banner-text">to your Routine & Complex Business Challenges</p>
                  <a href="contact.html" class="ai-btn ai-banner-btn btn btn-danger mt-4 ai-rajdhani-medium">Get Started</a>
              </div>
              <div class="ai-banner-social">
                  <ul class="list-group list-group-horizontal list-unstyled">
                      <li><a href="https://www.linkedin.com/company/agoryum-ventures/" target="_blank" class="border border-2 rounded-circle text-light ai-social-icon"><i class="fa fa-linkedin text-light"></i></a></li>
                      <li><a href="https://www.facebook.com/Agoryum-Ventures-107226874202571/" target="_blank" class="border border-2 rounded-circle text-light ai-social-icon"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://twitter.com/agoryumv" target="_blank" class="border border-2 rounded-circle text-light ai-social-icon"><i class="fa fa-twitter text-light"></i></a></li>
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
  <!--Mobile Banner-->
  <section class="ai-home-mobile-banner d-block d-sm-block d-md-none">
      <div class="container-fluid p-5">
          <div class="row ai-mobile-row align-items-center">
              <div class="p-0 ps-3">
                  <h1 class="ml4 ai-rajdhani-medium ai-mobile-banner-heading mb-4">
                      <span class="ai-rajdhani-medium letters letters-1">Technology</span>
                      <span class="ai-rajdhani-medium letters letters-2">Business </span>
                      <span class="ai-rajdhani-medium letters letters-3">Solutions </span>
                  </h1>
                  <p class="ai-rajdhani-medium m-0 pb-2">Web and Application <strong>Development</strong></p>
                  <p class="ai-rajdhani-medium m-0 pb-2">UI/UX <strong>Experienced design</strong></p>
                  <p class="ai-rajdhani-medium m-0 pb-2">Cyber <strong>Security</strong></p>
                  <p class="ai-rajdhani-medium m-0 pb-2">Internet of <strong>Things(IoT)</strong></p>
                  <p class="ai-rajdhani-medium m-0 pb-2">DevOps & <strong>Cloud Migration</strong></p>
                  <div class="d-flex pt-4">
                      <a href="contact.html" class="rounded-0 ai-btn ai-mobile-btn btn btn-danger ai-rajdhani-medium">Let's Talk</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--Mobile Banner End-->
  <section class="ai-icon-box d-none d-sm-block d-sm-none d-md-block">
      <div class="container-fluid text-light">
          <div class="row pt-4 pb-4">
              <div class="col col-6 col-sm-4 col-md-4 col-lg p-3 d-flex align-items-center ps-4 pe-0">
                  <img class="me-3" src="assets/images/Group 162.png" alt="" width="40" height="40"/>
                  <div class="d-inline-block">
                      <h3 class="m-0 ai-icon-heading"><a href="Experience-Design.html" class="text-light text-decoration-none">Experience Design UI/UX</a></h3>
                      <!--<p class="m-0 ai-icon-content ai-poppins"><a href="Experience-Design.html" class="text-light text-decoration-none ai-poppins">Engage and include an established design team focused on improving a user centered design process. Collaborative sessions, workshops, and mentoring to achieve enhanced designs, more human user experiences and better interface experiences for your websites and platforms.</a></p>-->
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-md-4 col-lg p-3 d-flex align-items-center ps-4 pe-0">
                  <img class="me-3" src="assets/images/Group 163.png" alt="" width="40" height="40"/>
                  <div class="d-inline-block">
                      <h3 class="m-0 ai-icon-heading"><a href="Internet-of-Things-(IoT).html" class="text-light text-decoration-none">Internet-of-Things-(IoT)</a></h3>
                      <!--<p class="m-0 ai-icon-content ai-poppins"><a href="Internet-of-Things-(IoT).html" class="text-light text-decoration-none ai-poppins">Harness the power of IoT to reduce costs, drive revenue and streamline your operations. Boost efficiency and streamline capital expenditures with Agile Methods. Securely connect devices, gather data, and take intelligent actions based on increased insights and improved analytics.</a></p>-->
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-md-4 col-lg p-3 d-flex align-items-center ps-4 pe-0">
                  <img class="me-3" src="assets/images/Group 164.png" alt="" width="40" height="40"/>
                  <div class="d-inline-block">
                      <h3 class="m-0 ai-icon-heading"><a href="Core-Engineering.html" class="text-light text-decoration-none">Web & App Development</a></h3>
                      <!--<p class="m-0 ai-icon-content ai-poppins"><a href="Core-Engineering.html" class="text-light text-decoration-none ai-poppins">Software development life cycle (SDLC) principles applied. Our development teams, building applications (iOS and Android), websites and platform integrations</a></p>-->
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-md-4 col-lg p-3 d-flex align-items-center ps-4 pe-0">
                  <img class="me-3" src="assets/images/Group 165.png" alt="" width="40" height="40"/>
                  <div class="d-inline-block">
                      <h3 class="m-0 ai-icon-heading"><a href="DevOps&CloudServices.html" class="text-light text-decoration-none">DevOps & Cloud Services</a></h3>
                      <!--<p class="m-0 ai-icon-content ai-poppins"><a href="DevOps&CloudServices.html" class="text-light text-decoration-none ai-poppins">Get more from your DevOps and cloud initiatives with end-to-end automation, speed innovation and increased digital agility. Automate your software development with our DevOps experts.</a></p>-->
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-md-4 col-lg p-3 d-flex align-items-center ps-4 pe-0">
                  <img class="me-3" src="assets/images/Group 166.png" alt="" width="40" height="40"/>
                  <div class="d-inline-block">
                      <h3 class="m-0 ai-icon-heading"><a href="Security.html" class="text-light text-decoration-none">Cyber Security</a></h3>
                      <!--<p class="m-0 ai-icon-content ai-poppins"><a href="Security.html" class="text-light text-decoration-none ai-poppins">Identify, respond and resolve cyber threats quickly. Addressing Cyber & Data Security to protect your business allowing it to grow confidently. IT Support Experts, 24/7 Support Services: IT Support, Managed Services and Network Assessment.</a></p>-->
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section id="case-studies" class="ai-pt ai-pb ai-card-section d-none d-sm-block d-sm-none d-md-block">
      <div class="container">
          <div class="row">
              <div>
                  <img class="ai-object-img" src="assets/images/Group 18.png" alt="" height="100%" width="50px"/>
              </div>
              <h2 class="ai-heading mt-3 mb-5"><span class="ai-heading-d">Case</span> Studies</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col pe-0">
                  <div class="card h-100 ai-card">
                      <a href="assets/images/Case Study Cloud Migration.pdf" target="_blank"><img src="assets/images/case-1.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body text-center">
                          <h5 class="card-title ai-card-title">Cloud <span>Migration</span></h5>
                      </div>
                      <div class="card-body ai-card-btn-body">
                          <a href="assets/images/Case Study Cloud Migration.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                          <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col pe-0">
                  <div class="card h-100 ai-card">
                      <a href="assets/images/Case Study Website Development.pdf" target="_blank">  <img src="assets/images/case-2.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body text-center">
                          <h5 class="card-title ai-card-title">Website <span>Development</span></h5>
                      </div>
                      <div class="card-body ai-card-btn-body">
                          <a href="assets/images/Case Study Website Development.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                          <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col pe-0">
                  <div class="card h-100 ai-card">
                      <a href="assets/images/Case Study Application Code Review.pdf" target="_blank">   <img src="assets/images/case-3.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body text-center">
                          <h5 class="card-title ai-card-title">Application <span>Code Review</span></h5>
                      </div>
                      <div class="card-body ai-card-btn-body">
                          <a href="assets/images/Case Study Application Code Review.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                          <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col pe-0">
                  <div class="card h-100 ai-card">
                      <a href="assets/images/Case Study Application Development.pdf" target="_blank"> <img src="assets/images/case-4.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body text-center">
                          <h5 class="card-title ai-card-title">Application <span>Development</span></h5>
                      </div>
                      <div class="card-body ai-card-btn-body">
                          <a href="assets/images/Case Study Application Development.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                          <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
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
                  <div class="col pe-0">
                      <div class="card ai-card">
                          <a href="assets/images/Case Study Cloud Migration.pdf" target="_blank"><img src="assets/images/case-1.jpg" class="card-img-top" alt="..."></a>
                          <div class="card-body text-center">
                              <h5 class="card-title ai-card-title">Cloud <span>Migration</span></h5>
                          </div>
                          <div class="card-body ai-card-btn-body">
                              <a href="assets/images/Case Study Cloud Migration.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                              <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                          </div>
                      </div>
                  </div>
                  <div class="col pe-0">
                      <div class="card ai-card">
                          <a href="assets/images/Case Study Website Development.pdf" target="_blank">  <img src="assets/images/case-2.jpg" class="card-img-top" alt="..."></a>
                          <div class="card-body text-center">
                              <h5 class="card-title ai-card-title">Website <span>Development</span></h5>
                          </div>
                          <div class="card-body ai-card-btn-body">
                              <a href="assets/images/Case Study Website Development.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                              <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                          </div>
                      </div>
                  </div>
                  <div class="col pe-0">
                      <div class="card ai-card">
                          <a href="assets/images/Case Study Application Code Review.pdf" target="_blank">   <img src="assets/images/case-3.jpg" class="card-img-top" alt="..."></a>
                          <div class="card-body text-center">
                              <h5 class="card-title ai-card-title">Application <span>Code Review</span></h5>
                          </div>
                          <div class="card-body ai-card-btn-body">
                              <a href="assets/images/Case Study Application Code Review.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                              <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                          </div>
                      </div>
                  </div>
                  <div class="col pe-0">
                      <div class="card ai-card">
                          <a href="assets/images/Case Study Application Development.pdf" target="_blank"> <img src="assets/images/case-4.jpg" class="card-img-top" alt="..."></a>
                          <div class="card-body text-center">
                              <h5 class="card-title ai-card-title">Application <span>Development</span></h5>
                          </div>
                          <div class="card-body ai-card-btn-body">
                              <a href="assets/images/Case Study Application Development.pdf" target="_blank" class="ai-btn ai-card-btn btn btn-danger card-link text-uppercase">READ MORE</a>
                              <a href="contact.html" class="ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--Mobile Case Studies End-->
  <section class="ai-service-section ai-pt ai-pb">
      <div class="container ai-slider-container">
          <div class="row ai-text-center">
              <div>
                  <img class="ai-object-img ai-icon-heading-icon"  src="assets/images/Group 18.png" alt="" height="100%" width="50px"/>
              </div>
              <h2 class="ai-heading ai-mob-heading mt-3 mb-5"><span class="ai-heading-d">Our </span>Services</h2>
          </div>
          <div class="row ai-slick">
              <div class="col-sm-4 ai-slick-slide">
                  <div class="ai-card-slider ai-card-slider-bg-1 mx-3">
                      <div class="ai-box-height"></div>
                      <div class="card-body p-4">
                          <h5 class="card-title ai-card-title text-light ai-slick-heading ai-rajdhani-medium"><br>UI/UX</h5>
                          <p class="card-text ai-card-text text-light ai-poppins">Engage and include an established design team focused on improving</p>
                      </div>
                      <div class="card-body ai-card-btn-body p-4">
                          <a href="Experience-Design.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-danger card-link text-uppercase">LEARN MORE</a>
                          <a href="contact.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <div class="ai-card-slider ai-card-slider-bg-2 mx-3">
                      <div class="ai-box-height"></div>
                      <div class="card-body p-4">
                          <h5 class="card-title ai-card-title text-light ai-slick-heading ai-rajdhani-medium">Web/Application Development</h5>
                          <p class="card-text ai-card-text text-light ai-poppins">Understanding the value listeners have for the radio station serves to guide the direction</p>
                      </div>
                      <div class="card-body ai-card-btn-body p-4">
                          <a href="Core-Engineering.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-danger card-link text-uppercase">LEARN MORE</a>
                          <a href="contact.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <div class="ai-card-slider ai-card-slider-bg-3 mx-3">
                      <div class="ai-box-height"></div>
                      <div class="card-body p-4">
                          <h5 class="card-title ai-card-title text-light ai-slick-heading ai-rajdhani-medium"><br>Cyber Security</h5>
                          <p class="card-text ai-card-text text-light ai-poppins">Dentify, respond and resolve cyber threats quickly. Addressing Cyber & Data</p>
                      </div>
                      <div class="card-body ai-card-btn-body p-4">
                          <a href="Security.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-danger card-link text-uppercase">LEARN MORE</a>
                          <a href="contact.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <div class="ai-card-slider ai-card-slider-bg-4 mx-3">
                      <div class="ai-box-height"></div>
                      <div class="card-body p-4">
                          <h5 class="card-title ai-card-title text-light ai-slick-heading ai-rajdhani-medium">DevOps & Cloud Services</h5>
                          <p class="card-text ai-card-text text-light ai-poppins">Get more from your devOps and cloud initatives with end-to-end automation</p>
                      </div>
                      <div class="card-body ai-card-btn-body p-4">
                          <a href="DevOps&CloudServices.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-danger card-link text-uppercase">LEARN MORE</a>
                          <a href="contact.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <div class="ai-card-slider ai-card-slider-bg-5 mx-3">
                      <div class="ai-box-height"></div>
                      <div class="card-body p-4">
                          <h5 class="card-title ai-card-title text-light ai-slick-heading ai-rajdhani-medium"><br>IoT</h5>
                          <p class="card-text ai-card-text text-light ai-poppins">Harness the power of loT to reduce costs, drive revenue and streamline</p>
                      </div>
                      <div class="card-body ai-card-btn-body p-4">
                          <a href="Internet-of-Things-(IoT).html" class="ai-slick-btn ai-btn ai-card-btn btn btn-danger card-link text-uppercase">LEARN MORE</a>
                          <a href="contact.html" class="ai-slick-btn ai-btn ai-card-btn btn btn-secondary card-link text-uppercase">CONTACT US</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="ai-client-section ai-pt">
      <div class="container text-light">
          <div class="row">
              <div class="col-sm-6 ai-client-images-section">
                  <h5 class="text-uppercase ai-client-sub-heading">clients</h5>
                  <h2 class="text-capitalize ai-cleint-heading ai-rajdhani-medium"><span class="ai-heading-d">Our</span> clients</h2>
                  <div class="row text-center">
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-1.png" alt=""/>
                      </div>
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-2.png" alt=""/>
                      </div>
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-3.png" alt=""/>
                      </div>
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-4.png" alt=""/>
                      </div>
                  </div>
                  <div class="row pb-5 text-center">
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-5.png" alt=""/>
                      </div>
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-6.png" alt=""/>
                      </div>
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-7.png" alt=""/>
                      </div>
                      <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-3">
                          <img src="assets/images/clients-8.png" alt=""/>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="row d-flex justify-content-center">
                      <div class="col-md-10 col-lg-9 col-xl-8 testimonials-col-mb">
                          <div class="ai-client-testimonials-card card card-main border-0">
                              <h5 class="ai-testimonial-sub-heading ai-rajdhani-medium">OUR HAPPY CLIENTS</h5>
                              <h2 class="ai-testimonial-heading ai-bold pb-3">What Client's Say?</h2>
                              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                  <div class="carousel-indicators ai-carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active ai-slide-label link-light bg-light" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="ai-slide-label link-light bg-light" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="ai-slide-label link-light bg-light" aria-label="Slide 3"></button>
                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" class="ai-slide-label link-light bg-light" aria-label="Slide 4"></button>
                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" class="ai-slide-label link-light bg-light" aria-label="Slide 5"></button>
                                  </div>
                                  <div class="carousel-inner">
                                      <div class="carousel-item active">
                                          <div class="card border-0 card-0">
                                              <p class="ai-testimonials-content ai-poppins-light">From start to finish, our project was handled above our expectations. The Team at Agoryum understood our goals, walked us through the process and showed us where we could go. For us, there has been no better clarity and focus provided by any development team.</p>
                                              <hr>
                                              <div class="d-inline-block pt-3">
                                                  <img class="ai-object-img" src="assets/images/client-profile-1.png" alt="" height="100%" width="70px"/>
                                                  <p class="d-inline-block client-name">Cliff H.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="card border-0 card-0">
                                              <p class="ai-testimonials-content ai-poppins-light">Working hand in hand with Agoryum, we were able to move our prototype software from initial idea to operational tool. Guided UI/UX workshops, Development Models and Prospective pathways, Agoryum cooperated with our teams to meet these necessities. With clear understanding of how business works, Agoryum guided our teams to a strong future.</p>
                                              <hr>
                                              <div class="d-inline-block pt-3">
                                                  <img class="ai-object-img" src="assets/images/client-profile-2.png" alt="" height="100%" width="70px"/>
                                                  <p class="d-inline-block client-name">Susan H.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="card border-0 card-0">
                                              <p class="ai-testimonials-content ai-poppins-light">With strict deadlines and budget constraints, Agoryum brought our product to market well before the deadline. Without compromising on quality, the Team at Agoryum masterfully moved with us along the development cycle into implementation and finally into delivery. For us, there is no better understanding of customer satisfaction executed by any other partner that we have worked with.</p>
                                              <hr>
                                              <div class="d-inline-block pt-3">
                                                  <img class="ai-object-img" src="assets/images/client-profile-3.png" alt="" height="100%" width="70px"/>
                                                  <p class="d-inline-block client-name">Paulette W.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="card border-0 card-0">
                                              <p class="ai-testimonials-content ai-poppins-light">With the need for fast development work, Agoryum was able to directly lead our team for a shift from our Amazon Web Services Platform over to the Google Cloud Platform. We needed a complete lift and shift of all our assets and when we thought it impossible, Agoryum clearly outlined how we could get it done. With the fast shift our company has been positioned as we needed and can continue to grow.</p>
                                              <hr>
                                              <div class="d-inline-block pt-3">
                                                  <img class="ai-object-img" src="assets/images/client-profile-4.png" alt="" height="100%" width="70px"/>
                                                  <p class="d-inline-block client-name">Mike C.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="card border-0 card-0">
                                              <p class="ai-testimonials-content ai-poppins-light">With our code in an outdated state, we needed a development team that would be able to spot inconsistencies in our code and optimal points for efficiencies to be enacted. WIth those clear stipulations, Agoryum was able to go through our Platform which was built on Angular, and clearly outline the path forward. Working in tandem with Agoryum's development teams, we were able to successfully find the holes in our code and effectively rebuild our Platform to the latest version. Agoryum got the job done.</p>
                                              <hr>
                                              <div class="d-inline-block pt-3">
                                                  <img class="ai-object-img" src="assets/images/client-profile-5.png" alt="" height="100%" width="70px"/>
                                                  <p class="d-inline-block client-name">Ryan S.</p>
                                              </div>
                                          </div>
                                      </div>
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
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-1.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-2.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-3.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-4.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-5.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-6.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-7.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-8.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-9.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-10.png" alt=""/>
              </div>
              <div class="col-sm-4 ai-slick-slide">
                  <img src="assets/images/brand-11.png" alt=""/>
              </div>
          </div>
      </div>
  </section>
  <!--video-section -->
  <section class="ai-video-section ai-pt ai-pb">
      <div class="container text-center text-light pt-5 pb-5">
          <div class="row">
              <h2 class="text-uppercase ai-video-heading ai-bold pb-4 m-0">THOUGHTS, BELIEFS AND THE FUTURE</h2>
              <div>
                  <a class="" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                      <img src="assets/images/Group 37.png" alt="video-icon"  width="100px"/>
                  </a>
              </div>
              <p class="ai-poppins text-uppercase ai-video-content pt-4">Digital transformation: are you ready for exponential change?</p>
          </div>
      </div>
  </section>
  <!-- Pop-up  -->
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="ai-modal-overlay">
          <div class="ai-modal-overlay-inner modal-dialog modal-fullscreen-sm-down ai-video-popup">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title ai-popup-heading ai-bold" id="exampleModalToggleLabel">THOUGHTS, BELIEFS AND THE FUTURE</h5>
                      <button type="button" class="ai-stop-video btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <iframe class="youtube-video" width="100%" height="600px" src="https://www.youtube.com/embed/ystdF6jN7hc?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="ai-stop-video ai-btn btn btn-danger ai-rajdhani-medium" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Digital Skills</button>
                  </div>
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
  </section>

  <!--end-->

@endsection