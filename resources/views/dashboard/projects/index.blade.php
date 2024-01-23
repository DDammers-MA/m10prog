<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}



                    @foreach($projects as $project)
                    <p class="text-black"">{{ $project->titel }}</p>
                    <a href="{{ route('projects.show', $project) }}">Bekijk dit</a>
                    <br>

                    <a href="{{route('projects.edit', $project)}}" class="bg-yellow me-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        Wijzig
                    </a>
                    <br>

                    @endforeach


                    @auth
                    <a href="{{ route('projects.create') }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">Nieuw Project</a>

                    @endauth

                </div>
            </div>
        </div>
    </div>
</x-app-layout>