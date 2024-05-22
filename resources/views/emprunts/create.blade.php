@extends('template')
@section('titre')
    Emprunter un livre
@endsection
@section('main')
<form action="{{route('emprunter.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="etudiant_id" class="form-label">Etudiant:</label>
<select name="etudiant_id" id="etudiant_id" class="form-select">
    @foreach ($etudiants as $e)

    <option value="{{$e->id}}">{{$e->nomprenom}}</option>
    @endforeach
</select>
    </div>
    <div class="mb-3">
        <label for="etudiant_id" class="form-label">Livre:</label>
<select name="livre_id" id="livre_id" class="form-select">
    @foreach ($livres as $l)

    <option value="{{$l->id}}">{{$l->titre}}</option>
    @endforeach
</select>
    </div>


      <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection
