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

  <section class="bg-blue">
    <div class="container">
      <div class="row per-margin-20">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
          <h3 class="section-heading text-uppercase">Felicitamos a nuestros alumnos por haber alcanzado su meta</h3>
          <h4>Curso COMIPEMS</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Jorge Garcia</h5>
            <h6>Cecyt 2 IPN</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Rodrigo Francisco</h5>
            <h6>ENP 1 UNAM</h6>
        </div>        

        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Carlos Ramírez R.</h5>
            <h6>ENP 6 UNAM</h6>
        </div>    
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Cassiel García</h5>
            <h6>ENP 6 UNAM</h6>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Miguel Francisco</h5>
            <h6>CCH Sur UNAM</h6>
        </div>        
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Angela</h5>
            <h6>CCH Sur UNAM</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Lorena Cruz</h5>
            <h6>CCH Oriente UNAM</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Ximena</h5>
            <h6>CECYT 15 IPN</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Kimberly</h5>
            <h6>ENP 6 UNAM</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Natalia</h5>
            <h6>CECYT 15 IPN</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Alondra</h5>
            <h6>ENP 6 UNAM</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Kevin</h5>
            <h6>CECYT 15 IPN</h6>
        </div>          
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Diana</h5>
            <h6>CECYT 2 IPN</h6>
        </div>          
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Emanuel</h5>
            <h6>ENP 1 UNAM</h6>
        </div>          
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Emanuel</h5>
            <h6>CECYT 3 IPN</h6>
        </div>          
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Emiliano</h5>
            <h6>CCH SUR UNAM</h6>
        </div>          
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Belem Cruz</h5>
            <h6>ENP 1 UNAM</h6>
        </div>          
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Alyande</h5>
            <h6>CECYT 7 IPN</h6>
        </div>    
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Abner</h5>
            <h6>ENP 6 UNAM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Alejandro</h5>
            <h6>ENP 5 UNAM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Oriko</h5>
            <h6>CECYT 15 IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Kevin</h5>
            <h6>CECYT 15 IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Homero</h5>
            <h6>CCH ORIENTE UNAM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Yessica</h5>
            <h6>CCH SUR UNAM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Benny</h5>
            <h6>CECYT 15 IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Daniel Picil</h5>
            <h6>CECYT 15 IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Diego</h5>
            <h6>ENP 1 UNAM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Ximena</h5>
            <h6>CECYT 15 IPN</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Darlyn</h5>
            <h6>CECYT 13 IPN</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Hans</h5>
            <h6>CECYT 15 IPN</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Vanesa Canchola</h5>
            <h6>CECYT 15 IPN</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Jesús</h5>
            <h6>CECYT 13 IPN</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Axel</h5>
            <h6>ENP 6 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Chr</h5>
            <h6>ENP 6 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Aranza</h5>
            <h6>ENP 5 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Yessica</h5>
            <h6>ENP 5 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Viviana</h5>
            <h6>CCH SUR UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Monserrat</h5>
            <h6>ENP 7 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Paola</h5>
            <h6>ENP 1 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Ani</h5>
            <h6>ENP 5 UNAM</h6>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3  ">
            <h5>Ruth</h5>
            <h6>CECYT 15 IPN</h6>
        </div>       

      </div>

    </div> 
  </section>


  <section class="bg-orange">
    <div class="container">
      <div class="row per-margin-20">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
          <h3 class="section-heading text-uppercase">La constancia es la clave del éxito</h3>
          <h4>Curso de ingreso a la universidad</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Sandra</h5>
            <h6>UAEM</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Jorge</h5>
            <h6>Facultad de Ingeniera UNAM</h6>
        </div>        

        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Valeria</h5>
            <h6>CICS UMA IPN</h6>
        </div>    
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Oswaldo</h5>
            <h6>ESIA IPN</h6>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Angel Daniel</h5>
            <h6>UAM IZTAPALAPA</h6>
        </div>        
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Alma</h5>
            <h6>UAM IZTAPALAPA</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Yamileth</h5>
            <h6>CICS UMA IPN</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Julieta</h5>
            <h6>ESCA IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Michell</h5>
            <h6>ESIME IPN</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Anell</h5>
            <h6>UAEM TOLUCA</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Frida</h5>
            <h6>UAM Iztapalapa</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Denia</h5>
            <h6>ESE IPN</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Melissa</h5>
            <h6>Normal Superior</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Tania Hernández</h5>
            <h6>ENCB IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Abigail</h5>
            <h6>Biologia UAM </h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Monserrat</h5>
            <h6>Biologia UAM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Araceli</h5>
            <h6>ESIQUIE IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Yarely</h5>
            <h6>UPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Frida</h5>
            <h6>UPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Wendy</h5>
            <h6>ESCA IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Margarita</h5>
            <h6>Economía UAM Iztapalapa</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Yuriko</h5>
            <h6>Enfermería UAM Xochimilco</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Paula Flores Alcántara</h5>
            <h6>UAEM Valle</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Elizabeth Zapata</h5>
            <h6>Turismo UAEM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Yessenia</h5>
            <h6>Ing. en comunicaciones y electrónica ESIME IPN</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Berenice</h5>
            <h6>Normal Superior</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Yoselin</h5>
            <h6>UAEM Texcoco</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Paula</h5>
            <h6>UAEM Valle</h6>
        </div>   
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Diana</h5>
            <h6>Normal Superior</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Zulma</h5>
            <h6>UAEM</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Elena</h5>
            <h6>UAEM Amecameca</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Camila</h5>
            <h6>UAEM Amecameca</h6>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
            <h5>Alma</h5>
            <h6>UAM Iztapalapa</h6>
        </div>        

      </div>
    </div> 
  </section>

  <!-- Contacto -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="map-container text-center">
            <h6>Morelos núm. 6, Tezompa, Chalco Edo. Mex. 56624</h6>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2250.8089439453056!2d-98.95851777570967!3d19.20799082969903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1b3e08868d49%3A0x25aeef651fc343f0!2sLudomatics!5e0!3m2!1ses-419!2smx!4v1543111696799" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  




@endsection
