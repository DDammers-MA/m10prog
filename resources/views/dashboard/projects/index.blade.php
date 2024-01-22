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
        <a class="text-black" href="{{$project->title}}">{{ $project->titel }}</a><br>
        <a href="{{ route('project.show', $project) }}">Bekijk dit</a>
        @endforeach


        @auth
        <a href="{{ route('project.create') }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">Nieuw Project</a>

@endauth
               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>