<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="/dist/app.css" rel="stylesheet">

    </head>
    <body class="antialiased">
  
    <header class="mb-5">
    
    @include("_navigation")
    </header>

    
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div>
       
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </div>

 
    <footer class="bg-gray-100 dark:bg-gray-900 p-4 mt-6">
        <div class="text-center text-gray-600 dark:text-gray-400">
            &copy; Daniel
        </div>
    </footer>
</body>
</html>
