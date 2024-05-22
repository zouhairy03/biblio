<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a  class="nav-link {{Route::currentRouteName()=='filieres.index'? 'active':''}}" href="{{route('filieres.index')}}">Filieres </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName()=='etudiants.index'? 'active':''}}" href="{{route('etudiants.index')}}">Etudiants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName()=='livres.index'? 'active':''}}" href="{{route('livres.index')}}">Livres</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
