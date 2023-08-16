<?php
    // Incluir a pagina de conexão do banco de dados
    //include 'conexao.php';

    // Incluir conexão com o banco de dados - alterado para não aparecer a mensagem de "Database - OK"
     //criacao de variaveis para conexao com o banco de dados

     $host = 'localhost';
     $usuario = 'root';
     $senha = '';
     $banco = 'db_biblioteca_digital';
 
     //Criacao de conexao com o banco de dados
 
     $conexao = new mysqli($host,$usuario,$senha,$banco);
 
     //teste de conexao com o banco de dados
 
     if($conexao->connect_error){
 
         die('Erro de conexao: '.$conexao->connect_error);
 
     }   

    // Listar usuários cadastrados no sistema

    $sqlListar = "SELECT * FROM tbl_livros";
    $resultado = $conexao -> query($sqlListar);

    // Condicionamento para listar
    if($resultado->num_rows > 0){

        echo "<ul>";
        while($linha = $resultado->fetch_assoc()){
        
            echo "<li> Código:".$linha['codLivro']."| Título:".$linha['titulo']."| Autor:".$linha['autor']."| Gênero:".$linha['genero']."| Idioma:".$linha['idioma']." </li>";

        }

        echo "</ul>";

    } else {

        echo "Nenhum valor encontrado!";

    }

?>