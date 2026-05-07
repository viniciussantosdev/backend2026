<?php
$a = 30;
$a = 10;
$a = 5;
echo "<br> a = $a";
$arr = [30,10,5];
echo "<br>arr = ".$arr[0];
echo "<br>arr = ".$arr[1];
echo "<br>arr = ".$arr[2];
echo "<br>";
$uf = ["SP", "RJ", "MG", "ES",];
echo "<br>arr = ".$uf[2];
echo "<pre>";print_r($arr);echo"</pre>";
echo "<br>";
$estudante = [
    "ra" => 123456,
    "nome" => "Bete",
    "curso" => "Ads"
];
echo "<br>arr = ".$estudante["ra"];
echo "<br>arr = ".$estudante["nome"];
echo "<br>arr = ".$estudante["curso"];
echo "<pre>";print_r($estudante);echo"</pre>";

$matriz = [
    [10,"navio",30],
    [40,"bote",60],
    ["agua",70,"aviao"]
];

echo "<br> ".$matriz[0][1];
echo "<br> ".$matriz[1][1];
echo "<br> ".$matriz[2][0];
echo "<br> ".$matriz[2][2];

$bd = [
    ["id"=>1,"nome"=>"Bete","curso"=>"ADS"],
    ["id"=>2,"nome"=>"Cleide","curso"=>"ENF"],
    ["id"=>3,"nome"=>"Beto","curso"=>"MED"],
    ];
echo "<br>";
echo "<br> ".$bd[0]["id"];
echo "<br> ".$bd[0]["nome"];
echo "<br> ".$bd[0]["curso"];
?>