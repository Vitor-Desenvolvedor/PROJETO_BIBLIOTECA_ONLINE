<?php
    session_start();

    $usuariovalido = "teste";
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

    //echo 'Usuário ou senha invalidos!';


?>