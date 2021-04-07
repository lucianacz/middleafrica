@extends('layout')
@section('main')
 <!-- ======= Intro Section ======= -->
 <section id="intro">
          <div class="carousel-item active" style="background-image: url(/img/Rectángulo-1.svg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Travel experts in Central Africa since 2005</h2>
                <div class="container">
              </div>
              </div>
              <div class="go-down">
            <p class="startext">Start exploring our destination!</p>
            <a href="#mapanimation" class="btn-get-started scrollto animate__animated animate__fadeInUp"><i
                class="fa fa-angle-double-down"></i></a>
            </div>
            </div>
          </div>
    </div>
  </section><!-- End Intro Section -->

  <section id="mapanimation">
    <div class="controls">
      <p class="textmap">Start exploring Middle´s Africa destinations</p>
      <p class="subtextmap">Click on the country you would like to explore</p>
      <p class="textmapMobile">Touch the country you would love to visit with us!</p>
      <a id="okmap" class="business" href="#business">OK!</a>
    </div>
    
    <div class="layer" id="business">
      <div class="pin hilton-garden">
      <a href="/central_African_Republic">
        <span class="tooltiptext">Central Africa Republic</span>
      </a>
      </div>
      <div class="pin bostons">
        <a href="/cameroon">
        <span class="tooltiptext">Cameroon</span>
      </a>
      </div>
      <div class="pin charles-towne-plaza">
        <a href="/equatorial_Guinea">
        <span class="tooltiptext">Equatorial Guinea</span>
      </a>
      </div>
      <div class="pin charles-towne-center">
        <a href="/angola">
        <span class="tooltiptext">Angola</span>
      </a>
      </div>
      <div class="pin target">
        <a href="/chad">
        <span class="tooltiptext">Congo</span>
      </a>
      </div>
      <div class="pin doolittle">
        <a href="/sao_Tome">
        <span class="tooltiptext">Sao tome & Principe</span>
      </a>
      </div>

      <!-- falta principe -->
      <div class="pin giant-food">
        <a href="/democratic_Republic_of_Congo">
        <span class="tooltiptext">Democratic Republic of Congo</span>
      </a>
      </div>
      <div class="pin red-hot-blue">
        <a href="/gabon">
        <span class="tooltiptext">Gabon</span>
      </a>
      </div>
      <div class="pin motor-vehicle">
        <a href="/nigeria">
        <span class="tooltiptext">Nigeria</span>
      </a>
      </div>
      <div class="pin safeway">
        <a href="/chad">
        <span class="tooltiptext">Chad</span>
      </a>
      </div>
    
      <div class="pin pd-brown">
        <a href="/south_Sudan">
        <span class="tooltiptext">South Sudan</span>
        </a>
      </div>
    </div>
    
    <img id="mapdesktop" class="mapdesktop" src="/img/Mapa-Desktop.jpg" alt="Mapa Africa">
    <img id="mapmobile" class="mapmobile" src="/img/MA-Mapa2.jpg" alt="Mapa Africa">
  </section>

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="one" class="about">
      <div class="container uno">
        <p class="textone first">We are an enthusiastic team of <strong class="amarellotext">anthropologists,
          naturalists, and professional guides</strong> specialized
          in West and Central african destinations.</p>
          <br>
          <p class="textone second">We focus on this three basic principles</p>
      </div>
    </section>
    <section id="two" class="about">
        <div class="row">
          <div class="col-lg-6 col-xs-12"> 
            <div class="container">
              <img src="/img/Rectángulo.svg" alt="" class="img-fluid image first">
              <img src="/img/Sintítulo-1-03.png" alt="" class="img-fluid image mobile1">
              <p class="textone first features"><strong class="amarellotext">Nature</strong></p>
              <div class="overlay">
                <div class="text">Nature</div>
              </div>
              <div class="triangle1"></div>
            </div>
          </div>
          <div class="col-lg-6 col-xs-12 ceremonies">
            <div class="container">
              <img src="/img/CEREMONIS.png" alt="" class="img-fluid image second">
              <img src="/img/Sintítulo-1-02.png" alt="" class="img-fluid image mobile2">
              <p class="textone first features2"><strong class="amarellotext">Ceremonies</strong></p>
              <div class="overlay">
                <div class="text">Ceremonies</div>
              </div>
            </div>
            <div class="triangle2"></div>
          </div>
    </section>

    <section class="accomodations home">
      <p class="textone explore"><strong class="amarellotext">Explore with us</strong></p>
      <div uk-slider="center: true">
          <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
              <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                  <li>
                      <div class="uk-card uk-card-default">
                          <div class="uk-card-media-top">
                              <img class="acoimage" src="/img/KEMPINSKIHOTELNDJAMENA.png" alt="">
                          </div>
                          <div class="uk-card-body">
                              <p class="nametext">Hilton hotel N Djamena</p>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="uk-card uk-card-default">
                          <div class="uk-card-media-top">
                              <img class="acoimage" src="/img/HILTONHOTELNDJAMA.png" alt="">
                          </div>
                          <div class="uk-card-body">
                              <p class="nametext">Hilton hotel N Djamena</p>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="uk-card uk-card-default">
                          <div class="uk-card-media-top">
                              <img class="acoimage" src="/img/zakoumanationalpark.png" alt="">
                          </div>
                          <div class="uk-card-body">
                              <p class="nametext">Zakouma-National.Park</p>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      
          <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
      </div>
  </section>

     <!-- ======= Facts Section ======= -->
     <section class="partree">
      <div class="container bannerstexto">
        <div class="row">
          <div class="col-lg-6 col-xs-12 culturaltext">
            <p class="textone">We strongly believe in cultural diversity. <br>
              We aim to protect the worlds last tribus through
              <strong class="amarellotext">responsible tourism.</strong></p>
          </div>
          <div class="col-lg-6 col-xs-12 culturaltext">
            <img class="imageparrafo" src="/img/Webcompleta-07.png" alt="">
          </div>
        </div>  
      </div>
      <div class="circulo1"></div>
    </section><!-- End Facts Section -->

    <section class="partree">
      <div class="container bannerstexto2">
        <div class="row">
          <div class="col-lg-6 col-xs-12 culturaltext">
            <img class="imageparrafo" src="/img/Webcompleta-08.png" alt="">
          </div>
          <div class="col-lg-6 col-xs-12 culturaltext">
            <p class="textone">After many years of working in Central West Africa, we have become experts in 
              <strong class="amarellotext">11 Afrcian destinations</strong> where we can organize interesting tours for your business</p>
          </div>
        </div>
      </div>
      <div class="circulo2"></div>
    </section><!-- End Facts Section -->


    <!-- ======= Team Section ======= -->
    <section id="mainAssets">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Our main assets</h3>
          <div class="container">
              <div class="row">
                <div class="col-lg-3 col-xs-12">
                  <img src="/img/KITUI-02.svg" alt="">
                  <p class="setext">Expertise</p>
                </div>
                <div class="col-lg-3 col-xs-12">
                  <img src="/img/KITUI-05.svg" alt="">
                  <p class="setext">Eficciency</p>
                </div>
                <div class="col-lg-3 col-xs-12">
                  <img src="/img/KITUI-04.svg" alt="">
                  <p class="setext">Flexibility</p>
                </div>
                <div class="col-lg-3 col-xs-12">
                  <img src="/img/KITUI-03.svg" alt="">
                  <p class="setext">Trust</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section><!-- End Team Section -->

    <section id="team" class="country_info about">
      <div class="row sentenceletters">
          <div class="col-lg-5 col-xs-12">
            <div class="expertsbanner">
              <p class="meet">Meet our team of</p>
              <p class="experts">Experts</p>
              <p>We all share a passion for this unexplored part of the African continent and we believe that well-managed tourism is the key for protecting and mentaining the delicate natural eco-systems, cultural diversity and traditions while offering a beter future for the local inhabitants of these areas.</p>
            </div>
          </div>
          <div class="col-lg-7 col-xs-12 members">
              <div uk-slider="center: true;autoplay: true;autoplay-interval: 4000">
                <div class="uk-position-relative uk-visible-toggle uk-light texteam" tabindex="-1">
                  <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                      <li>
                        <div class="row sentenceletters">
                          <div class="col-lg-6 col-xs-12">
                            <div class="uk-card uk-card-default home">
                              <div class="uk-card-media-top">
                                <img class="imgteam" src="/img/Rectángulo34.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-xs-12">
                              <div class="uk-card-body">
                                  <p class="sentence">I will continue what me and The Monument of Freedom renovation foundation started back in 1998</p>
                                  <h3 class="uk-card-title name">-Willy</h3>
                                  <p class="rol">Co-Founder</p>
                              </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row sentenceletters">
                          <div class="col-lg-6 col-xs-12">
                            <div class="uk-card uk-card-default home">
                              <div class="uk-card-media-top">
                                <img class="imgteam" src="/img/unnamed-1.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-xs-12">
                              <div class="uk-card-body">
                                  <p class="sentence">Juan is the Middle Aficas co-founder and expert in central African tourism. Willy is middle Africa director and lives in Douala since 2002</p>
                                  <h3 class="uk-card-title name">-Juan</h3>
                                  <p class="rol">Co-Founder</p>
                              </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row sentenceletters">
                          <div class="col-lg-6 col-xs-12">
                            <div class="uk-card uk-card-default home">
                              <div class="uk-card-media-top">
                                <img class="imgteam" src="/img/Rectángulo34.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-xs-12">
                              <div class="uk-card-body">
                                  <p class="sentence">I will continue what me and The Monument of Freedom renovation foundation started back in 1998</p>
                                  <h3 class="uk-card-title name">-Willy</h3>
                                  <p class="rol">Co-Founder</p>
                              </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row sentenceletters">
                          <div class="col-lg-6 col-xs-12">
                            <div class="uk-card uk-card-default home">
                              <div class="uk-card-media-top">
                                <img class="imgteam" src="/img/Rectángulo34.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-xs-12">
                              <div class="uk-card-body">
                                  <p class="sentence">I will continue what me and The Monument of Freedom renovation foundation started back in 1998</p>
                                  <h3 class="uk-card-title name">-Willy</h3>
                                  <p class="rol">Co-Founder</p>
                              </div>
                          </div>
                        </div>
                      </li>
                  </ul>
                </div>
                
              </div>
            </div>
        </div>
    </section>

    <section class="about3">
      <div class="cont">
          <div class="slider"></div>
          <ul class="nav"></ul>
      </div>
      <div data-target='left' class="side-nav side-nav--left"></div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Get in touch with us</h3>
        </div>

        <div class="form">
          <form action="/contacto" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="company" class="form-control" id="company" placeholder="Company" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full name" data-rule="minlen:4" data-msg="Please a ful name"/>
                <div class="validate"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="phone" id="phonenumber" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter a phone number" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Your message/question here"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send</button></div>
          </form>
          <img src="/img/Webcomplta-10.png" class="contactimage" alt="">
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection