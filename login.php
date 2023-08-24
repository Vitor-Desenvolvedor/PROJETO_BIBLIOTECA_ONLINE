<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Inclua as metatags e folhas de estilo necessárias -->
    <title>Login</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <div id="header" class="system-header">
        <a href="principal.php" class="logo-link">
                <img id="logo" src="img/logo.png" alt="Logo da Empresa">
        </a>  
        <h1>Biblioteca Virtual</h1>
    </div>
    <div id="main-content">
        <form action="autenticar.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="usuario"><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="senha"><br>
            <input type="submit" value="Entrar">
        </form>  
    </div>
    <section class="funcoes-php">
            <?php
                // Incluir código para testar conexão
                //include 'conexao.php';

                // Incluir código de cadastro
                include 'autenticar.php';

                // Incluir código de pesquisa
                //include 'pesquisar.php';

                // Incluir código de relatórios
                //include 'relatorios.php';

                //criacao de variaveis para conexao com o banco de dados
    
            ?>
        </section>
</body>
</html>
