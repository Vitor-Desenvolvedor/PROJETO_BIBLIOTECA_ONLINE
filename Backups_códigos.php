
<!-- Comando para listar os dados inseridos -->
<div class="php">
<?php

// Incluir a pagina de conexão do banco de dados
include 'conexao.php';

// Listar usuários cadastrados no sistema

$sqlListar = "SELECT * FROM usuário";
$resultado = $conexao -> query($sqlListar);

// Condicionamento para listar
if($resultado->num_rows > 0){

    echo "<ul>";
    while($linha = $resultado->fetch_assoc()){

        echo "<li> Código:".$linha['Código']."| Nome:".$linha['Nome']."| Idade:".$linha['idade']."</li>";

    }

    echo "</ul>";

} else {

    echo "Nenhum valor encontrado!";

}

?>