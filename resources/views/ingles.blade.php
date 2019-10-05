@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/ingles.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="row centered">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h2 class="section-heading text-uppercase">Cursos de Inglés</h2>
        </div>
      </div>
    </div>

	  
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center-2">
            <h3 class="section-heading text-uppercase">Ven atender inglés con nosotros de forma divertida y eficiente. Tenemos cursos para niños mayores de 4 años así como para adolescentes y adultos.</h3>
          </div>
        </div> 
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 img-resp" >
            <div>
              <h4 class="card-title">Para niños</h4>

              <ul card-text text-muted justify-par>
               <li>Los temas que abordamos son propuestos por los niños .</li>
                <li>Ellos aprenden de forma lúdica e interactiva, a través de juegos, cuentos, canciones y diferentes técnicas didácticas.</li>
                <li>Horarios de fin de semana de 10 a 14 horas y de 14:30 a 18:30</li>
               </ul>
           
			
				<h4 class="card-title">Adolescentes y adultos</h4>
             
                   <ul>
                  
				   <li>Contamos con herramientas multimedia para estimular el aprendizaje</li>
                  <li>Grupos reducidos para con la finalidad de fomentar la atención personalizada</li>
                  <li>Horarios de fin de semana de 10 a 14 horas y de 14:30 a 18:30</li>
	       
				   </ul>
				
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 text-center-2">
            <img class="english-people" src="img/todas/people-2557396__340.jpg">
          </div>
        </div>
      </div>
    </section>

    <section class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center-2">
            <h2 class="section-heading text-uppercase">¡No pierdas la oportunidad para certificarte!</h2>
            <h3 class="section-subheading">Ofrecemos certificaciones para todas las edades</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 text-center-2">
            <img src="img/iconos/certificado.svg" class="certificado">
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 list-level">
            <h4>Inglés para niños</h4>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <img src="img/vinnetas/checked3.png" class="white-check">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-10 cert-list">
                <a href=""><span class="first-part">Movers </span></a> <span class="second-part">&nbsp &nbsp 4-8 años</span>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <img src="img/vinnetas/checked3.png" class="white-check">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-10 cert-list">
                <a href=""><span class="first-part">Flyers </span></a> <span class="second-part">&nbsp &nbsp 8-12 años</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 list-level">
            <h4>Inglés para adolescentes y adultos</h4>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <img src="img/vinnetas/checked3.png" class="white-check">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-10 cert-list">
                <a href=""><span class="first-part">KET </span></a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <img src="img/vinnetas/checked3.png" class="white-check">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-10 cert-list">
                <a href=""><span class="first-part">PET </span></a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <img src="img/vinnetas/checked3.png" class="white-check">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-10 cert-list">
                <a href=""><span class="first-part">FCE </span></a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center-2">
            <h2 class="section-heading text-uppercase">¿Qué niveles manejamos?</h2>
          </div>
        </div>
        <div class="row card-niveles">
          <div class="col-lg-6 col-md-12 col-sm-12 card-center">
            <div class="card card-sized">
              <img src="img/fondos/kids_ingles.jpg" class="kids-ingles card-img-top">
              <div class="card-body">
                <h5 class="card-title">Inglés para niños</h5>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>PRE-A1</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    4 meses
                  </div>
                </div>  
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>A1</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    4 meses
                  </div>
                </div>  
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>A2</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    4 meses
                  </div>
                </div>  
              </div>
            </div> 
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 card-center">
            <div class="card card-sized">
              <img src="img/fondos/teens_ingles.jpg" class="kids-ingles card-img-top">
              <div class="card-body">
                <h5 class="card-title">Inglés para adolescentes y adultos</h5>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>A1</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    2 meses
                  </div>
                </div>  
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>A2</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    4 meses
                  </div>
                </div>  
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>B1</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    4 meses
                  </div>
                </div>  
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h6>B2</h6>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    4 meses
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

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
                <p>Reproducimos charlas de forma natural: escuchando y hablando. Igual que como se aprende la lengua nativa.</p>
              </div>
            </div>
            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Recreamos situaciones vivenciales a través de obras de teatro, para que el estudiante se involucre en situaciones inmersivas para favorecer su aprendizaje.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">

          
            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Contamos con el mayor activo que podemos ofrecer: nuestro talento humano. Profesores comprometidos y de excelencia académica.  </p>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section>


@endsection
