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
                <li>Pesquisar</li>
                <li>Cadastrar</li>
                <li>Relatórios</li>
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
                <h1> Cadastrar 📝</h1>
            </div>
            <div class="cadastrar">
                <form action="cadastrar.php" method="POST">
                <ul>
                    <li><label>Título: <input type="text" name="titulo"></label></li>
                    <li><label>Autor: <input type="text" name="autor"></label></li>
                    <li><label>Gênero: 
                        <select name="genero">
                        <option value="" disabled selected>Selecione um gênero</option>
                        <option value="Ficção">Ficção</option>
                        <option value="Suspense">Suspense</option>
                        <option value="Romance">Romance</option>
                        </select>
                    </label></li>
                    <li class="lista-idiomas"><label>Idioma:</label>
                        <ul>
                        <li><label><input type="radio" name="idioma" value="Português"> Português</label></li>
                        <li><label><input type="radio" name="idioma" value="Inglês"> Inglês</label></li>
                        <li><label><input type="radio" name="idioma" value="Espanhol"> Espanhol</label></li>
                        <li><label><input type="radio" name="idioma" value="Outra"> Outra</label></li>
                        </ul>
                    </li>                    
                </ul>
                <div class="botao-cadastrar">
                <input type="submit" value="Cadastrar">
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
                include 'cadastrar.php';

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