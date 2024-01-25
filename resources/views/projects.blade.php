
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends( 'layouts.master' )

@section('content')

<section class="p-3">
<article class="p-3">


        @foreach($project as $project )
        <div class="div">
            <h2>{{$project->titel}}</h2>
            <p>{{$project->description}}</p>
            <a href="{{route('project.show', $project)}}">Bekijk dit item</a>
         
            <br>
            <br>
            </div>
            @endforeach
          
</article>
</section>
@endsection
    
<style>

    section{
        height: 100vh;
        width: 100vw;
  
  
    }

    .div{
        width: 32%;
    min-height: 15rem;
        border: 0.1rem solid black;
        margin-bottom: 2rem;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-direction: column;
   
    }


    article{
   
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content: flex-start; 

        gap: 1rem; 

       
    
    }
</style>

</body>
</html>


