@extends('layouts.app')

@section('headers')
  <link rel="stylesheet" href="{{asset('css/comipems.css')}}">
@endsection

@section('content')
    
    <!-- Header -->
    <div class="bg">
      <div class="container">
        <div class="centered">
          <h2 class="section-heading text-uppercase">Cursos de preparación a media superior</h2>
        </div>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center-2">
            <h2 class="section-heading text-uppercase">Curso COMIPEMS-UNAM</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 text-center-2">
            <img class="people" src="img/todas/people-2557396__340.jpg">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 img-resp" >
            <div>
              <h4 class="card-title">¿Sabías que solo el 32% se queda en la prepa de su preferencia?</h4>
              <p class="card-text justify-par">
                La Comisión Metropolitana de Instituciones Públicas de Educación Media Superior (COMIPEMS) publicó en 2017, las presferencias de los aspirantes a educación media. Los resutados fueron:</p>

                 <ul>
                 	<li>UNAM 51.1% de preferencia equivalente a 177 876 jóvenes que la solicitaron y sólo admitió a 36 000 es decir el 20.23%,</li>
                 	<li>El IPN  aceptó a 20 000 .</li>
                 </ul>

              <p class="card-text  justify-par">
                Sin duda la preparación para tu examen es muy importante por lo que debes considerarla con anticipación, disciplina, trabajo constantes. Acampañada de una  buena orientación  y seguimiento de tu desempeño de forma personalizada por parte de nostros.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light" id="escuelas">
      <div class="container">
        <div class="row text-center-2">
          <h3>Te presentamos los puntajes de las escuelas de nivel medio superior más solicitadas</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">ENP</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/one.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.1</span>
                    <span class="nom-escuela">Gabino Barreda</span>
                  </td>
                  <td>104</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/two.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.2</span>
                    <span class="nom-escuela">Erasmo Castellanos</span>
                  </td>
                  <td>110</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/three.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.3</span>
                    <span class="nom-escuela">Justo Sierra</span>
                  </td>
                  <td>106</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/four.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.4</span>
                    <span class="nom-escuela">Vidal Castañeda Nájera</span>
                  </td>
                  <td>99</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/five.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.5</span>
                    <span class="nom-escuela">José Vasconcelos</span>
                  </td>
                  <td>107</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/six.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.6</span>
                    <span class="nom-escuela">Antonio Caso</span>
                  </td>
                  <td>114</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/seven.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.7</span>
                    <span class="nom-escuela">Ezequiel A. Chávez</span>
                  </td>
                  <td>102</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/eight.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.8</span>
                    <span class="nom-escuela">Miguel E. Schulz</span>
                  </td>
                  <td>102</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/nine.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Preparatoria No.9</span>
                    <span class="nom-escuela">Pedro de Alba</span>
                  </td>
                  <td>110</td>
                </tr>
              </tbody>
            </table>

          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <h3 class="section-heading text-uppercase text-center">CCH </h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/one.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CCH</span>
                    <span class="nom-escuela">Azcapotzalco</span>
                  </td>
                  <td>95</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/two.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CCH</span>
                    <span class="nom-escuela">Naucalpan</span>
                  </td>
                  <td>91</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/three.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CCH</span>
                    <span class="nom-escuela">Vallejo</span>
                  </td>
                  <td>96</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/four.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CCH</span>
                    <span class="nom-escuela">Oriente</span>
                  </td>
                  <td>97</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/five.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CCH</span>
                    <span class="nom-escuela">Sur</span>
                  </td>
                  <td>99</td>
                </tr>
                </tr>
              </tbody>
            </table>

          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">

            <h3 class="section-heading text-uppercase text-center">IPN</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/one.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.1</span>
                    <span class="nom-escuela">Gonzalo Vázquez</span>
                  </td>
                  <td>89</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/two.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.2</span>
                    <span class="nom-escuela">Bernard P.</span>
                  </td>
                  <td>89</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/three.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.3</span>
                    <span class="nom-escuela">Ramírez R.</span>
                  </td>
                  <td>95</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/four.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.4</span>
                    <span class="nom-escuela">Cárdenas</span>
                  </td>
                  <td>86</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/five.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.5</span>
                    <span class="nom-escuela">Benito Juárez</span>
                  </td>
                  <td>91</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/six.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.6</span>
                    <span class="nom-escuela">Miguel Othón</span>
                  </td>
                  <td>94</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/seven.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.7</span>
                    <span class="nom-escuela">Cuauhtémoc</span>
                  </td>
                  <td>92</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/eight.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.8</span>
                    <span class="nom-escuela">N. Bassols P.</span>
                  </td>
                  <td>86</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/nine.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.9</span>
                    <span class="nom-escuela">J. de Dios Batiz</span>
                  </td>
                  <td>106</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/ten.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.10</span>
                    <span class="nom-escuela">Carlos Vallejo</span>
                  </td>
                  <td>85</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/eleven.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.11</span>
                    <span class="nom-escuela">W. Massieu P.</span>
                  </td>
                  <td>85</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/twelve.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.12</span>
                    <span class="nom-escuela">José María Morelos y Pavón</span>
                  </td>
                  <td>86</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/threeteen.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.13</span>
                    <span class="nom-escuela">Ricado Flores Magón</span>
                  </td>
                  <td>94</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/fourteen.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.14</span>
                    <span class="nom-escuela">Luis E. Erro S.</span>
                  </td>
                  <td>88</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/fifteen.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CECYT No.15</span>
                    <span class="nom-escuela">Diódoro Antúnez Echagaray</span>
                  </td>
                  <td>91</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="img/numeros/sixteen.svg" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CET 1</span>
                    <span class="nom-escuela">Walter Cross Buchanan</span>
                  </td>
                  <td>85</td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="row text-center-2">
              <h4>¿Cómo trabajamos el curso?</h4>
            </div>
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
                <p>Impartimos las 10 materias que solicita COMIPEMS y bachillerato UNAM, en el cierre de cada una se aplican exámenes para valorar tu desempeño y retroalimentar contenidos que sean necesarios repasar.</p>
              </div>
            </div>
            <div class="row check-list">
              <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                <img class="checked" src="img/vinnetas/checked.svg" >
              </div>
              <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                <p>Monitoreamos tu avance con exámenes de simulación tipo COMIPEMS y UNAM para que logres el puntaje necesario para el ingreso a tus primeras opciones.</p>
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
          <div class="col-lg-5 col-md-12 col-sm-12 img-fluid comipems">
            <img class="img-fluid image-comipems" src="img/escudos/comipems.jpg" alt="comipems-logo">
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center center-image">
            <img src="img/iconos/presentacion.svg" width="200">
              <h5>Grupos reducidos</h5>
              <p class="text-muted-2">
              Tenemos como compromiso la atención personalizda por alumno. Formamos grupos de hasta 20 estudiantes como máximo. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center center-image">
            <img src="img/iconos/graduarse.svg" width="200">
              <h5>Maestros con excelencia</h5>
              <p class="text-muted-2">
              Todos los academicos que conforman nuestra plantilla docente tienen posgrado, especialidad y diplomado. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center center-image">
            <img src="img/iconos/project.svg" width="200">
              <h5>Experiencia</h5>
              <p class="text-muted-2">
              Sabemos como estructurar experiencias motivadoras de aprendizaje. Más de 20 años nos respaldan. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 img-fluid">
            <div class="text-icon-center center-image">
            <img src="img/iconos/divisa.svg" width="200">
              <h5>Nuestra garantía</h5>
              <p class="text-muted-2">
              El 85% de nuestros alumnos se queda. En caso de que no te quedes en tu primer intento te damos un segunda oportunidad sin costo en la siguiente vuelta.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
