<?php

echo "GET:" . var_dump($_GET) . "<br>";
echo "POST:" . var_dump($_POST) . "<br>";
echo "posicao nome" . $_POST['nome'];

$servidor = "localhost";
$usuario = "root";
$senha = "";

$nome_banco = "bd-centro-interesse";

$conexao = mysql_connect($servidor, $usuario, $senha);

$banco = mysql_select_db($nome_banco, $conexao) or die( "N�o foi poss�vel conectar ao banco MySQL");
if (!$conexao) {

echo "N�o foi poss�vel conectar ao banco MySQL."; 
exit;}
else {echo "Parab�ns!! A conex�o ao banco de dados ocorreu normalmente!.
";}

?>