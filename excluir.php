<?php

// Inclui página de conexão com o banco de dados
include 'conexao.php';


    //Consulta SQL para excluir registro 
    
    if(isset($_POST['id_excluir'])){
        $idExcluir = $_POST['codLivro'];
        echo $idExcluir;
        $sqlExcluir = "DELETE FROM tbl_livros WHERE codLivro = $idExcluir";


        if($conexao->query($sqlExcluir) === TRUE){

            echo "Registro Excluido com sucesso!";
            header ("location: principal.php");
        }else{
            echo "Erro ao excluir o registro".$conexao->error;
        }
    }
?>