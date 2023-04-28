@extends('layout_back')
@section('content')

    @section('title', 'Liste des Produits')

    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des produits</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="col">
            <a href="{{ route('products.create') }}" type="button" class="btn btn-primary">Ajouter un produit</a>
        </div>
        <br/>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Prix</th>
                <th>Etat</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $prod)
                <tr>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->categorie->name }}</td>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->state }}</td>
                    <td class="text-center">
                        <a href="{{ route('products.edit', $prod->id) }}" type="button" class="btn btn-outline-secondary">Modifier</a>
                        <a href="{{ route('products.destroy', $prod->id) }}" type="button" class="btn btn-outline-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
