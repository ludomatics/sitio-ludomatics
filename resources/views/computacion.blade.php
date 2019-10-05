@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/computacion.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="row centered">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h2 class="section-heading text-uppercase">Cursos de computación</h2>
        </div>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center-2">
            <h2 class="section-heading ">Desarrolla una de las habilidades más demandadas de la actualidad: codificar</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 text-center-2">
             <img class="img-fluid" src="img/fondos/coffe_table.jpg" alt="">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 img-resp" >
            <div>
             
              <p class="card-text text-muted justify-par">
                  Vivimos en el contexto histórico de a computación y la electrónica por lo que el 
				  conocimiento de programar  es indispensable en el mundo de hoy, y aprender a codificar es una 
				  de las cosas más valiosas y útiles que puedes hacer. Ya sea que estés 
				  cursando una carrera, o seas un profresional que quiere mejorar sus habilidades o simplemente quieres aprender
				  de este tema.Este es el mejor momento para aprender y nuestro plan de trabajo ofrece todo para que estés al día. </p>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row text-center-2">
          <div class="row text-center-2">
          
            <h2 class="section-subheading">Crea y diseña aplicaciones a partir de tu imaginación</h2>
          </div>
        </div>
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Fundamentos de 
          <small>Programación</small>
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
            <img class="img-fluid" src="img/computacion/whiteboard-849812_960_720.jpg" alt="">
          </div>

          <div class="col-md-4">
            <p>En este curso aprenderás a resolver  algoritmos, los cuales son traducidos a un lenguaje de programación. Los únicos conocimientos que necesitas es saber usar Windows y navegar en Internet.</p>
            <h3 class="my-3">Temario</h3>
            <ul>
              <li>Lenguajes de programación.</li>
              <li>Elementos básicos de la programación estructurada.</li>
              <li>Control de flujo de sentencias.</li>
              <li>Arreglo de datos</li>
			  <li>Algoritmos</li>
			  <li>Elementos básicos de la programación orientada a objetos</li>
			  <li>Encapsulamiento</li>
			  <li>Herencia</li>
			  <li>Polimorfismo</li>
            </ul>
          </div>

        </div>
        <!-- /.row -->

        
      </div>
    </section>

    <section>
      <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Java 
          <small>Orientada a Objetos</small>
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
            <img class="img-fluid" src="img/computacion/java-2327538_1920.png" alt="">
          </div>

          <div class="col-md-4">
            <h3 class="my-3">Temario</h3>
            <p>Este curso es para aquellos que estén interesados en programar con un paradigma orientado a objetos. Es necesario saber Fundamentos de Programación.</p>
            
            <ul>
              <li>La tecnología Java</li>
              <li>Estructura del lenguaje</li>
              <li>Programación orientada a objetos en Java</li>
              <li>Arreglos</li>
			  <li>Uso de herencia en Java</li>
			  <li>Polimorfismo</li>
            </ul>
          </div>

        </div>
        <!-- /.row -->

        
      </div>
    </section>

    <section>
      <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Herramientas 
          <small>Multimedia</small>
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
            <img class="img-fluid" src="img/computacion/computer-1209104_1920.jpg" alt="">
          </div>

          <div class="col-md-4">
            <h3 class="my-3">Project Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <h3 class="my-3">Project Details</h3>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Dolor Sit Amet</li>
              <li>Consectetur</li>
              <li>Adipiscing Elit</li>
            </ul>
          </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4">Related Projects</h3>

        <div class="row">

          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="img/template_image/500x300.png" alt="">
            </a>
          </div>

          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="img/template_image/500x300.png" alt="">
            </a>
          </div>

          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="img/template_image/500x300.png" alt="">
            </a>
          </div>

          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="img/template_image/500x300.png" alt="">
            </a>
          </div>

        </div>
        <!-- /.row -->
      </div>
    </section>


@endsection
