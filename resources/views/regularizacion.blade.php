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
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Regularización. Niveles: secundaria y bachillerato.
          
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
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
