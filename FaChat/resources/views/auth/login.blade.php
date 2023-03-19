
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CN3RMJ1JS5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CN3RMJ1JS5');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169615215-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-169615215-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90078207-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90078207-1');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://alagoasdigital.al.gov.br/css/nav-logo.css">
    <link rel="stylesheet" href="https://alagoasdigital.al.gov.br/css/welcome.css">
    <!-- <link rel="stylesheet" href="https://alagoasdigital.al.gov.br/css/login.css"> -->
    <link rel="stylesheet" href="https://alagoasdigital.al.gov.br/css/login3.css">
    <link rel="stylesheet" href="https://alagoasdigital.al.gov.br/css/footer.css">
    <link rel="stylesheet" href="https://alagoasdigital.al.gov.br/css/seta.css">

    <script src="https://kit.fontawesome.com/53d9b7f434.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Login - FaChat</title>

</head>

<body>
    <div id="root">
        <link rel="stylesheet" href="https://cdn-dsgovserprodesign.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />

<div class="container-login">
    <div class="row">
                    </div>
    <div class="card-header" id="header-color-al">
        <div class="content-form-login">
            <div class="login-wrapper">
                @if (session('erro'))
                    <div class="alert alert-danger">
                        {{ session('erro') }}
                    </div>
                @endif
                @if (session('sucesso'))
                    <div class="alert alert-success">
                        {{ session('sucesso') }}
                    </div>
                @endif
                <br>
                <form class="login-form" method="get" action="{{ route('logar') }}" autocomplete="off" id="cidadao-form">
                    <div class="form-group border">
                        <label for="email" class="sr-only">Email</label>
                        <img src="/image/auth/doc.png" alt="Email" id="icon-login">
                        <input value="" required name="email" type="email" placeholder="Email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="form-group border">
                        <label for="senha" class="sr-only">Senha</label>
                        <img src="/image/auth/cadeado.png" alt="Senha" id="icon-login">
                        <input required name="senha" type="password" placeholder="Senha" class="form-control" id="senha">
                    </div>

                    <div class="button-forgot">
                        <div class="btn-container">
                            <!-- <button class="br-sign-in" type="button">Entrar com&nbsp;
                                <img src="https://www.gov.br/++theme++padrao_govbr/img/govbr-colorido-b.png" alt="gov.br" />
                            </button> -->
                            <button type="submit" class="btn btn-primary" id="btn-acessar">
                                Entrar
                            </button>
                            <a href="{{ route('redirecionarCadastro') }}" class="btn btn-primary" id="btn-acessar2">
                                Cadastrar
                            </a>
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

    function hide() {
        document.getElementById("erro3").style.display = "none";
    }

    var btn1 = document.querySelector("#ldap_check");
    var btn2 = document.querySelector("#btn-acessar");
    var formLDAP = document.querySelector("#ldap-form");
    var formCidadao = document.querySelector("#cidadao-form");

    btn1.addEventListener("click", function() {

        if (formLDAP.style.display === "none") {
            formLDAP.style.display = "block";
            formCidadao.style.display = "none";
        } else {
            formLDAP.style.display = "none";
            formCidadao.style.display = "block";
        }
    });

    btn2.addEventListener("click", function() {

        if (formLDAP.style.display === "none") {
            formCidadao.submit();
        } else {
            formLDAP.submit();
        }
    });
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