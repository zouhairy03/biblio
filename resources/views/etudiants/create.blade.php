@extends('template')
@section('titre')
Nouvel etudiant
@endsection
@section('main')
<form action="{{route('etudiants.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nomprenom" class="form-label">Nom</label>
        <input type="text" name="nomprenom" class="form-control" id="nomprenom" >
      </div>
    <div class="mb-3">
        <label for="filiere_id" class="form-label">Filiere</label>
<select name="filiere_id" id="filiere_id" class="form-select">
    @foreach ($filieres as $f)

    <option value="{{$f->id}}"> {{$f->nom}}</option>
    @endforeach
</select>
    </div>

      <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection
