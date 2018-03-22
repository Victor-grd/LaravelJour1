@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<!-- Code dans le Content de base.blade.php -->

<h1>Ajouter une musique</h1>
<div class="form">
    {!! Form::open(['url' => '/nouvelleMusique']) !!}
   
    <div class="create">
    	{{ Form::label('artiste', 'artiste: ')}}
    	{{ Form::text('artiste', 'Artiste')}}
    </div>

    <div class="create">
    	{{ Form::label('nom', 'nom: ')}}
    	{{ Form::text('nom', 'nom')}}
    </div>

    <div class="create">
    	{{ Form::label('genre', 'genre: ')}}
    	{{ Form::select('genre', [
            'genre'=>['A'=>'A', 'B'=>'B'],
        ])}}
    </div>

    <div class="create">
    	{{ Form::label('exemplaire', 'exemplaire: ')}}
    	{{ Form::number('exemplaire', '0')}}
    </div>
        <div class="create">
    	{{ Form::submit('Ajouter nouvelle musique')}}
    </div>
       {!! Form::close() !!}
</div>
@endsection