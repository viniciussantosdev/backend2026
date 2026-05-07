<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}

?>
<br>

<?php
$hora = 15;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>

<br>

<?php
$semaforo = "amarelo";

if ($semaforoatencao == "amarelo") {
    echo "atenção, o semáforo vai abrir";
} elseif ($semaforo == "verde") {
    echo "Siga!";
} else {
    echo "pare!";
}
?>

<br>

<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>

<br>

<?php
$data = date('d');
echo "Hoje é dia $data!";
?>

<br>

<?php
$dia = date ('d/m/20y');
$hora = date('i:s');
$horabrasil = date("H");

echo "$dia";
echo "<br>";
echo "$horabrasil:" . "$hora";
echo "<br>";
date_default_timezone_set('America/Sao_Paulo');
?>

<br>

<?php
$nome = "uninove";
echo "nome = $nome";
echo "<br>md5 = " . md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>hash =" . $hash;
?>