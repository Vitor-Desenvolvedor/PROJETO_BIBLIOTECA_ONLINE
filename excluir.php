<?php

// Inclui página de conexão com o banco de dados
include 'conexao.php';


//Consulta SQL para excluir registro 
    
    if(isset($_POST['id_excluir'])){
        $idExcluir = $_POST['id_excluir'];
        echo $idExcluir;
        $sqlExcluir = "DELETE FROM usuário WHERE Código = $idExcluir";


        if($conexao->query($sqlExcluir) === TRUE){

            //echo "Registro Excluido com sucesso!";
            header ("location: principal.php");
        }else{
            echo "Erro ao excluir o registro".$conexao->error;
        }
    }

?>