
<?php

// Incluir a pagina de conexão do banco de dados
include 'conexao.php';

///////////////////////////////////////////////
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



<?php
////////////////////////////////////////////////
// Comandos para excluir dados de uma tabela

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

<?php
//////////////////////////////////////////////////////////////
// Cadastrar dados em uma tabela 

// Inclui página de conexão como banco de dados
include 'conexao.php';

//Receber valores do Formulário
    if(isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['genero']) && isset($_POST['idioma'])){

        $novoTitulo = $_POST['titulo'];
        $novoAutor = $_POST['autor'];
        $novoGenero = $_POST['genero'];
        $novoIdioma = $_POST['idioma'];

        //Consulta SQL para inserir um novo registro 

        $sqlInserir = "INSERT INTO tbl_livros (titulo, autor, genero, idioma) VALUES('$novoTitulo','$novoAutor','$novoGenero','$novoIdioma')";
        
        if($conexao->query($sqlInserir) === TRUE ){

            //echo "Novo registro inserido com sucesso!";
            header ("location: principal.php");

        } else {
            echo "Erro ao inserir novo registro!";
        }

    }

?>