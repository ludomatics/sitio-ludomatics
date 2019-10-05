@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="row centered">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h3 class="section-heading text-uppercase">¡Se parte de nuestra COMUNIDAD!</h3>
          <h4>he aquí un poco de lo que hemos logrado</h4>
        </div>
      </div>
    </div>

    <section>
      <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4"> Galería </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
            <img class="img-fluid" src="{{asset('img/fotos/verano2018_07.jpg')}}" alt="">
          </div>

          <div class="col-md-4">
            <h3 class="">Un poco de nuestros cursos de verano ...</h3>
            <p>
              En cada curso de verano tenemos diferentes temáticas, desde arte, ciencia, programación, robótica, salud y cuidado del medio ambiente.
            </p>
          </div>

        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12 col-sm-12">        
            <h3>Actividades lúdicas y destreza mental</h3>
              <p>A través del juego hacemos que los niños desarrollen habilidades como la visioespacialidad, la memoria, las facultades lingüísticas, la lógica y el razonamiento. 
                Contamos con recursos para todas las edades y formas de aprender, los niños pueden trabajar tanto en equipos de cómputo con software educativo como con material didáctico como regletas, rompecabezas, tangram, etc.
              </p>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_01.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_03.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_30.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_16.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_09.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_21.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_05.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_13.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_17.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_18.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_22.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_23.jpg')}}" alt=""></a>
            </div>
          </div>

        </div>  
        
        <div class="row">
          <div class="col-lg-12 col-sm-12">        
            <h3>Arte</h3>
            <p>
              Saber de ciencia y tecnología es importante y lo sabemos, pero también es importante el arte ya que a tráves de él los niños despiertan su creatividad.
            </p>
          </div>  

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_04.jpg')}}" alt=""></a>
            </div>
          </div> 

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_06.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_08.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_19.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_15.jpg')}}" alt=""></a>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-12 col-sm-12">        
            <h3> Actividades recreativas </h3>
            <p>
              Que los niños se integren y diviertan con sus compañeros es importante para nosotros y es por ello que siempre tenemos un tiempo destinado para que puedan jugar y convivir de manera sana y segura. Las actividades recreativas van desde paseos en bicicleta, las atrapadas, etc.
            </p>
          </div>  
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_10.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_11.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_12.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_14.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_25.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_26.jpg')}}" alt=""></a>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-12 col-sm-12">        
            <h3>Inglés</h3>
            <p>
              Hoy en día saber inglés es un habilidad fundamental, abre muchas puertas hacía el conocimiento y por ello es importante aprenderlo y que mejor que empezar desde pequeños, en Ludomatics nos preocupamos por ello y tenemos grupos de inglés para pequeños y grandes.
            </p>
          </div>  
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_02.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_20.jpg')}}" alt=""></a>
            </div>
          </div>

        </div>  

        <div class="row">
          <div class="col-lg-12 col-sm-12">        
            <h3>Robótica</h3>
            <p>
              La robótica dentro de la enseñanza de las matemáticas es una herramienta valiosa para el desarrollo de un pensamiento matemático por lo que en Ludomatics nos interesa el desarrollo de esta área. Para ellos utilizamos programas reconocidos como Lego education, CODE, ARDUINO, entre otros.
            </p>
          </div>  
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_27.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_28.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_29.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_31.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_32.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_33.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_34.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_35.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_36.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_37.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_39.jpg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_40.jpg')}}" alt=""></a>
            </div>
          </div>

        </div>

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-6">
            <h3 class="">Curso de preparácion y regularización</h3>
            <p>
              Contamos con cursos intensivos de preparación para examen de admisión a media superior y superior. Te preparamos para el examen COMIPEMS y también para los exámenes tipo UNAM, IPN, UAM, UAEM o cualquier otro a nivel superior.
            </p>
            <p>
              Contamos con más 8 años de experiencia, contamos con profesores de la UNAM, IPN y UAM.
            </p>
          </div>

          <div class="col-md-6">
            <img class="img-fluid img-reg" src="{{asset('img/fotos/verano2018_41.jpeg')}}" alt="" align="right">
          </div>

        </div>
        <!-- /.row -->

        <div class="row">

          <div class="col-lg-12 col-sm-12">        
            <h3>COMIPEMS</h3>
            <p>
              Cada año decenas de jóvenes se quedan en sus primeras opciones de bachillerato gracias a nuestros curso intensivo y a el personal que tenemos para apoyarlos en las distintas asignaturas.
            </p>
          </div>  

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_41.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_42.jpeg')}}" alt=""></a>
            </div>
          </div>

        </div>  

        <div class="row">
          <div class="col-lg-12 col-sm-12">        
            <h3>Universidad</h3>
            <p>
              Conocemos el tipo de exámenes y preguntas de las Universidades más importante del país y gracias a ello hemos ayudado a muchisímos jóvenes a cumplir sus metas y estudiar la carrera de su preferencia. ¡y tú puedes ser uno más!.
            </p>
          </div>  

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_43.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_44.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_45.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_46.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_47.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_48.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_49.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_50.jpeg')}}" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/fotos/verano2018_51.jpeg')}}" alt=""></a>
            </div>
          </div>

        </div>  

      </div>  

    </section>


@endsection
