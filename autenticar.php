<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $usuarioInput = $_POST ['usuario'];
        $senhaInput = $_POST ['senha'];

        // Consulta SQL para buscar o usuário e senha no banco de dados

        $sql = "SELECT * FROM tbl_usuarios WHERE usuario = '$usuarioInput' AND senha = '$senhaInput'";
        $resultado = $conexao -> query ($sql);

        if ($resultado -> num_rows === 1) {// se encontrou um usuário correspondente 
        
            $_SESSION['autenticado'] = true;
                echo "Bem vindo!";
            //header("location: principal.php");
            //exit;

        }   else {           
                echo "<br>","Usuário ou senha errados!";
            }
        
    }

    // Autenticação de usuario com variaveis internas do código:

    /*$usuariovalido = "teste";
    $senhavalida = "123";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $usuarioInput = $_POST['usuario'];
        $senhaInput = $_POST['senha'];

        if($usuarioInput === $usuariovalido && $senhaInput === $senhavalida){

            $_SESSION['autenticado'] = TRUE;
            header("location: principal.php");
            exit;

        } else {
            //die('Usuário ou senha invalidos!');
            echo 'Usuário ou senha invalidos!';
            //header("location: login.php");
                        
        }

        echo 'Usuário ou senha invalidos!';

    }

    //echo 'Usuário ou senha invalidos!'; */




?>