
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

<!-- Comando para inserir os dados inseridos -->
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