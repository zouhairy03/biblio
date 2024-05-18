@extends('template')
@section('titre')
    Details de la filiere {{$filiere->nom}}
@endsection
@section('main')
<ul>
    <li>Nom : {{$filiere->nom}}</li>
    <li>Date de creation : {{$filiere->created_at}}</li>


</ul>

@forelse ($filiere->etudiants as $e )

<li>{{$e->nomprenom}}</li>
@empty
<h2>Aucun etudiant dans cette filiere</h2>
@endforelse ($filiere->etudiants as $e)
@endsection
