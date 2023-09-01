<?php

// Inclui página de conexão como banco de dados
include 'conexao.php';

//Receber valores do Formulário
    if(isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['genero']) && isset($_POST['idioma'])){

        $novoTitulo = $_POST['titulo'];
        $novoAutor = $_POST['autor'];
        $novoGenero = $_POST['genero'];
        $novoIdioma = $_POST['idioma'];

        //Consulta SQL para inserir um novo registro 

        $sqlInserir = "INSERT INTO tbl_livros (titulo, autor, genero, idioma) VALUES('$novoTitulo','$novoAutor','$novoGenero','$novoIdioma')";
        
        if($conexao->query($sqlInserir) === TRUE ){

            echo "<br>","Novo registro inserido com sucesso!";
            //header ("location: cadastrar_livros.php");

        } else {
            //header ("location: cadastrar_livros.php");
            echo "<br>","Erro ao inserir novo registro!";
        }

    }

?>

