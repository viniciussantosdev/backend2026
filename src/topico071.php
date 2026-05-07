<?php
echo "<h1>While</h1>";
$i=0;
while($i<10){
    echo " $i";
    $i++;$i++;
}
echo "<h1>Do While</h1>";
$i = 7;
do{
    echo " $i";
    $i++;
} while ($i<5);

echo "<h2>For</h2>";
for($i=0; $i<5; $i++) echo "$i";

for($j=0; $j<2; $j++) {
    echo "$i $j";
}
?>