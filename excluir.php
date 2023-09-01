<?php

// Inclui página de conexão com o banco de dados
include 'conexao.php';


    //Consulta SQL para excluir registro 
    
    if(isset($_POST['id_excluir'])){
        $idExcluir = $_POST["id_excluir"];
        echo $idExcluir;
        //echo "SELECT FROM tbl_livros WHERE codLivro=$codigolivro";
        $sqlExcluir = "DELETE FROM tbl_livros WHERE codLivro = $idExcluir";


        if ($conexao->query($sqlExcluir) === TRUE) {

            echo "<br>","Registro Excluido com sucesso!";
            //header ("location: pesquisar_livros.php");
        } else {
            echo "<br>","Erro ao excluir o registro".$conexao->error;
        }
    }
?>