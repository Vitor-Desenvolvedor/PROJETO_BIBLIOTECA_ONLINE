<?php

          // Incluir a pagina de conexão do banco de dados
          include 'conexao.php';

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