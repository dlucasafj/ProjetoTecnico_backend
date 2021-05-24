<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontes Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--CSS Aplicação-->
    <link rel="stylesheet" href="/css/styles.css">

    <title>@yield('title')</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid justfy">
        
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">EcompJr</a>
                </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/empresa">Empresas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/federacao/listFederacao">Lista Federação</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/federacao/listEmpFed">Empresas por Federação</a>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>