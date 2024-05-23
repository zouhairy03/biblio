@extends('template')
@section('titre')
    Details de la etudiant {{ $etudiant->nomprenom }} <br>
    Filiere : {{ $etudiant->filiere->nom }}

    <h2>Les livres en cours 'emprunts  {{ $etudiant->nomprenom }} sont : </h2>
    @foreach ($etudiant->livresEnCours() as $l)
        <li>
            {{ $l->titre }} emprunte le : {{ $l->pivot->date_emprunt }}
        </li>
    @endforeach
    <h2>Les livres rendus par   {{ $etudiant->nomprenom }} sont : </h2>
    @foreach ($etudiant->livresRendu() as $l)
        <li>
            {{ $l->titre }} rendu le : {{ $l->pivot->date_emprunt }}
        </li>
    @endforeach
@endsection
@section('main')
@endsection
