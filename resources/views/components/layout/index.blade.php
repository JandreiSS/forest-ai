<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forest AI</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-teal-500">
    <x-layout.nav-header />

    <div class="px-16 py-8">
        {{ $slot }}
    </div>
</body>
</html>