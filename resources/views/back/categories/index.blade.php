@extends('layout_back')
@section('content')

    @section('title', 'Ajouter une categorie')

    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des categories</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="col">
            <a href="{{ route('categories.create') }}" type="button" class="btn btn-primary">Ajouter une categorie</a>
        </div>
        <br/>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Nom</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $categ)
                <tr>
                    <td>{{ $categ->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('categories.edit', $categ->id) }}" type="button" class="btn btn-outline-secondary">Modifier</a>
                        <a href="{{ route('categories.destroy', $categ->id) }}" type="button" class="btn btn-outline-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
