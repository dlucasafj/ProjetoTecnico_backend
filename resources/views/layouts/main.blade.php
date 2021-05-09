<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontes Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!--CSS Aplicação-->
    <link rel="stylesheet" href="/css/styles.css">

    <title>@yield('title')</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid justfy">
          <a class="navbar-brand" href="#">ICON</a>
        
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/federacao/listEmpresa">Lista Federação</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/empresas/create">Cadastrar Empresa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/federacao/create">Cadastro Federação</a>
              </li>
                <li>
                  <form action="/logout" method='POST'>
                    @csrf
                    <a href="/logout" class='nav-link' 
                        onclick = "event.preventDefault();
                                  this.closest('form').submit();"
                        >
                        Sair
                      </a>

                  </form>
                </li>
              @endauth
              @guest
             
              <li class="nav-item">
                <a class="nav-link " href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/register">Registrar</a>
              </li>
              @endguest

            </ul>
          </div>
        </div>
      </nav>
  </header>


    @yield('content')


  <footer >
    <p>Processo Trainee</p>
  </footer>
</body>
</html>