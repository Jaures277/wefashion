@extends('layout_back')
@section('content')

    @section('title', 'Modifier un produit')


    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">Liste des produits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Modifier un produit</li>
            </ol>
        </nav>
    </div>

    <div class="container">

        @include('errors')
        @include('success')

        <form method="POST" class="row g-3" action="{{ route('products.store') }}" enctype="multipart/form-data" >

            @csrf

            <div class="col-md-4">
                <input value="{{$editProduit->name}}" name="name" required type="text" class="form-control" placeholder="ajouter le nom du produit">
            </div>

            <div class="col-md-4">
                <input value="{{$editProduit->price}}" name="price" type="text" class="form-control" placeholder="Le prix">
            </div>

            <div class="col-md-4">
                <input value="{{$editProduit->reference}}" name="reference" type="text" class="form-control" placeholder="La reference">
            </div>

            <div class="col-md-4">
                <input name="picture" type="file" class="form-control" placeholder="Image">
            </div>

            <div class="col-md-4">
                <select class="form-control" name="category_id">
                    <option value="">-CATEGORIES-</option>
                    @foreach($categories as $cate)
                        <option @if($cate->id == $editProduit->category_id) selected @endif value="{{ $cate->id }}">{{ $cate->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <select required class="form-select" name="visibility">
                    <option selected>-A PUBLIER ?-</option>
                    <option @if($editProduit->visibility == "Publie") selected @endif value="Publie">Publie</option>
                    <option @if($editProduit->visibility == "Non Publie") selected @endif value="Non Publie">Non Publie</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" name="state">
                    <option selected>-SALE OR STANDART ?-</option>
                    <option @if($editProduit->state == "On Sale") selected @endif value="On Sale">On Sale</option>
                    <option @if($editProduit->state == "Standard") selected @endif value="Standard">Standard</option>
                </select>
            </div>

            <div class="col-md-4">

                @foreach($sizes as $size)
                    <label for="{{ $size->id }}">{{ $size->name }}</label>
                     <input @if($productSize->sizeId == $size->id) checked @endif type="checkbox" name="size_id[]" id="{{ $size->id }}" value="{{ $size->id }}" />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @endforeach
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
