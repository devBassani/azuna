<?php
    session_start();   
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioRegistro'],
        $_SESSION['usuarioSenha'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioNome'],
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: ../index.php");
?>