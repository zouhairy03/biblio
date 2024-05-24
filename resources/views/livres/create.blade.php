@extends('template')

@section('titre')
    Ajouter un nouveau livre
@endsection

@section('main')
    <form action="{{ route('livres.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="titre">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" id="prix">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
