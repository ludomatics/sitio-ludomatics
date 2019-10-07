@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/regularizacion.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="row centered">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h3 class="section-heading text-uppercase">Regularización académica</h3>
          <h4>Todos los niveles</h4>
        </div>
      </div>
    </div>
    
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 text-center">
            <h1 class="my-4">Ponemos nuestra ayuda al alcance de tus manos</h1>      
          </div>  
        </div>
      </div>
    </section>

    <section class="bg-blue">
      <div class="container">
        <div class="row per-margin-20">
            <!-- Lecto-escritura, español y matemáticas -->
          <div class="col-lg-12 col-md-12 col-sm-12 text-center-2">
            <h2 class="section-heading text-uppercase">Regularización kids</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center text-center">
            <img src="img/iconos/lego.svg" width="200">            
              <h5>Lecto-escritura</h5>
              <p>
                Conoce nuestras metodologías para hacer que nuestros alumnos aprendan a leer y escribir en un mes.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center text-center">
            <img src="img/iconos/data.svg" width="200">            
              <h5>Español</h5>
              <p>
                Trabajamos conceptos básicos como tiempos verbales, sinónimos, antónimos, adverbios,  conjunciones, disyunciones, etc.
              </p>
            </div>
          </div> 
          <div class="col-lg-4 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center image-center text-center">
            <img src="img/iconos/abacus.svg" width="200">            
              <h5>Matemáticas</h5>
              <p>
               Hacemos que los alumnos refuercen lo aprendido en sus aulas y cualquier duda es resuelta por nuestros maestros capacitados.
              </p>
            </div>
          </div>       
        </div>
      </div> 
    </section>



    <section>
      <div class="container">        
        <div class="row">
          <div class="col-lg-12 col-12 col-md-12 text-center">
            <h1 class="my-4">Regularización para secundaria y bachillerato </h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 mt-5">
            <img class="img-fluid" src="img/todas/library-3803000_1920.jpg" alt="">
          </div>

          <div class="col-md-4">
            <h3 class="my-3">Nuestros servicios</h3>
            <p>Nos enfocamos en el estudiante de forma personalizada con la finalidad de dectectar las áreas en las que se debe trabajar, para  desarrollar una estrategia enfocada en su necesidad de aprendizaje. </p>
            <h3 class="my-3">Te  ayudamos en:</h3>
            <ul>
              <li>Reforzar todas las áreas de conocmiento: química, física, biología, matemáticas, inglés, español, historia etc.</li>
              <li>Prepararte para acreditar los exámenes extraodinarios del bachillerato o secundaria. </li>
              <li>Si eres politécnico, te ayudamos para ponerte a punto en tu examen de título de suficiencia </li>
              
            </ul>
          </div>

        </div>
        <!-- /.row -->

    </section>


@endsection