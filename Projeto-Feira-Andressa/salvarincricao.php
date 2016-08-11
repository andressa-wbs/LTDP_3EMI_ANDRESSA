<?php

echo "GET:" . var_dump($_GET) . "<br>";
echo "POST:" . var_dump($_POST) . "<br>";
echo "posicao nome" . $_POST['nome'];

$servidor = "localhost";
$usuario = "root";
$senha = "";

$nome_banco = "bd-centro-interesse";

$conexao = mysql_connetc($servidor, $usuario, $senha);

$banco = my_select_db($nome_banco, $conexao);

?>