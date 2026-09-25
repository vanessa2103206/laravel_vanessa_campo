<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviomania</title>
    
    <!-- Metodo 1: Collegamento Standard Online (CDN) -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    
    <!-- Metodo 2: Compilazione Locale Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white">

    <!-- Barra di navigazione scura ufficiale Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 shadow">
      <div class="container">
        <a class="navbar-brand text-warning fw-bold fs-3" href="/">Moviomania</a>
        <div class="navbar-nav ms-auto flex-row gap-3">
          <a class="nav-link text-white fw-semibold" href="/">Tutti gli Articoli</a>
          <a class="nav-link text-warning fw-bold border border-warning rounded px-3" href="/articolo/crea">+ Crea Articolo</a>
        </div>
      </div>
    </nav>

    <!-- Contenitore centrale dove compaiono il Form e l'Elenco -->
    <div class="container">
        {{ $slot }}
    </div>

    <!-- Script Javascript per i componenti Bootstrap -->
    <script src="https://jsdelivr.net"></script>
</body>
</html>
