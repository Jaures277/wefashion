@extends('layout_back')
@section('content')

    @section('title', 'Ajouter une categorie')

    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Liste des categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ajouter une categorie</li>
            </ol>
        </nav>
    </div>

    <div class="container">

        @include('errors')
        @include('success')

        <form method="POST" class="row g-3" action="{{ route('categories.store') }}" enctype="multipart/form-data" >

            @csrf

            <div class="col-md-6">
                <input value="{{ old('name') }}" name="name" type="text" class="form-control" placeholder="ajouter le nom du produit">
            </div>

            <div class="col-md-12">
                <textarea name="description" placeholder="description" class="form-control" id="description" rows="3">
                    {{ old('description') }}
                </textarea>
            </div>

            <div class="text-center">
                <input class="btn btn-primary" value="Valider" type="submit">
            </div>

        </form>

    </div>

@endsection
