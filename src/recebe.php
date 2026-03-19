<?php 
echo "<h1>Recebido!</h1>";
echo "<pre>"; print_r($_POST); echo "</pre>";  //mostra tudo que está em post (Senha e email)

$login = $_POST["login"];
$senha = $_POST["senha"];
echo "Login: <b>$login</b><br>";
echo "Senha: <b>$senha</b>";
?>