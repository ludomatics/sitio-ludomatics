@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/universidad.css')}}">

    <!-- Header -->
    <div class="bg">
      <div class="container">
        <div class="centered">
          <h2 class="section-heading text-uppercase">Instituto Politécnico Nacional</h2>
        </div>
      </div>
    </div>

    <section class="bg-light" id="escuelas">
      <div class="container">
        <div class="row text-center-2">
          <h3>Te presentamos los puntajes de las escuelas de nivel superior más demandas en el IPN</h3>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Ingeniería y Ciencias Físico Matemáticas.</h3>
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
                    <span class="escuela">INGENIERÍA EN SISTEMAS COMPUTACIONALES</span>
                  </td>
                  <td>ESCOM</td>
                  <td>114</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela"> INGENIERÍA MECATRÓNICA.</span>
                  </td>
                  <td>UPIITA</td>
                  <td>106</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">INGENIERÍA CIVIL  </span>
                  </td>
                  <td>ESIA ZACATENCO </td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">INGENIERÍA EN AERONÁUTICA </span>
                  </td>
                  <td>ESIME TICOMÁN</td>
                  <td>97</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela"> FÍSICA Y MATEMÁTICAS</span>
                  </td>
                  <td>ESFM</td>
                  <td>102</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">INGENIERÍA EN SISTEMAS AUTOMOTRICES </span>
                  </td>
                  <td>ESIME ZACATENCO</td>
                  <td>88</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">INGENIERÍA EN COMUNICACIONES Y ELECTRÓNICA</span>
                  </td>
                  <td>ESIME ZACATENCO</td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/eight.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela"> INGENIERÍA BIOMÉDICA</span>
                  </td>
                  <td>UPIBI</td>
                  <td>95</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/nine.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">INGENIERÍA EN COMPUTACIÓN </span>
                  </td>
                  <td>ESIME CULHUACÁN</td>
                  <td>78</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/ten.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">INGENIERÍA EN SISTEMAS AUTOMOTRICES</span>
                  </td>
                  <td>ESIME AZCAPOTZALCO</td>
                  <td>81</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Ciencias Médico Biológicas.</h3>
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
                    <span class="escuela">MÉDICO CIRUJANO Y PARTERO</span>
                  </td>
                  <td>ESM</td>
                  <td>94</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">PSICOLOGÍA</span>
                  </td>
                  <td>CICS SANTO TOMÁS </td>
                  <td>79</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela"> MÉDICO CIRUJANO Y HOMEÓPATA </span>
                  </td>
                  <td>ENMyH</td>
                  <td>88</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">ENFERMERÍA Y OBSTETRICIA </span>
                  </td>
                  <td>ESEO</td>
                  <td>83</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">BIOLOGÍA</span>
                  </td>
                  <td>ENCB</td>
                  <td>86</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">ODONTOLOGÍA </span>
                  </td>
                  <td>CICS SANTO TOMÁS </td>
                  <td>83</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">IMÉDICO CIRIJANO Y PARTERO</span>
                  </td>
                  <td>CICS MILPA ALTA</td>
                  <td>90</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/eight.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">QUÍMICO BACTERIÓLOGO Y PARASITÓLOGO</span>
                  </td>
                  <td>ENCB</td>
                  <td>87</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/nine.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Licenciatura en Nutrición</span>
                  </td>
                  <td>CICS MILPA ALTA</td>
                  <td>78</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/ten.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Licenciatura en Optometría</span>
                  </td>
                  <td>CICS MILPA ALTA</td>
                  <td>72</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h3 class="section-heading text-uppercase text-center">Ciencias Sociales y Administrativas.</h3>
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
                    <span class="escuela"> TURISMO</span>
                  </td>
                  <td>EST</td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">NEGOCIOS INTERNCIONALES</span>
                  </td>
                  <td>ESCA SANTO TOMAS</td>
                  <td>77</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/three.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CONTADOR PÚBLICO</span>
                  </td>
                  <td>ESCA SANTO TOMAS</td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/four.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">RELACIONES COMERCIALES</span>
                  </td>
                  <td>ESCA SANTO TOMAS</td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/five.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">ECONOMÍA</span>
                  </td>
                  <td>ESE</td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/six.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela"> ADMINISTRACIÓN INDUSTRIAL  </span>
                  </td>
                  <td>UPIICSA</td>
                  <td>72</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/seven.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">CONTADOR PÚBLICO</span>
                  </td>
                  <td>ESCA TEPEPAN</td>
                  <td>72</td>
                </tr>
                <!--tr>
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
                </tr-->
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </section>

<!-- https://ahorasipaso.com/blog/mas-demandas-ipn-2019.html -->

@endsection
