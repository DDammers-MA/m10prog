<div>
    @extends( 'layouts.master' )



    @section('content')
    <section class="p-3">
        <article class="p-3">

            <h2>{{$project->titel}}</h2>
            <p>{{$project->description}}</p>

            @if($project->image)
            <img src="{{Storage::url($project->image)}}">
            @endif

        </article>
    </section>
    @endsection
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>