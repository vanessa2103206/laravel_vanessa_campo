<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviomania Blog</title>
    <!-- Unico link Bootstrap leggero e centralizzato -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <!-- Chiamata al componente Layout pulito -->
    <x-layout>
        @yield('content')
    </x-layout>

    <script src="https://jsdelivr.net"></script>
</body>
</html>
