<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('/css/nav-logo.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/welcome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/login3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/seta.css') }}">

    <script src="https://kit.fontawesome.com/53d9b7f434.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Login - FaChat</title>

</head>

<body>
    <div id="root">
        <link rel="stylesheet"
            href="https://cdn-dsgovserprodesign.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />

        <div class="container-login">
            <div class="row">
            </div>
            <div class="card-header" id="header-color-al">
                <div class="content-form-login">
                    <div class="login-wrapper">
                        @if (session('erro'))
                            <div class="alert alert-danger" id="erro">
                                {{ session('erro') }}
                            </div>
                        @endif
                        @if (session('sucesso'))
                            <div class="alert alert-success sucesso" id="sucesso">
                                {{ session('sucesso') }}
                            </div>
                        @endif
                        <h2 class="text-center titulo-login">Login</h2>
                        <form class="login-form" method="get" action="{{ route('logar') }}" autocomplete="off"
                            id="cidadao-form">
                            <div class="form-group border">
                                <label for="email" class="sr-only">Email</label>
                                <img src="/image/auth/doc.png" alt="Email" id="icon-login">
                                <input value="{{ old('email') }}" required name="email" type="email"
                                    placeholder="Email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="form-group border">
                                <label for="senha" class="sr-only">Senha</label>
                                <img src="/image/auth/cadeado.png" alt="Senha" id="icon-login">
                                <input required name="senha" type="password" placeholder="Senha" class="form-control"
                                    id="senha">
                            </div>

                            <div class="button-forgot">
                                <div class="btn-container">
                                    <a href="{{ route('redirecionarCadastro') }}" class="btn btn-primary"
                                        id="btn-acessar2">
                                        Crie sua conta
                                    </a>
                                    <button type="submit" class="btn btn-primary" id="btn-acessar">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById("erro").style.display = "none";
            }, 15000);

            function hide() {
                document.getElementById("erro").style.display = "none";
            }
            setTimeout(function() {
                document.getElementById("sucesso").style.display = "none";
            }, 15000);

            function hide() {
                document.getElementById("sucesso").style.display = "none";
            }
        </script>

    </div>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>

</html>
