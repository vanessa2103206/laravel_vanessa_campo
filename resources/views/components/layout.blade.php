<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviomania</title>
    <!-- Bootstrap CDN Leggero -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    
    <!-- Stile di protezione locale per forzare la modalità scura immediata se internet salta -->
    <style>
        body { background-color: #212529 !important; color: #f8f9fa !important; font-family: sans-serif; }
        .navbar-custom { background-color: #2c3034; padding: 15px; margin-bottom: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .brand-logo { color: #ffc107 !important; font-weight: bold; font-size: 24px; text-decoration: none; }
        .nav-links a { color: #ffffff !important; margin-left: 20px; text-decoration: none; font-weight: 600; }
        .nav-links a.btn-custom { color: #ffc107 !important; border: 1px solid #ffc107; padding: 5px 15px; rounded: 5px; }
    </style>
</head>
<body>

    <!-- Navbar d'emergenza che garantisce la grafica di Aulab -->
    <div class="navbar-custom">
        <div style="max-width: 1320px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <a href="/" class="brand-logo">Moviomania</a>
            <div class="nav-links">
                <a href="/">Tutti gli Articoli</a>
                <a href="/articolo/crea" class="btn-custom">+ Crea Articolo</a>
            </div>
        </div>
    </div>

    <!-- Contenitore unico per il form e la lista -->
    <div style="max-width: 1320px; margin: 0 auto; padding: 0 15px;">
        {{ $slot }}
    </div>

</body>
</html>
