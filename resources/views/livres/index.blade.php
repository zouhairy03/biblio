@extends('template')
@section('titre')
Liste des livres
@endsection
@section('main')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">titre</th>
        <th scope="col">prix</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($livres as $livre)

    <tr>
        <th scope="row">{{$livre->id}}</th>
        <td>{{$livre->titre}}
    {{$livre->estDispo()? "DISPO":"PAS DISPO"}}
        </td>
        <td>{{$livre->prix}}</td>
        <td>
            <a href="{{route('livres.show',$livre->id)}}" class="btn btn-sm btn-info">C</a>
            <a href="{{route('livres.edit',$livre->id)}}" class="btn btn-sm btn-warning">M</a>
            <form class="d-inline" action="{{route('livres.destroy',$livre->id)}}" method="post">
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
