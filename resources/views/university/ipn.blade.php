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
                    <span class="escuela">Ing. en Computación</span>
                  </td>
                  <td>Facultad de Ingeniera. Ciudad Universitaria</td>
                  <td>103</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Actuaria</span>
                  </td>
                  <td>Facultad de Ciencias. Ciudad Universitaria</td>
                  <td>103</td>
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
                    <span class="escuela">Médico cirujano</span>
                  </td>
                  <td>Facultad de Medicina. Ciudad Universitaria</td>
                  <td>120</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Actuaria</span>
                  </td>
                  <td>Facultad de Ciencias. Ciudad Universitaria</td>
                  <td>103</td>
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
                    <span class="escuela">Ing. en Computación</span>
                  </td>
                  <td>Facultad de Ingeniera. Ciudad Universitaria</td>
                  <td>103</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/numeros/two.svg') }}" class="numeros">
                  </th>
                  <td>
                    <span class="escuela">Actuaria</span>
                  </td>
                  <td>Facultad de Ciencias. Ciudad Universitaria</td>
                  <td>103</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </section>


@endsection
