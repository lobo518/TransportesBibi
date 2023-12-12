<nav class="navbar navbar-expand-lg bg-danger  sticky-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="/">
      <span class=" fs-5 fw-bold texto-blanco">Transportes Bibi</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

        @if( auth()->user()->username == 'admin' )


        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="{{route('registroIndex')}}"><span class="texto-blanco">Crear Cuenta</span></a>
        </li>
        @endif

        <li class="nav-item">

          <form action="{{ route('logoutStore') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger ">Cerrar
              sesión</button>
          </form>

        </li>

        <li class="nav-item">
          <a class="nav-link active " aria-current="page"><span class="text-warning">Usuario: {{ auth()->user()->username }}</span></a>
        </li>


      </ul>
    </div>
  </div>
</nav>