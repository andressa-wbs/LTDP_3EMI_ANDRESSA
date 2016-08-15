<?php

echo "GET:" . var_dump($_GET) . "<br>";
echo "POST:" . var_dump($_POST) . "<br>";
echo "posicao nome" . $_POST['nome'];

$servidor = "localhost";
$usuario = "root";
$senha = "";

$nome_banco = "bd-centro-interesse";

$conexao = mysql_connect($servidor, $usuario, $senha);

$banco = mysql_select_db($nome_banco, $conexao) or die( "Não foi possível conectar ao banco MySQL");
if (!$conexao) {

echo "Não foi possível conectar ao banco MySQL."; 
exit;}
else {echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
";}

?>