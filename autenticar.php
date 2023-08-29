<?php
    session_start();
    include 'conexao.php';
  

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
        $usuarioInput = $_POST ['usuario'];
        $senhaInput = $_POST ['senha'];

        // Consulta SQL para buscar o usuário e senha no banco de dados

        $sql = "SELECT * FROM tbl_usuarios WHERE (usuario = '$usuarioInput') AND (senha = '$senhaInput')";
        $resultado = $conexao -> query ($sql);
            
    
        if ((($usuarioInput === "' or '1'='1") or ($usuarioInput === "' or '1'='1--")) or (($senhaInput === "' or '1'='1") or ($senhaInput === "' or '1'='1--"))){

            echo "<br>","Te lascar!";                   


        } else {

            if ($resultado -> num_rows === 1) {// se encontrou um usuário correspondente 
            
                $_SESSION['autenticado'] = true;
                
                echo "<br>","Bem vindo!";
                header("location: principal.php");
                //exit;

            }   else { 
                            
                echo "<br>","Usuário ou senha errados!";
                // exit;
                // header("location: login.php");

                } 


        }
                
        
    } 
    
    //  or ($usuarioInput === " ' or '1'='1--")) or (($senhaInput === " ' or '1'='1") or ($senhaInput === " ' or '1'='1--"))

    // Teste SQL
    //' or '1'='1-- // Usuário e senha

    //' or '1'='1 // Somente no usuário e senha em branco
    
    
    // Evitando SQL Injection com um código ajeitado
    /*PreparedStatement statement = connection.prepareStatement("SELECT * FROM products WHERE category = ?");
    statement.setString(1, input);
    ResultSet resultSet = statement.executeQuery();*/


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