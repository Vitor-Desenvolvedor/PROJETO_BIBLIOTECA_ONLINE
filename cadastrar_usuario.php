<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastrar_usuario.css">
    <link rel="icon" href="img/Biblioteca_icone.png">
    <title>Biblioteca Digital</title>
</head>
<body>
    <section class="container-principal">
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
                <li><a href="pesquisar_livros.php">Pesquisar</a></li>
                <li><a href="cadastrar_livros.php">Cadastrar</a></li>
                <li><a href="#Relatorios">Relatórios</a></li>
            </ul>
        </nav>
    </header>
    <main class="card-principal">
       <!-- <section class="pesquisar">
            <div class="titulo-pesquisar">
                <h1> Pesquisar livros </h1>
            </div> 

        </section>-->
        <section class="cadastro">
            <div class="titulo-cadastro">
                <h1> Cadastrar 🗿</h1>
            </div>
            <div class="cadastrar">
                <form action="cadastrar_usuario.php" method="POST">
                <ul class="lista-principal">
                    <li><label class="label-e">*Crie seu ID de Usuário: </label><input type="text" name="novoUsuario"></li>
                    <li><label class="label-e">*Crie sua senha: </label><input type="text" name="novaSenha"></li>
                    <li><label class="label-e">*Confirmar senha:</label><input type="text" name="confirmarSenha"></li>                   
                </ul>
                <div class="botao-cadastrar">                       
                <input type="submit" value="Cadastrar" class="button-56">
                </div>
                </form>
            </div>

        </section>
      <!--  <section class="relatorios">
            <div class="titulo-relatorios">
                <h1> Relatórios </h1>
            </div>

        </section> -->
        <section class="funcoes-php">
            <?php
                // Incluir código para testar conexão
                //include 'conexao.php';

                // Incluir código de cadastro
                include 'php/cadastrar_usuario_novo.php';

                // Incluir código de pesquisa
                //include 'pesquisar.php';

                // Incluir código de relatórios
                //include 'relatorios.php';

                //criacao de variaveis para conexao com o banco de dados
    
            ?>
        </section>
    </main>

</div>
    <footer class="rodape" >Desenvolvido por Vitor-Desenvolvedor, &copy; Todos os direitos reservados</footer>
    </section>
</body>
</html>