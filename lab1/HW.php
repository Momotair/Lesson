<?php
$number = 10 ;
if ($number > 0){
    echo "العدد موجب";
}
elseif ($number < 0){
    echo "العدد سالب";
}
else {
    echo "العدد صفر" ;
}
echo "<br>";
echo "-----------------------";
echo "<br>";

for ($i = 1; $i <= 5; $i++){
    echo "العدد: $i <br>" ;
}
echo "<br>";
echo "-----------------------";
echo "<br>";

$count = 1;
while ($count <= 5){
    echo "العدد : $count <br>";
    $count++;
}
echo "<br>";
echo "-----------------------";
echo "<br>";

$count = 1;
do {
    echo "العدد : $count <br>";
    $count++;
}while ($count <= 5);
echo "<br>";
echo "-----------------------";
echo "<br>";




?>

