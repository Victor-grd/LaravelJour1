@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<!-- Code dans le Content de base.blade.php -->

<h1>Mettre a jour</h1>

<div id="form">
    {!! Form::open(['url' => '/majMusique']) !!}
    {{ Form::hidden('id', $musique['id']) }} 
   
    <div class="create">
    	{{ Form::label('artiste', 'artiste: ')}}
    	{{ Form::text('artiste', $musique['artiste'])}}
    </div>

    <div class="create">
    	{{ Form::label('nom', 'nom: ')}}
    	{{ Form::text('nom', $musique['nom'])}}
    </div>

    <div class="create">
    	{{ Form::label('genre', 'genre: ')}}
    	{{ Form::select('genre', [
            'genre'=>['A'=>'A', 'B'=>'B'],
        ])}}
    </div>

    <div class="create">
    	{{ Form::label('exemplaire', 'exemplaire: ')}}
    	{{ Form::number('exemplaire', $musique['exemplaire'])}}
    </div>

    <div class="create">
    	{{ Form::submit('Mettre a jour')}}
    </div>
       {!! Form::close() !!}
</div>
@endsection