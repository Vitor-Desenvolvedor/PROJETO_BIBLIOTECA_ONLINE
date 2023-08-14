<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/Biblioteca_icone.png">
    <title>Biblioteca Digital</title>
</head>
<body>
    <header>
        <section class="area-titulo">
        <div class="area-logo">
            <img src="img/logo.png" alt="Logo indisponível">
        </div>
        <div class="titulo">
            <h1>Biblioteca Digital</h1>
        </div>
        </section>
        <nav>
            <ul>
                <li>Pesquisar</li>
                <li>Cadastrar</li>
                <li>Relatórios</li>
            </ul>
        </nav>
    </header>
    
   


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
</div>
    <footer class="rodape" >Desenvolvido por Vitor-Desenvolvedor, &copy; Todos os direitos reservados</footer>
</body>
</html>