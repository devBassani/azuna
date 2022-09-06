<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("config.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['registro'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['registro']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $usuario = (int)$_POST['registro'];
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);
        $senha = (int)$_POST['senha'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM users WHERE registro = $usuario && senha = $senha LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = (int)$resultado['userID'];
            $_SESSION['usuarioRegistro'] = (int)$resultado['registro'];
            $_SESSION['usuarioSenha'] = (int)$resultado['senha'];
            $_SESSION['usuarioNiveisAcessoId'] = (int)$resultado['nivel_acesso'];
            $_SESSION['usuarioNome'] = $resultado['primeiro_nome'].' '.$resultado['ultimo_nome'];
            if($_SESSION['usuarioNiveisAcessoId'] == 1){
                header("Location: ../pages/equipamento.php");
            }else{
                header("Location: ../pages/equipamento.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "registro ou senha Inválido";
            header("Location: ../index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "preencha todos os campos!";
        header("Location: ../index.php");
    }
?>