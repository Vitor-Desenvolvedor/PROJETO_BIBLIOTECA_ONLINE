<?php

// Inclui página de conexão como banco de dados
include 'conexao.php';

//Receber valores do Formulário
    if(isset($_POST['novoUsuario']) && isset($_POST['novaSenha']) && isset($_POST['confirmarSenha'])){

        $novoUsuario = $_POST['novoUsuario'];
        $novaSenha = $_POST['novaSenha'];
        $confirmarSenha = $_POST['confirmarSenha'];
        

        //Consulta SQL para inserir um novo registro 
        if (($novaSenha === $confirmarSenha) === true) {
        $sqlInserir = "INSERT INTO tbl_usuarios (usuario, senha) VALUES('$novoUsuario','$novaSenha')";
        
            if($conexao->query($sqlInserir) === TRUE ){

                echo "<br>","Novo registro inserido com sucesso!";
               //header ("location: cadastrar_usuario.php");

            }   else {
                    echo "<br>","Erro ao inserir novo registro!";
                }

        }   else {
                echo "<br>","Confirmação de senha errada!";
            }

   }

?>

