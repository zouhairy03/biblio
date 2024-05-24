@extends('template')

@section('titre')
    Modifier le livre "{{ $livre->titre }}"
@endsection

@section('main')
    <form action="{{ route('livres.update', $livre->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="titre" value="{{ $livre->titre }}">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" id="prix" value="{{ $livre->prix }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
