<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comprension Lectora</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
       
    </head>
    <body class="antialiased">

            <livewire:navbar />
       <div class="flex justify-center min-h-screen pt-24 bg-center bg-dots-darker bg-white-200 selection:bg-green-500 selection:text-white">
    <div class="mx-auto max-w-7xl lg:p-8">
        <div>
            <livewire:bodyMain/>
        </div>
    </div>
</div>

</div>

    </body>
</html>
