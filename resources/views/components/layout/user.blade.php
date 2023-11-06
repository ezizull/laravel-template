<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guest</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center min-h-screen min-w-screen bg-center">
        <div {{ $attributes->merge(['class' => 'w-full mx-auto']) }}>

            {{ $slot }}

        </div>
    </div>

    <!-- Script -->
    @stack('scripts')
</body>

</html>
