@extends('app');

@section('content')
<div class="b-example-divider"></div>
    <div class="text-dark py-4 my-5 text-center fondo-trasparencia redondear-bordes separacion-horizontal">
      <div class="separacion-horizontal separacion-vertical fondo-azul redondear-bordes">
        <div class="py-5">
          <h1 class="display-5 fw-bold text-white">My Revision</h1>
          <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">"La Agencia Nacional de Seguridad Vial (ANSV) insistió en la importancia de realizar,
              oportunamente, la Revisión Técnico-Mecánica (RTM), procedimiento obligatorio para carros y motos en todo
              el
              territorio nacional, ya que mejora la seguridad vial y reduce el riesgo de siniestros en las carreteras."
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <!--<button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Iniciar</button>-->
              <a href="registro.html"><img class="btnstart" src="{{ URL::asset('img/botonstart.jpg') }}" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="b-example-divider mb-0"></div>
@endsection