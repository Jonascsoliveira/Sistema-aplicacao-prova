<!DOCTYPE html>
<html lang="en">
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{route('home')}}" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{route('testes.create')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cadastrar Teste</a>
    <a href="{{route('questoes.create')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cadastrar Questão</a>
    <a href="{{route('testes.index')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Listar Testes</a>
    <a href="{{route('questoes.index')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Listar Questões</a>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <input type="submit" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" value="Sair">
    </form>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="{{route('testes.create')}}" class="w3-bar-item w3-button w3-padding-large">Cadastrar Testes</a>
    <a href="{{route('questoes.create')}}" class="w3-bar-item w3-button w3-padding-large">Cadastrar Questaõ</a>
    <a href="{{route('testes.index')}}" class="w3-bar-item w3-button w3-padding-large">Listar Testes</a>
    <a href="{{route('questoes.index')}}" class="w3-bar-item w3-button w3-padding-large">Listar Questões</a>
  </div>
</div>
<!-- First Grid -->

@yield('content')


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
