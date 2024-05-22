<nav class="navbar bg-dark border-bottom border-body navbar-expand-md" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BIBLIO 2  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName()=='filieres.index')? 'active':'' }}" aria-current="page" href="{{route('filieres.index')}}">Filieres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName()=='livres.index')? 'active':'' }}" href="{{route('livres.index')}}">Livres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName()=='etudiants.index')? 'active':'' }}" href="{{route('etudiants.index')}}">Etudiants</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
