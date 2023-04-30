@extends('layout_front')
@section('content')

    @section('title', 'Produits')

    <section class="section">
                <div class="container">

                    <div>
                        @if($action == "solde")
                            <h4 class="section-title text-left">Produits en solde </h4>
                        @endif
                        @if($action == "hommes")
                            <h4 class="section-title text-left">Produits Hommes </h4>
                        @endif
                        @if($action == "femmes")
                            <h4 class="section-title text-left">Produits Femmes </h4>
                        @endif
                    </div>

                    <!-- topic-item -->
                    <div class="row justify-content-center">

                        @foreach($listeProduit as $prod)

                            <div class="col-lg-4 mb-5">
                                <a class="card lift h-100" href="{{ route('detailProduit', $prod->id) }}">

                                    @if($prod->category_id == 1)
                                        <img class="card-img-top" src="{{asset('images/femmes/'.$prod->picture)}}" alt="{{ $prod->reference }}">
                                    @endif

                                    @if($prod->category_id == 2)
                                        <img class="card-img-top" src="{{asset('images/hommes/'.$prod->picture)}}" alt="{{ $prod->reference }}">
                                    @endif

                                    <div class="card-body">
                                        <h4 class="card-title mb-2">{{ $prod->name }}</h4>
                                        <h4 class="card-title mb-2">Prix : {{ $prod->price }} €</h4>
                                    </div>
                                    <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                                        <div class="small text-primary">Voir le detail</div>
                                        <div class="small text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></div>
                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>

                    {{ $listeProduit->links('pagination::bootstrap-4') }}

                </div>
            </section>



@endsection
