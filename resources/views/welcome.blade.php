@extends('layouts.app')

@section('content')

  <link rel="stylesheet" href="{{ asset('css/index.css') }}">

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">¡Ven y prepárate con</div>
        <div class="intro-heading text-uppercase"> nosotros!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="gallery">¡Ver galería!</a>
      </div>

    </div>
  </header>


  <!-- Cursos-->
  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center-2">
          <h2 class="section-heading text-uppercase">Cursos</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 img-fluid">
          <img class="img-fluid card-img-top" src="img/todas/unam_3.jpg" alt="">
          <div class="card-img-overlay left-overlay">
            <h4 class="card-title">Curso universidad</h4>
            <p class="card-text text-muted-3">Prepárate para la próxima convocatoria del examen de admisión UNAM.</p>
            <a href="universidad" class="btn btn-primary">Ver más</a>
            <div class="text-right color-inicio mt-2">
              <h5>Próximo inicio 28 de septiembre de 2019</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 img-fluid">
          <img class="img-fluid card-img-top" src="img/todas/omr-3723128_960_720.jpg" alt="">
          <div class="card-img-overlay right-overlay">
            <h4 class="card-title">Curso COMIPEMS</h4>
            <p class="card-text text-muted-3">Alcanza tus metas, prepárate con este curso para asegurar tus primeras opciones al examen de admisión COMIPEMS.</p>
            <a href="comipems" class="btn btn-primary">Ver más</a>
            <div class="text-center text-warning mt-2">
              <h5>Próximo inicio 28 de septiembre de 2019</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 img-fluid">
          <img class="img-fluid card-img-top" src="img/todas/studying-blue.jpg" alt="">
          <div class="card-img-overlay left-overlay">
            <h4 class="card-title">Regularización académica</h4>
            <p class="card-text text-muted-3">Todos los niveles, todas las materias, todo el año.</p>
            <a href="reg" class="btn btn-primary">Ver más</a>
            <div class="text-left text-warning mt-2">
              <h5>Inscripciones todo el año</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 img-fluid">
          <img class="img-fluid card-img-top" src="img/todas/woman2.jpg" alt="">
          <div class="card-img-overlay right-overlay">
            <h4 class="card-title">Curso de inglés</h4>
            <p class="card-text text-muted-3">Contamos con certificaciones internacionales: CAMBRIAGE.</p>
            <a href="ingles" class="btn btn-primary">Ver más</a>
            <div class="text-right color-inicio mt-2">
              <h5>Próximo inicio 28 de septiembre de 2019</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 img-fluid">
          <img class="img-fluid card-img-top" src="img/todas/ludomaticss.jpg" alt="">
          <div class="card-img-overlay left-overlay">
            <h4 class="card-title">Aula ludomática</h4>
            <p class="card-text text-muted-3">
              Conoce los conceptos básicos usados en las ciencias de la computación de manera lúdica y divertida.
            </p>
              <div class="block-center"><a href="aulud" class="btn btn-primary">Ver más</a></div>
              <div class="text-center text-warning mt-2">
                <h5>Próximo inicio 28 de septiembre de 2019</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 img-fluid">
          <img class="img-fluid card-img-top" src="img/todas/womanfinal.jpg" alt="">
          <div class="card-img-overlay right-overlay">
            <h4 class="card-title">Curso de computación</h4>
            <p class="card-text text-muted-3">Aprende la lógica del lenguaje computacional para resolución de problemas en un entorno real.</p>
            <a href="computacion" class="btn btn-primary">Ver más</a>
            <div class="text-center color-inicio mt-2">
              <h5>Próximamente...</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Contacto -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="col-lg-12 text-center-2">
              <h3 class="text-uppercase">Contáctanos</h2>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center-2">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="map-container text-center-2">
              <h6>Morelos núm. 6, Tezompa, Chalco Edo. Mex. 56624</h6>
              <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2250.8089439453056!2d-98.95851777570967!3d19.20799082969903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1b3e08868d49%3A0x25aeef651fc343f0!2sLudomatics!5e0!3m2!1ses-419!2smx!4v1543111696799" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
  </section>
  
@endsection
