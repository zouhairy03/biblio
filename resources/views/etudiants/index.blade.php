@extends('template')
@section('titre')
Liste des etudiants
@endsection
@section('main')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom prenom</th>
        <th scope="col">Filiere</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($etudiants as $etudiant)

    <tr>
        <th scope="row">{{$etudiant->id}}</th>
        <td>{{$etudiant->nomprenom}}</td>
        <td>{{$etudiant->filiere->nom}}</td>
        <td>
            <a href="{{route('etudiants.show',$etudiant->id)}}" class="btn btn-sm btn-info">C</a>
            <a href="{{route('etudiants.edit',$etudiant->id)}}" class="btn btn-sm btn-warning">M</a>
            <form class="d-inline" action="{{route('etudiants.destroy',$etudiant->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button  class="btn btn-sm btn-danger">S</button>
            </form>

        </td>
    </tr>
    @endforeach

    </tbody>
  </table>
@endsection
