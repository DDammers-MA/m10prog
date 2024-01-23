<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net%22%3E/" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/dist/app.css" rel="stylesheet">
    <title>Laravel app</title>

</head>


<div>

<h2>Je gaat nu dit project bewerken: {{$project->titel}}</h2>
@include('dashboard.projects.form', ['route'=>route('projects.update', $project), 'method'=>'put'])


</div>
</body>

</html>