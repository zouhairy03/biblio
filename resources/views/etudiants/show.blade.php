@extends('template')
@section('titre')
    Details de la etudiant {{$etudiant->nom}}
@endsection
@section('main')
<ul>
    <li>Nom : {{$etudiant->nomprenom}}</li>
    <li>Filiere : {{$etudiant->filiere->nom}}</li>


</ul>
<h2>Les livres en cours d'emprunt par {{$etudiant->nomprenom}}</h2>
<hr>
@foreach ($etudiant->livres_empruntes_pas_retourne() as $el)
<li>{{$el->created_at  }}</li>
@endforeach

<hr>
@forelse ($etudiant->livres as $l )
@if (!$l->pivot->date_retour)
<li>Titre : {{$l->titre}}</li>
<li>Date d'emprunt {{$l->pivot->date_emprunt}}</li>
<li>Date de retour {{($l->pivot->date_retour)? $l->pivot->date_retour : 'Non renvoyé'}}</li>

@endif
@empty
<h2>Aucun etudiant dans cette etudiant</h2>
@endforelse
<h2>les livres empruntes et rendus</h2>
@forelse ($etudiant->livres as $l )
@if ($l->pivot->date_retour)
<li>Titre : {{$l->titre}}</li>
<li>Date d'emprunt {{$l->pivot->date_emprunt}}</li>
<li>Date de retour {{($l->pivot->date_retour)? $l->pivot->date_retour : 'Non renvoyé'}}</li>
@endif
@empty
<h2>Aucun etudiant dans cette etudiant</h2>
@endforelse
@endsection
