@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<!-- Code dans le Content de base.blade.php -->
<h1>Musique</h1>
<table>
    <tr>
        <th>Artiste</th>
        <th>Nom de la musique</th>
        <th>Genre de musique</th>
        <th>Nombre d'exemplaire</th>
        <th>Supprimer</th>
        <th>Update</th>
    </tr>

    @foreach ($musiques as $musique)
    <tr>
        <td>{{ $musique['artiste'] }}</td>
        <td>{{ $musique['nom'] }}</td>
        <td>{{ $musique['genre'] }}</td>
        <td>{{ $musique['exemplaire'] }}</td>
        <td>
            {{ Form::open(['url' => '/supprimer']) }}
            {{ Form::hidden('id', $musique['id']) }}
            {{ Form::submit('X') }}
            {{ Form::close() }}
        </td>

        <td>
            {{ Form::open(['url' => '/maj', 'method' => 'post']) }}
            {{ Form::hidden('id', $musique['id']) }}
            {{ Form::submit('Mettre à jour') }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach

</table>
@endsection