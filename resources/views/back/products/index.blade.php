@extends('layout_back')
@section('content')

    @section('title', 'Liste des Produits')


    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des produits</li>
            </ol>
        </nav>

        <div class="col">
            <a href="{{ route('products.create') }}" type="button" class="btn btn-primary">Ajouter un produit</a>
        </div>
        <br/>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Prix</th>
                <th>Etat</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            @foreach($products as $prod)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->categorie->name }}</td>
                    <td>{{ $prod->price }} €</td>
                    <td>{{ $prod->state }}</td>
                    <td class="text-center">
                        <a href="{{ route('products.edit', $prod->id) }}" type="button" class="btn btn-outline-secondary">Modifier</a>

                        <a href="{{ route('products.destroy', $prod->id) }}" data-confirm="Etes vous sur ?" type="button" class="btn btn-outline-danger">
                            Supprimer
                        </a>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $products->links('pagination::bootstrap-4') }}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
