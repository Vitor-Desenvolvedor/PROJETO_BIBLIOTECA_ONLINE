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

<h1>Inserir Novo usuário</h1>
    <form action="inserir.php" method="POST">
        <label>Nome:<input type="text" name="nome"></label><br><br>
        <label>Idade:<input type="text" name="idade"></label><br><br>
        <input type="submit" value="Inserir">
    </form>

    <h1>Excluir usuário</h1>
    <form action="excluir.php" method="POST">
        <label>Código do Usuário:<input type="text" name="id_excluir"></label><br><br>
        <input type="submit" value="Excluir">
    </form>