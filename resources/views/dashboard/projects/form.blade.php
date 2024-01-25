<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net%22%3E/" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/dist/app.css" rel="stylesheet">
    <title>Laravel app</title>

    <style>
        body {
            background-color: #f3f4f6;
        }

        .container {
            max-width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 2rem;
            padding-left: 2rem;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .logo img {
            height: 3rem;
        }

        nav ul {
            display: flex;
        }

        nav li {
            margin-right: 1rem;
        }

        nav a {
            color: #3b82f6;
            text-decoration: none;
        }

        .content {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            color: #6b7280;
        }

        /* Reset styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Global styles */
body {
  font-family: 'Inter', sans-serif;
}

/* Form styles */
form {
  margin-top: 2rem;
}

/* Form layout styles */
.space-y-12 {
  margin-bottom: 3rem;
}

.border-b {
  border-bottom-width: 1px;
}

.pb-12 {
  padding-bottom: 3rem;
}

.text-base {
  font-size: 1.125rem;
}

.font-semibold {
  font-weight: 600;
}

.leading-7 {
  line-height: 1.75rem;
}
.text-gray-300{
    width: 300px
}
.text-gray-900 {
  color: #1a202c;
}

.text-gray-600 {
  color: #4a5568;
}

/* Profile section styles */
.mt-10 {
  margin-top: 2.5rem;
}

.grid {
  display: grid;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.gap-x-6 {
  column-gap: 1.5rem;
}

.gap-y-8 {
  row-gap: 2rem;
}

.sm\:grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.sm\:col-span-4 {
  grid-column: span 4 / span 4;
}

.col-span-full {
  grid-column: span 6 / span 6;
}

/* Input styles */
.block {
  display: block;
}

.rounded-md {
  border-radius: 0.375rem;
}

.shadow-sm {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

/* Label styles */
.pl-3 {
  padding-left: 0.75rem;
}

/* Textarea styles */
textarea {
  resize: vertical;
}

/* Button styles */
button {
  cursor: pointer;
}

/* Cancel button styles */
.text-gray-900 {
  color: #1a202c;
}

/* Save button styles */
.bg-indigo-600 {
  background-color: #4c51bf;
}

.text-white {
  color: #fff;
}

.hover\:bg-indigo-500:hover {
  background-color: #434190;
}

.focus-visible\:outline:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus-visible\:outline-indigo-600:focus {
  outline-color: #667eea;
}

/* Responsive styles */
@media (min-width: 640px) {
  .sm\:max-w-md {
    max-width: 28rem;
  }

  .sm\:text-sm {
    font-size: 0.875rem;
  }

  .sm\:leading-6 {
    line-height: 1.5rem;
  }

  .sm\:gap-x-3 {
    column-gap: 0.75rem;
  }

  .sm\:col-span-3 {
    grid-column: span 3 / span 3;
  }

  .sm\:col-start-1 {
    grid-column-start: 1;
  }

  .sm\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .sm\:max-w-xs {
    max-width: 20rem;
  }
}

    </style>
</head>

<div class="container">
    <header>
        @include('_navigation')
    </header>
    <div class="content">
        <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

@if ($errors->any())
    <div class="p-2 bg-yellow border-2 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ $route }}" class="bg-white rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
@csrf
    {{ method_field($method) }}
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="titel">
            Titel
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="titel" type="text" placeholder="titel" value="{{old('titel;', $project->titel)}}">
</label>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Beschrijving
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="beschrijving" value="{{old('description', $project->description)}}">
        </label>
    </div>

    <div>
      <label  class="block text-gray-700 text-sm font-bold mb-2" for="image">
      <input type="file" name="image" >
      </label>
    </div>

    <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
</form>

    </div>

    <footer>
        <p>&copy; {{ date('Y') }}. All rights reserved.</p>
    </footer>
</div>
</body>

</html>