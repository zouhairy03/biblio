@extends('template')
@section('titre')
    Details de la livre {{$livre->titre}}
@endsection
@section('main')
<ul>
    <li>Titre : {{$livre->titre}}</li>
    <li>Prix : {{$livre->prix}}</li>
    <li>Date de creation : {{$livre->created_at}}</li>


</ul>

@forelse ($livre->etudiants as $e )

<li>{{$e->nomprenom}}</li>
@empty
<h2>Aucun etudiant dans cette livre</h2>
@endforelse ($livre->etudiants as $e)
@endsection
