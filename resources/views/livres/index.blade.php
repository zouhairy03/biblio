@extends('template')

@section('titre')
    Liste des livres
@endsection

@section('main')
    <a href="{{ route('livres.create') }}" class="btn btn-primary mb-2">Nouveau</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Prix</th>
                <th scope="col">Statut</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $livre)
                <tr>
                    <th scope="row">{{ $livre->id }}</th>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->prix }}</td>
                    <td>
                        @if ($livre->estDisponible())
                            <span class="text-success">Disponible</span>
                        @else
                            <span class="text-danger">Pris par {{ $livre->etudiants->first()->nomprenom }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning">Modifier</a>
                        <form class="d-inline" action="{{ route('livres.destroy', $livre->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
