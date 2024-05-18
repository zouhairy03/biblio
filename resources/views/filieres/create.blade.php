@extends('template')
@section('titre')
Nouvelle filiere
@endsection
@section('main')
<form action="{{route('filieres.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="nom" >
      </div>

      <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection
