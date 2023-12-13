<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Transportes Bibi</title>

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  @vite(['resources/js/app.js'])

  <style>
    html {
      min-height: 100%;
      position: relative;
    }

    body {
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      /* 100% del viewport height */
      margin: 0;
      /* Eliminar márgenes predeterminados del cuerpo */
    }

    footer {
      background-color: #dc3545;
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 40px;
      color: white;
    }

    footer p {

      color: #f3f3f3;

    }
  </style>

</head>

<body>
  @include('partials.menu')


  @if (session('status'))
  <div class="container mt-3" id="statusMessage">
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  </div>
  <script>
    setTimeout(function() {
      var statusMessage = document.getElementById('statusMessage');
      if (statusMessage) {
        statusMessage.classList.add('hidden');
        setTimeout(function() {
          statusMessage.style.display = 'none';
        }, 500);

      }
    }, 3000);
  </script>
  @endif


  @yield('container')


  <footer class="w-100 d-flex justify-content-center align-items-center">
    <p class="fs-5 px-3 pt-3">
      Transportes Bibi &copy; Todos los derechos reservados 2023
    </p>


  </footer>

  @yield('js')


</body>

</html>