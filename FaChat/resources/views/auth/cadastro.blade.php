
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
    <link rel="stylesheet" href="{{ asset('css/nav-logo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/seta.css') }}">

    <script src="https://kit.fontawesome.com/53d9b7f434.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>FaChat</title>

</head>

<body>
    <div id="root">
        <div class="container-cadastro">
    <div class="card-header" id="header-color-al">
        <div class="content-form-login">
            <div class="login-wrapper">
                <div class="admin">
                </div>

                <form class="login-form" method="POST" action="https://alagoasdigital.al.gov.br/cadastro" autocomplete="off">
                    <input type="hidden" name="_token" value="UNHg1OYLi3r2TMYu8nXzYaOhAaJ8yIZP5NaTJx9M">                    
                    <div class="form-group border">
                        <label for="nome" class="sr-only">Nome</label>
                        <img src="/image/doc.png" alt="Senha" id="icon-login">
                        <input value="" name="nome" type="text" placeholder="Nome" class="form-control " id="nome" aria-describedby="nome">
                    </div>
                    <input type="hidden" name="_token" value="UNHg1OYLi3r2TMYu8nXzYaOhAaJ8yIZP5NaTJx9M">                    
                    <div class="form-group border">
                        <label for="sobrenome" class="sr-only">Sobrenome</label>
                        <img src="/image/doc.png" alt="sobrenome" id="icon-login">
                        <input value="" name="nome" type="text" placeholder="Nome" class="form-control " id="nome" aria-describedby="nome">
                    </div>
                    <div class="form-group border">
                        <label for="email" class="sr-only">Email</label>
                        <img src="/image/doc.png" alt="email" id="icon-login">
                        <input value="" name="email" type="email" placeholder="Email" class="form-control " id="email" aria-describedby="email">
                    </div>
                    <div class="form-group border">
                        <label for="senha" class="sr-only">Senha</label>
                        <img src="/image/cadeado.png" alt="Senha" id="icon-login">
                        <input value="" name="senha" type="password" placeholder="Senha" class="form-control " id="senha">
                    </div>
                    <div class="form-group border">
                        <label for="senha" class="sr-only">Confirmar Senha</label>
                        <img src="/image/cadeado.png" alt="Senha" id="icon-login">
                        <input value="" name="senha_confirmation" type="password" placeholder="Confirmar Senha" class="form-control " id="senha_confirmation">
                    </div>
                    <div class="btn-container text-center">
                        <a href="/" class="btn btn-primary" id="btn-acessar">
                            Voltar
                        </a>
                        <button type="submit" class="btn btn-primary" id="btn-enviar">
                            Finalizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>


</div>
<script>
    //Expressão regular para o campo nome
    $("#nome").on("input", function() {
        var regexp = /[^a-zA-Zà-úÀ-Ú ]/g;
        if (this.value.match(regexp)) {
            $(this).val(this.value.replace(regexp, ''));
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