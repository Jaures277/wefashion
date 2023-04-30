<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 font-weight-bold" style="color: #66EB9A">WE FASHION</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('products.index')}}" class="nav-link active" aria-current="page">Accueil</a></li>
            <li class="nav-item"><a href="{{route('products.index')}}" class="nav-link">PRODUITS</a></li>
            <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">CATEGORIES</a></li>
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">SE DECONNECTER</a></li>
        </ul>
    </header>
</div>

<div class="b-example-divider"></div>
