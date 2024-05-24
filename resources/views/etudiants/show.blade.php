<!-- etudiants.show.blade.php -->
@extends('template')

@section('titre')
    Détails de l'étudiant {{ $etudiant->nomprenom }}
@endsection

@section('main')
    <ul>
        <li>Nom et prénom : {{ $etudiant->nomprenom }}</li>
        <li>Filière : {{ $etudiant->filiere->nom }}</li>
        <li>Date de création : {{ $etudiant->created_at }}</li>
    </ul>

    <h2>Les livres empruntés par {{ $etudiant->nomprenom }} :</h2>
    <ul>
        @forelse ($etudiant->livresEnCours() as $l)
            <li>{{ $l->titre }} emprunté le : {{ $l->pivot->date_emprunt }}</li>
        @empty
            <h3>Aucun livre emprunté.</h3>
        @endforelse
    </ul>
@endsection
