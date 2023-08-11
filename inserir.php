<?php

// Inclui página de conexão como banco de dados
include 'conexao.php';

//Receber valores do Formulário
    if(isset($_POST['nome'])&& isset($_POST['idade'])){

        $novoNome = $_POST['nome'];
        $novaIdade = $_POST['idade'];

        //Consulta SQL para inserir um novo registro 

        $sqlInserir = "INSERT INTO usuário(Nome,idade) VALUES('$novoNome','$novaIdade')";

        if($conexao->query($sqlInserir) === TRUE ){

            //echo "Novo registro inserido com sucesso!";
            header ("location: principal.php");
        } else{
            echo "Erro ao inserir novo registro!";
        }

    }

?>