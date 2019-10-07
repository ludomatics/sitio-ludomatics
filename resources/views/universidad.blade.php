@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/universidad.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="container">
        <div class="centered">
          <h2 class="section-heading text-uppercase">Cursos de preparación a educación superior</h2>
        </div>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="row text-center-2">
          <h4>¿Cómo trabajamos el curso?</h4>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Iniciar con un examen diagnóstico te permite reconocer tus fortalezas y debilidades por lo que en Ludomatics partimos de ello para conocerte.</p>
              </div>
            </div>
            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Impartimos todo el cojunto de conocimientos que abordan las guia temáticas de la UNAM, el IPN, la UAM y la UAEM. Depende de tu elección perfilamos un plan de trabajo enfocado en tus obejtivos.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Monitoreamos tu avance con exámenes de simulación de acuerdo a la institución de educación superior que desees entrar y logres el puntaje necesario para el ingreso a tus primeras opciones.</p>
              </div>
            </div>
            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Contamos con herramientas multimedia y plataformas educativas que sirven de apoyo para tu proceso de preparación.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row per-margin">
          <h3 class="section-heading">Te preparamos para las principales convocatorias</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 center-image">
            <a href="universidad/unam"><img class="rounded-circle img-fluid img-date" src="img/escudos/unam.jpg" alt=""></a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 center-image">
            <a href="universidad/ipn"><img class="rounded-circle img-fluid img-date" src="img/escudos/ipn.jpg" alt=""></a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 center-image">
            <a href="universidad/uam"><img class="rounded-circle img-fluid img-date" src="img/escudos/uamFinal.png" alt=""></a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 center-image">
            <a href="universidad/uaem"><img class="rounded-circle img-fluid img-date" src="img/escudos/escudouaem.jpg" alt=""></a>
          </div>
			    <div class="col-lg-3 col-md-6 col-sm-12 center-image">
            <a href="universidad/exanii"><img class="rounded-circle img-fluid img-date" src="img/escudos/EXANI-II.png" alt=""></a>
          </div>

			    <div class="col-lg-3 col-md-6 col-sm-12 center-image">
            <a href="universidad/militar"><img class="rounded-circle img-fluid img-date" src="img/escudos/militar.png" alt=""></a>
          </div>

        </div>

	 </div>

    </section>

@endsection
