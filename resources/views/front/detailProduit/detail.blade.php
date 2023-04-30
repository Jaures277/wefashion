@extends('layout_front')
@section('content')

    @section('title', 'Detail du produit')

    <section class="section">
        <div class="container">

            <div>
                <h4 class="section-title text-left">Détail du produit </h4>
            </div>

            <!-- topic-item -->
            <div class="row">

                    <div class="col-lg-8 mb-5">
                        <a class="card lift h-100">

                            @if($detailP->categoryId == 1)
                                <img class="card-img-top" src="{{asset('images/femmes/'.$detailP->picture)}}" alt="{{ $detailP->reference }}">
                            @endif

                            @if($detailP->categoryId == 2)
                                <img class="card-img-top" src="{{asset('images/hommes/'.$detailP->picture)}}" alt="{{ $detailP->reference }}">
                            @endif

                                <div class="card-body">
                                <h4 class="card-title mb-2">{{ $detailP->name }}</h4>
                                <h4 class="card-title mb-2">Prix : <b style="color: red">{{ $detailP->price }} €</b></h4>
                                <h4 class="card-title mb-2">Etat : <b style="color: red">{{ $detailP->state }}</b></h4>
                                <p class="card-text">
                                    <?= $detailP->description ?>
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Ref : <b style="color: red">{{ $detailP->reference }}</b></h4>
                                <h4 class="card-title mb-2">Categorie : <b style="color: red">{{ $detailP->categorie->name }} </b></h4>
                                <br/>
                                    <select class="form-control border-opacity-10" style="border: black groove">
                                        <option value=""> Choisir la taille </option>
                                        @foreach($sizes as $s)
                                            <option value="{{$s->id}}"> {{$s->name}} </option>
                                        @endforeach
                                    </select>
                                <br/>
                                <button type="button" class="btn btn-primary btn-sm" style="border-radius: 10px">Acheter</button>
                            </div>
                    </div>

            </div>

        </div>
    </section>


@endsection
