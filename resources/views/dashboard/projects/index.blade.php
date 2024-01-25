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

                    <div>
                        <p class="text-black"">{{ $project->titel }}</p>
                    <a href="{{route('project.show', $project)}}">Bekijk dit</a>
                            <br>

                            <a href="{{route('projects.edit', $project)}}" class="">
                                Wijzig
                            </a>

                        <form action="{{route('projects.destroy', $project)}}" method="post">
                            @csrf
                            {{ method_field('delete') }}
                            <button type="verwijder" class="rounded-md bg-orange">
                                Verwijder
                            </button>
                        </form>

                    </div>


                    <br>




                    @endforeach

                    @if (session('alert'))
                    <div class="p-2 bg-yellow border-2 rounded">
                        {{ session('alert') }}
                    </div>
                    @endif


                    @auth
                    <a href="{{ route('projects.create') }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">Nieuw Project</a>

                    @endauth

                </div>
                {{$projects->links()}}
            </div>
        </div>
    </div>
</x-app-layout>