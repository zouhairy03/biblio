@extends('template')
@section('titre')
Liste des filieres
@endsection
@section('main')
<a href="{{route('filieres.create')}}">Nouveau</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($filieres as $filiere)

    <tr>
        <th scope="row">{{$filiere->id}}</th>
        <td>{{$filiere->nom}}</td>
        <td>
            <a href="{{route('filieres.show',$filiere->id)}}" class="btn btn-sm btn-info">C</a>
            <a href="{{route('filieres.edit',$filiere->id)}}" class="btn btn-sm btn-warning">M</a>
            <form class="d-inline" action="{{route('filieres.destroy',$filiere->id)}}" method="post">
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
