<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Esercizio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item {{Request::route()->getName()=='homepage' ? 'active': ''}}">
        <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::route()->getName()=='prodotto' ? 'active': ''}}">
        <a class="nav-link" href="{{route('prodotto')}}">Prodotto</a>
      </li>
    </ul>
  </div>
</nav>
