<header class="banner overlay bg-cover" data-background="images/banner.jpg">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand px-2" href="{{ route('home') }}" style="color: #66EB9A">WE FASHION</a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('productsSolde') }}">SOLDES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('productsHommes') }}">HOMMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('productsFemmes') }}">FEMMES</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->
    <div class="container section">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <h1 class="text-white mb-3">Votre site de vente de vêtements homme et femme</h1>
            </div>
        </div>
    </div>
    <!-- /banner -->
</header>
