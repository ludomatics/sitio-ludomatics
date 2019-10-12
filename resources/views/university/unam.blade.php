@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/universidad.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="container">
        <div class="centered">
          <h2 class="section-heading text-uppercase">Universidad Nacional Autónoma de México</h2>
        </div>
      </div>
    </div>

    <section class="bg-light" id="escuelas">
      <div class="container">
        <div class="row text-center-2">
          <h3>Te presentamos los puntajes de las escuelas de nivel superior más demandas en la UNAM</h3>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Areá 1: Ciencias Físico-Matemáticas y de las Ingenierías</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">no.</th>
                  <th scope="col">Carrera</th>
                  <th scope="col">Plantel</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/one.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Física</span>
                  </td>
                  <td>Facultad de Ciencias. Ciudad Universitaria</td>
                  <td>108</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ing. En Telecomunicaciones, Sistemas y Electrónica.</span>
                  </td>
                  <td>FES Cuahutitlan</td>
                  <td>76</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Civil. </span>
                  </td>
                  <td>Facultad de Ingeniería. Ciudad Universitaria</td>
                  <td>90</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Civil. </span>
                  </td>
                  <td>FES Acatlán</td>
                  <td>73</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Eléctrica y Electrónica. </span>
                  </td>
                  <td>Facultad de Ingeniería. Ciudad Universitaria</td>
                  <td>98</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Eléctrica-Electrónica. </span>
                  </td>
                  <td>FES Aragón</td>
                  <td>78</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería en Computación.</span>
                  </td>
                  <td>Facultad de Ingeniería. Ciudad Universitaria</td>
                  <td>95</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/eight.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Mecánica.</span>
                  </td>
                  <td>Facultad de Ingeniería. Ciudad Universitaria</td>
                  <td>103</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/nine.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Petrolera.</span>
                  </td>
                  <td>Facultad de Ingeniería. Ciudad Universitaria</td>
                  <td>85</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/ten.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ingeniería Química.</span>
                  </td>
                  <td>Facultad de Química. Ciudad Universitaria</td>
                  <td>104</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Areá 2: Ciencias Biológicas y de la Salud</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">no.</th>
                  <th scope="col">Carrera</th>
                  <th scope="col">Plantel</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/one.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Biología</span>
                  </td>
                  <td>Facultad de Ciencias. Ciudad Universitaria</td>
                  <td>96</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Biología.</span>
                  </td>
                  <td>FES Zaragoza</td>
                  <td>82</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Enfermería. </span>
                  </td>
                  <td>Escuela Nacional de Enfermería y Obstetricia</td>
                  <td>73</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Enfermería. </span>
                  </td>
                  <td>FES Iztacala</td>
                  <td>70</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Enfermería</span>
                  </td>
                  <td>FES Zaragoza</td>
                  <td>75</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Fisioterapia. </span>
                  </td>
                  <td>E.N.E.S. Unidad León</td>
                  <td>78</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Médico Cirujano.</span>
                  </td>
                  <td>Facultad de Medicina. Ciudad Universitaria</td>
                  <td>108</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/eight.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Psicología.</span>
                  </td>
                  <td>Facultad de Psicología. Ciudad Universitaria</td>
                  <td>98</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/nine.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Química.</span>
                  </td>
                  <td>Facultad de Química. Ciudad Universitaria</td>
                  <td>106</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/ten.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Médico Cirujano.</span>
                  </td>
                  <td>FES Zaragoza</td>
                  <td>103</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Areá 3: Ciencias sociales</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">no.</th>
                  <th scope="col">Carrera</th>
                  <th scope="col">Plantel</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/one.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Administración. </span>
                  </td>
                  <td>Facultad de Contaduría y Administración. Ciudad Universitaria</td>
                  <td>90</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Ciencias Políticas y Admin. Pública.</span>
                  </td>
                  <td>Facultad de Ciencia Políticas y Sociales</td>
                  <td>97</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Contaduría. </span>
                  </td>
                  <td>Facultad de Contaduría y Administración </td>
                  <td>85</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Derecho. </span>
                  </td>
                  <td>Facultad de Derecho</td>
                  <td>96</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Economía.</span>
                  </td>
                  <td>Facultad de Economía</td>
                  <td>86</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Geografía.</span>
                  </td>
                  <td>Facultad de Filosofía y Letras</td>
                  <td>86</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Relaciones Internacionales. </span>
                  </td>
                  <td>Facultad de Ciencias Políticas y Sociales</td>
                  <td>102</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/eight.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Psicología.</span>
                  </td>
                  <td>Facultad de Psicología. Ciudad Universitaria</td>
                  <td>98</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/nine.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Sociología. </span>
                  </td>
                  <td>Facultad de Ciencias Políticas y Sociales</td>
                  <td>87</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/ten.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Trabajo Social. </span>
                  </td>
                  <td>E.N. de Trabajo Social </td>
                  <td>68</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Areá 4: Artes y Humanidades </h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">no.</th>
                  <th scope="col">Carrera</th>
                  <th scope="col">Plantel</th>
                  <th scope="col">Aciertos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/one.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Artes Visuales.  </span>
                  </td>
                  <td>Facultad de Artes y Diseño</td>
                  <td>103</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CDiseño Gráfico. </span>
                  </td>
                  <td>FES Acatlán</td>
                  <td>91</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Diseño y Comunicación Visual. </span>
                  </td>
                  <td>Facultad de Artes y Diseño </td>
                  <td>102</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Enseñanza de Inglés. </span>
                  </td>
                  <td>FES Acatlán </td>
                  <td>67</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Estudios Latinoamericanos. </span>
                  </td>
                  <td>Facultad de Filosofía y Letras</td>
                  <td>89</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Filosofía</span>
                  </td>
                  <td>Facultad de Filosofía y Letras</td>
                  <td>99</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Historia. </span>
                  </td>
                  <td>Facultad de Filosofía y Letras </td>
                  <td>95</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/eight.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Lengua y Literatura Hispánicas. </span>
                  </td>
                  <td>Facultad de Filosofía y Letras</td>
                  <td>101</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/nine.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Pedagogía. </span>
                  </td>
                  <td>Facultad de Filosofía y Letras</td>
                  <td>80</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/ten.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Teatro y Actuación. </span>
                  </td>
                  <td>Facultad de Música  </td>
                  <td>99</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </section>


@endsection
