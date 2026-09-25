<x-layout>
    <div class="container my-5">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h1 class="display-4 fw-bold">Tutti gli Articoli</h1>
                <p class="lead text-muted">Leggi le storie salvate nel nostro database</p>
                <a href="{{ route('article.create') }}" class="btn btn-success">Crea un Nuovo Articolo</a>
            </div>
        </div>

        <div class="row justify-content-center">
            @if(session('success'))
                <div class="col-12 col-md-6 alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="row mt-3">
            @foreach($articles as $article)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card shadow-sm h-100 bg-dark text-white">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-primary">{{ $article->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                            <p class="card-text">{{ $article->body }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
