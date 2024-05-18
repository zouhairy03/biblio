@extends('template')
@section('titre')
    Details de la etudiant {{$etudiant->nom}}
@endsection
@section('main')
<ul>
    <li>Nom : {{$etudiant->nom}}</li>
    <li>Date de creation : {{$etudiant->created_at}}</li>


</ul>

@forelse ($etudiant->livres as $l )

<li>{{$l->emprunt->date_emprunt}}</li>
@empty
<h2>Aucun etudiant dans cette etudiant</h2>
@endforelse ($etudiant->etudiants as $e)
@endsection
