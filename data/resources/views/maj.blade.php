@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<!-- Code dans le Content de base.blade.php -->

<h1>Mettre a jour</h1>

<div class="form">
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
            'genre précedent'=>[$musique['genre']],
            'genre'=>['blues'=>'blues', 'country'=>'country', 'disco'=>'disco', 'folk'=>'folk', 'funk'=>'funk', 'jazz'=>'jazz', 'rap'=>'rap', 'reggae'=>'reggae', 'rock'=>'rock', 'salsa'=>'salsa', 'soul'=>'soul', 'techno'=>'techno','autre'=>'autre']
        ])}}
    </div>

    <div class="create">
    	{{ Form::label('exemplaire', 'exemplaire: ')}}
    	{{ Form::number('exemplaire', $musique['exemplaire'])}}
    </div>

    <div class="create">
    	{{ Form::submit('Mettre a jour')}}
       <div class="create">
       <a class="transition" href="{{ url('/liste') }}">Retour</a>
       </div>
    </div>
       {!! Form::close() !!}
</div>
@endsection