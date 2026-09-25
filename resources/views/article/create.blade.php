<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 bg-dark text-white p-5 rounded shadow">
                <h2 class="mb-4 text-center text-primary fw-bold">Crea un Nuovo Articolo</h2>
                
                <form action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Corpo dell'Articolo</label>
                        <textarea name="body" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold">Salva nel Database</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
