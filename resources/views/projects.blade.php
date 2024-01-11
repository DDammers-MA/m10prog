@extends( 'layouts.master' )



@section('content')
<section class="p-3">
<article class="p-3">
        @foreach($project as $project )
            <h2>{{$project->titel}}</h2>
            <p>{{$project->description}}</p>
          
            @endforeach
</article>
</section>
@endsection
