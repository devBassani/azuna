<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Tela com a finalidade de autenticação de usuário e criação de usuário." />
    <meta name="autor" content="André Victor" />
    <meta name="versão" content="Root 14.21.44" />
    <title>AZUNA - login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/" />
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="php/login.php" method="post">
            <img class="mb-4" src="https://cdn-icons-png.flaticon.com/512/57/57162.png" alt="" width="50" height="50" />
            <h1 class="h3 mb-3 fw-normal">Bem-vindo!</h1>
            <p class='lead'>
            <p>
                <?php
                    session_start();
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                    if(isset($_SESSION['logindeslogado'])){
                        echo $_SESSION['logindeslogado'];
                        unset($_SESSION['logindeslogado']);
                    }
                ?>
            </p>
            </p>
            <div class="form-floating">
                <input name="registro" type="number" class="form-control" id="floatingInput" placeholder="1234567890"
                    onkeydown="return event.keyCode !== 69" />
                <label for="floatingInput">número de cadastro</label>
            </div>
            <div class="form-floating">
                <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="senha" />
                <label for="floatingPassword">senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" /> permanance conectado
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">
                entrar
            </button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
</body>

</html>