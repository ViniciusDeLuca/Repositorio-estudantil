<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FaChat</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                   <strong>FaChat!</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item dropdown dropend">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Matérias
                            </a>
                            <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="navbarDarkDropdownMenuLink">
                                @foreach ($materias as $materia)
                                    <li><a class="dropdown-item" href="#">{{ $materia->nome }}</a></li>
                                @endforeach
                            </ul>
                        </li> --}}
                        @if(session('docente'))
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('redirecionarCadastroPublicacao') }}">Adicionar Publicação</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropstart">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="navbarDropdownMenuLink">
                                @if (session('docente'))
                                    <li><a class="dropdown-item" href="#">Olá {{ session('docente')->nome }}</a></li>
                                    <li><a class="dropdown-item" href="#">Area Docente</a></li>
                                @endif
                                @if (session('aluno'))
                                    <li><a class="dropdown-item" href="#">Olá {{ session('aluno')->nome }}</a></li>
                                @endif
                                {{-- <li><a class="dropdown-item" href="#">Editar Perfil</a></li> --}}
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
