@extends('layout')


@section("main")
    @foreach ($paises as $pais)



    <section class="country_info about">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
              <img src="assets/img/Flag_of_Chad.png" alt="" class="flagcountry">
              <div uk-slider="center: true;">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                        <li>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                    <img src="images/photo.jpg" alt="">
                                </div>
                                    <h3 class="uk-card-title">Why {{$pais->nombre}}?</h3>
                                    <p class="subtitle-country">{{$pais->descripcion}}</p>
                              </div>
                        </li>
                    </ul>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
            <button class="btn btn-warning">Hightlights</button>
            <ul class="highlight-section">
                @foreach ($pais->iconos as $icono)
                  <li class="icon-highlight"><img src="/storage/upload/{{$icono->icono}}" alt="imagen de icono">
                  <p>{{$icono->titulo}}</p>
                  </li>
                  <li class="icon-highlight"><img src="/storage/upload/{{$icono->icono2}}" alt="imagen de icono">
                  <p>{{$icono->texto_icono2}}</p>
                  </li>
                  <li class="icon-highlight"><img src="/storage/upload/{{$icono->icono3}}" alt="imagen de icono">
                  <p>{{$icono->texto_icono3}}</p>
                  </li>
                  <li class="icon-highlight"><img src="/storage/upload/{{$icono->icono4}}" alt="imagen de icono">
                  <p>{{$icono->texto_icono4}}</p>
                  </li>
                  <li class="icon-highlight"><img src="/storage/upload/{{$icono->icono5}}" alt="imagen de icono">
                  <p>{{$icono->texto_icono5}}</p>
                  </li>
                  <li class="icon-highlight"><img src="/storage/upload/{{$icono->icono6}}" alt="imagen de icono">
                  <p>{{$icono->texto_icono6}}</p>
                  </li>
                 @endforeach
        
            </ul>
            
        </div>
          <div class="col-lg-6 col-xs-12 section-slideshow-countries">
              <div class="uk-position-relative" uk-slideshow="animation: fade">

                <ul class="uk-slideshow-items slideshow-countries">
                  @foreach ($pais->lugarTuristico as $lugares)
                    <li>
                        <img src="/storage/upload/{{$lugares->foto1}}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="/storage/upload/{{$lugares->foto2}}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="/storage/upload/{{$lugares->foto3}}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="/storage/upload/{{$lugares->foto4}}" alt="" uk-cover>
                    </li>
                  @endforeach
                </ul>
            
                <div class="uk-position-bottom-center uk-position-small">
                <ul class="uk-thumbnav">
                @foreach ($pais->lugarTuristico as $lugares)    
                        <li uk-slideshow-item="0"><a href="#"><img src="/storage/upload/{{$lugares->foto4}}" width="100" alt=""></a></li>
                        <li uk-slideshow-item="1"><a href="#"><img src="/storage/upload/{{$lugares->foto4}}" width="100" alt=""></a></li>
                        <li uk-slideshow-item="2"><a href="#"><img src="/storage/upload/{{$lugares->foto4}}" width="100" alt=""></a></li>
                  @endforeach
                      </ul>
                </div>
            </div>
            </div>
        </div>
    </section>


    <div>

<div  class="uk-position-relative uk-visible-toggle uk-light country-highlights" tabindex="-1">
  <ul class="uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-4@l uk-grid sliderpais">
  @foreach ($pais->hospedajes as $hospedaje)     
  <li>
            <div class="uk-card uk-card-default paisresumen">
                <div class="uk-card-media-top">
                    <img src="/storage/upload/{{$hospedaje->foto1}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{$hospedaje->descripcion_foto1}}</h3>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default paisresumen">
                <div class="uk-card-media-top">
                    <img src="/storage/upload/{{$hospedaje->foto2}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{$hospedaje->descripcion_foto2}}</h3>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default paisresumen">
                <div class="uk-card-media-top">
                    <img src="/storage/upload/{{$hospedaje->foto3}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{$hospedaje->descripcion_foto3}}</h3>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

<section class="bannertext">
            <header class="section-header">
                <h3 class="titulobannercountry">Vehicles</h3>
                <p class="pbannercountry">We have the best quality specialized vehicles to travel different surfaces and discover the best that Africa can offer us</p>
            </header>
                <img class="bannercountry" src="/img/CHAD2.png" alt="">
        </section>      


<section>
<div class="container">

  <div class="row row-gallery">
    <p> TRIBUS </p>
  @foreach ($pais->tribus as $tribu)
    <a href="/storage/upload/{{$tribu->foto1}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="/storage/upload/{{$tribu->foto1}}" class="img-fluid rounded">
    </a>
    <a href="/storage/upload/{{$tribu->foto2}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="/storage/upload/{{$tribu->foto2}}" class="img-fluid rounded">
    </a>
    <a href="/storage/upload/{{$tribu->foto3}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="/storage/upload/{{$tribu->foto3}}" class="img-fluid rounded">
    </a>
    @endforeach
  </div>

  <div class="row row-gallery">
  <p> PAISES </p>
  @foreach ($pais->naturalezas as $naturaleza)
    <a href="/storage/upload/{{$naturaleza->foto1}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="/storage/upload/{{$naturaleza->foto1}}" class="img-fluid rounded">
    </a>
    <a href="/storage/upload/{{$naturaleza->foto2}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="/storage/upload/{{$naturaleza->foto2}}" class="img-fluid rounded">
    </a>
    <a href="/storage/upload/{{$naturaleza->foto3}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="/storage/upload/{{$naturaleza->foto3}}" class="img-fluid rounded">
    </a>
  
    @endforeach

  </div>
</div>

</section>  
  @endforeach
    @endsection

    

    