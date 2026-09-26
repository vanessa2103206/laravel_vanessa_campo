<x-layout>
    <div style="text-align: center; margin-bottom: 40px;">
        <h1 style="font-size: 40px; font-weight: bold; color: #ffc107; margin-bottom: 10px;">Tutti gli Articoli</h1>
        <p style="color: #6c757d; font-size: 18px;">Leggi le storie e guarda le immagini salvate nel database</p>
        <a href="{{ route('article.create') }}" style="background-color: #ffc107; color: #212529; padding: 10px 20px; font-weight: bold; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">Crea un Nuovo Articolo</a>
    </div>

    <!-- Messaggio di successo -->
    @if(session('success'))
        <div style="background-color: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 5px; text-align: center; font-weight: bold; margin-bottom: 30px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Griglia dei riquadri pulita in stile Aulab -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($articles as $article)
            <div style="background-color: #2c3034; border: 2px solid #ffc107; border-radius: 10px; width: 350px; padding: 20px; display: flex; flex-direction: column; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                
                <!-- Foto dell'Articolo o segnaposto se manca -->
                @if($article->image)
                    <img src="{{ Storage::url($article->image) }}" alt="Immagine articolo" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; margin-bottom: 15px;">
                @else
                    <div style="background-color: #212529; color: #6c757d; height: 200px; display: flex; align-items: center; justify-content: center; border-radius: 5px; margin-bottom: 15px; font-style: italic;">
                        Nessuna immagine
                    </div>
                @endif

                <!-- Testi dell'Articolo leggibili -->
                <div style="display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="color: #ffc107; font-weight: bold; margin: 0 0 10px 0; font-size: 22px;">{{ $article->title }}</h3>
                    <h5 style="color: #adb5bd; font-style: italic; margin: 0 0 15px 0; font-size: 16px;">{{ $article->subtitle }}</h5>
                    <p style="color: #ffffff; line-height: 1.5; margin: 0; font-size: 15px; flex-grow: 1;">{{ $article->body }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
