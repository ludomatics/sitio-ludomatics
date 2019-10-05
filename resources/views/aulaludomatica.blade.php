@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/aulud.css')}}">

    <!-- Header -->
    <header class="masthead-2">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">¡ciencia, arte, matemáticas y</div>
          <div class="intro-heading text-uppercase">diversión!</div>
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <div class="row text-center-2">
          <div class="col-12">
            <h3>¿Qué es el aula Ludomatica?</h3>
            <p>Es  una aula interactiva que consta de una sala de cómputo,
               material de LEGO© y juegos didácticos para introducir a los niños en la
               construcción de robots, así como contenidos de programación computacional
               orientados a su edad para la adquisición de habilidades lógico- matemáticas a través 
				de la lúdica.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-blue">
      <div class="container">
        <div class="row per-margin-20">
		
          <div class="col-lg-12 col-md-12 col-sm-12 text-center-2">
            <h2 class="section-heading text-uppercase">Ven y cosntruye un robot.</h2>
            <h4>Nuestra metodología. </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center">
            <img src="img/iconos/abacus.svg" width="200">            
              <h5>Desarrollo de habilidades lógico-matemáticas</h5>
              <p>
              Reforzamos las áreas de lingüística, atención y memoria por medio del juego y la creatividad. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center">
            <img src="img/iconos/data.svg" width="200">            
              <h5>Introducción a la programación</h5>
              <p>
             Trabajamos conceptos como reconocimiento de patrones, algoritmos, secuencias,programación etc.  </p>
            </div>
          </div> 
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center">
            <img src="img/iconos/lego.svg" width="200">            
              <h5>Robotica con Lego</h5>
              <p>
              Iniciamos con maquinas simples como el funcionamiento de una polea o una palanca hasta llegar a construir y programar un robot de LEGO©.  </p>
            </div>
          </div> 
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center">
            <img src="img/iconos/brainstorm.svg" width="200">            
              <h5>Estimulación del pensamiento creativo</h5>
              <p> Aplicamos métodos basados en el trabajo en equipo y en el diseño de soluciones centradas en la persona. 
                     </p>
            </div>
          </div>           
        </div>
      </div> 
    </section>

	
    <section class="bg-pink">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 video-container">
            <iframe class="ludo-video" src="https://www.youtube.com/embed/X5Wkp1gsNik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 text-pinkbg">
           <h2 class="section-heading text-uppercase">¿Por qué todo el mundo debería saber programar?</h2>
           
          </div>
        </div>
      </div>
    </section>

@endsection
