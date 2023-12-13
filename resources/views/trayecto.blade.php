@extends('layout.appprincipal')
@section('container')

<div class="container my-2 py-2" style="background-color: rgba(255, 255, 255, 0.7); ">
  <h2>Salida de vehículos</h2>

  <div class="row ">
    <div class="col-lg-6 col-md-6 col-sm-6 col-9">
      <input type="text" class="form-control" placeholder="Buscar...">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-2 col-3">
      <button class="btn btn-danger " id="searchButton"><span>&#128269;</span></button>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 col-12">
      <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
          <path fill="#ffffff" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm60.1 106.5L224 336l60.1 93.5c5.1 8-.6 18.5-10.1 18.5h-34.9c-4.4 0-8.5-2.4-10.6-6.3C208.9 405.5 192 373 192 373c-6.4 14.8-10 20-36.6 68.8-2.1 3.9-6.1 6.3-10.5 6.3H110c-9.5 0-15.2-10.5-10.1-18.5l60.3-93.5-60.3-93.5c-5.2-8 .6-18.5 10.1-18.5h34.8c4.4 0 8.5 2.4 10.6 6.3 26.1 48.8 20 33.6 36.6 68.5 0 0 6.1-11.7 36.6-68.5 2.1-3.9 6.2-6.3 10.6-6.3H274c9.5-.1 15.2 10.4 10.1 18.4zM384 121.9v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z" />
        </svg></button>
      <button class="btn btn-success"><span>&#10010;</span> Agregar</button>

    </div>

    <table class="table table-striped  my-1">
      <thead class="table-danger">
        <tr>
          <th scope="col">Trailer</th>
          <th scope="col">Kilometraje</th>
          <th scope="col">Combustible</th>
          <th scope="col">Observaciones</th>
          <th scope="col">Fecha</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">Trailer H101</th>
          <td>8000</td>
          <td>250</td>
          <td>Ninguna</td>
          <td>01-12-2021</td>
          <td><button class="btn btn-warning m-1">Editar</button> <button class="btn btn-danger ">Eliminar</button></td>
        </tr>

        <tr>
          <th scope="row">Trailer H102</th>
          <td>10000</td>
          <td>250</td>
          <td>Ninguna</td>
          <td>02-12-2021</td>
          <td><button class="btn btn-warning m-1">Editar</button> <button class="btn btn-danger ">Eliminar</button></td>
        </tr>

        <tr>
          <th scope="row">Trailer H103</th>
          <td>30000</td>
          <td>250</td>
          <td>Ninguna</td>
          <td>03-12-2021</td>
          <td><button class="btn btn-warning m-1">Editar</button> <button class="btn btn-danger ">Eliminar</button></td>
        </tr>

      </tbody>
  </div>







</div>

@endsection