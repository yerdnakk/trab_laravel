<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">           
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pessoas">Pessoas</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="/produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cidades">Cidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/estados">Estados</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    @yield('content')
</body>
</html>