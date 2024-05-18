@extends('template')
@section('titre')
Nouvelle etudiant
@endsection
@section('main')

<form action="{{route('etudiants.update',$etudiant->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nomprenom" class="form-label">Nom</label>
        <input type="text" name="nomprenom" class="form-control" id="nomprenom" value="{{$etudiant->nomprenom}}" >
      </div>
      <div class="mb-3">
        <label for="filiere_id" class="form-label">Nom</label>
<select name="filiere_id" id="filiere_id" class="form-select">
    @foreach ($filieres as $f)

    <option {{($f->id==$etudiant->filiere_id)? "selected":""}}  value="{{$f->id}}"> {{$f->nom}}</option>
    @endforeach
</select>
    </div>
      <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection
