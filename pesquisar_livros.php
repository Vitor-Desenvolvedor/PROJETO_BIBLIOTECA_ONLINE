<?php
    session_start();
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== TRUE){
    header("location:login.php");
    exit;
    }
?>

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
                <li><a href="#">Pesquisar</a></li>
                <li><a href="cadastrar_livros.php">Cadastrar</a></li>
                <li><a href="#Relatorios">Relatórios</a></li>
            </ul>
            <div class="usuarios">
                <div>
                <a href="#Usuários">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>Usuários</a>
                </div>
                <div class="sub-usuarios">
                    <ul>
                        <li><a href="#Perfil" class="botão-perfil">Perfil</a></li>
                        <li><a href="#NovaSenha" class="botão-alterar-senha">Alterar Senha</a></li>
                        <li><a href="cadastrar_usuario.php" class="botão-novo-usuario">Novo Usuário</a></li>
                        <li><a href="logout.php" class="botão-logout">Sair</a></li>
                    </ul>
                </div>
        </nav>

    </header>
    <main class="card-principal">
        <!-- Seção de pesquisa -->
        <section class="pesquisar">
            <div class="titulo-pesquisar">
                <h1> Pesquisar livros 📚</h1>
            </div>
            <div class="insercao-pesquisa">
                <input type="text" class="barra-pesquisar" name="pesquisa"> 
                <button class="botao-pesquisa">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
                 <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"/>
                </svg>
                </button>
            </div>
            <form action="" method="POST" class="lista-cadastrados">
                <table class="tabela-lista-pesquisar">
                    <tr>
                        <th> Código </th>
                        <th> Título </th>
                        <th> Autor  </th>
                        <th> Gênero </th>
                        <th> Idioma </th>
                        <th> Editar </th> 
                    </tr>                
                        
                        <?php 
                            include 'listar.php';
                        ?>

                        <td>
                            <!--<button class="botões-editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                            </button>
                            <button class="botões-editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            </button> -->
                        </td>                                       
                </table>
            </form>
        </section>
<!-- Seção desativada por enquanto - até finalizar a pesquisa -->
<!--
        <section class="espaco-secoes">

        </section>

         Seção de cadastro 
        <section class="cadastro">
            <div class="titulo-cadastro">
                <h1> Cadastrar 📝</h1>
            </div>
            <div class="cadastrar">
                <form action="cadastrar.php" method="POST">
                <ul class="lista-principal">
                    <li><label class="label-e">*Título: </label><input type="text" name="titulo"></li>
                    <li><label class="label-e">*Autor: </label><input type="text" name="autor"></li>
                    <li><label class="label-e">Gênero: </label>
                        <select name="genero">
                        <option value="" disabled selected>Selecione um gênero</option>
                        <option value="Ficção">Ficção</option>
                        <option value="Suspense">Suspense</option>
                        <option value="Romance">Romance</option>
                        </select>
                    </li>
                    <li class="secao-idiomas"><label class="label-e">*Idioma:</label>
                        <ul class="lista-idiomas">
                        <li><label><input type="radio" name="idioma" value="Português"> Português</label></li>
                        <li><label><input type="radio" name="idioma" value="Inglês"> Inglês</label></li>
                        <li><label><input type="radio" name="idioma" value="Espanhol"> Espanhol</label></li>
                        <li><label><input type="radio" name="idioma" value="Outra"> Outra</label></li>
                        </ul>
                    </li>                    
                </ul>
                <div class="botao-cadastrar">                       
                <input type="submit" value="Cadastrar" class="button-56">
                </div>
                </form>
            </div>

        </section> -->
            <!-- Seção de Relatórios -->
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