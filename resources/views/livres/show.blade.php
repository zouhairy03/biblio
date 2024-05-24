@extends('template')

@section('titre')
    Détails du livre "{{ $livre->titre }}"
@endsection

@section('main')
    <ul>
        <li>Titre : {{ $livre->titre }}</li>
        <li>Prix : {{ $livre->prix }}</li>
        <li>Date de création : {{ $livre->created_at }}</li>
    </ul>

    <h2>Emprunts en cours pour le livre "{{ $livre->titre }}" :</h2>
    @if ($livre->etudiants->isEmpty())
        <p>Aucun emprunt en cours pour ce livre.</p>
    @else
        <ul>
            @foreach ($livre->etudiants as $etudiant)
                <li>{{ $etudiant->nomprenom }} (emprunté le {{ $etudiant->pivot->date_emprunt }})</li>
            @endforeach
        </ul>
    @endif
@endsection
