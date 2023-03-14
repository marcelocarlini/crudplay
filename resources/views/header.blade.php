<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud_play</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-sm text-white ">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
                    <svg class="bi me-1 text-white" width="200" height="10">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <img src="{{ asset('img/logo.svg') }}">
                </a>
                <ul class="nav nav-pills nav-fill nav-justified row align-items-start ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" style="text-decoration: blueviolet" href="#">Novos</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Editar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Estoque</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Relatórios</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sair</a></li>
                </ul>
            </header>
        </div>
    </header>
    @yield('navbar_basico')


</body>

</html>
