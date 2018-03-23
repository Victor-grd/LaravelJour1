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
            'genre'=>['blues'=>'blues', 'country'=>'country', 'disco'=>'disco', 'folk'=>'folk', 'funk'=>'funk', 'jazz'=>'jazz', 'rap'=>'rap', 'reggae'=>'reggae', 'rock'=>'rock', 'salsa'=>'salsa', 'soul'=>'soul', 'techno'=>'techno','autre'=>'autre']
        ])}}
    </div>
    
    <div class="create">
    	{{ Form::label('exemplaire', 'exemplaire: ')}}
    	{{ Form::number('exemplaire', '0')}}
    </div>
        <div class="create">
    	{{ Form::submit('Ajouter nouvelle musique')}}
               <div class="create">
       <a class="transition" href="{{ url('/liste') }}">Retour</a>
       </div>
    </div>
       {!! Form::close() !!}

</div>
@endsection