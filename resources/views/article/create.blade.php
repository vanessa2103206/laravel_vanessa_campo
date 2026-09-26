<x-layout>
   

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 bg-dark text-white p-5 rounded shadow">
                <h2 class="mb-4 text-center text-warning fw-bold">Crea un Nuovo Articolo</h2>
                
                <!-- Blocco rosso per mostrare gli errori se l'utente sbaglia a compilare -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <!-- NOTA: Abbiamo aggiunto enctype="multipart/form-data" per accettare le foto! -->
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}" required>
                    </div>
                    
                    <!-- Nuovo campo per selezionare la foto dal tuo PC -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Inserisci un'immagine</label>
                        <input type="file" name="image" class="form-control" required>

                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Corpo dell'Articolo</label>
                        <textarea name="body" class="form-control" rows="5" required>{{ old('body') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold text-dark">Salva nel Database</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
