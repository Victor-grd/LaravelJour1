<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
      <nav>
          <ul>
              <a class="transition" href="{{ url('/home') }}">acceuil</a>
              <a class="transition" href="{{ url('/liste') }}">liste</a>
              <a class="transition" href="{{ url('/ajouterMusique') }}">Ajouter une musique</a>
          </ul>
      </nav>
  </header>

  <main>
      @yield('content')
  </main>
<script>
if ( window.addEventListener ) {
var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
window.addEventListener("keydown", function(e){
kkeys.push( e.keyCode );
if ( kkeys.toString().indexOf( konami ) >= 0 ) {
alert('Bonsoir');
document.body.style.backgroundImage = "url('KC.gif')";
}
}, true);
}
</script>
  <div class=it>
  </div>
  <footer>
  </footer>

</body>
</html>

