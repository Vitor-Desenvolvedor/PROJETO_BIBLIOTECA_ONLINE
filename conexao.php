<?php



//if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    //criacao de variaveis para conexao com o banco de dados

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'db_teste2';

    //Criacao de conexao com o banco de dados

    $conexao = new mysqli($host,$usuario,$senha,$banco);

    //teste de conexao com o banco de dados

    if($conexao->connect_error){

        die('Erro de conexao: '.$conexao->connect_error);
    }        
   
//}

/*$sql = "SELECT nome, idade, sexo  FROM cliente where codcli = 1";

$resultado = $conexao->query($sql);
 echo '<br><br>';

$linha = $resultado->fetch_assoc();
$nome = $linha['nome'];
$idade = $linha['idade'];
$sexo = $linha['sexo'];

echo $nome;
echo '<br><br>';
echo $idade;
echo '<br><br>';
echo $sexo;
*/
?>

