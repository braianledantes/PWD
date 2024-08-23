<?php 

$num = 2;

echo "FOR<br>";
for ($i=1; $i <= 10; $i++) { 
    $result = $num * $i;
    echo "$num x $i es $result<br>";
}

echo "<br>WHILE<br>";
$i = 1;
while ($i <= 10) {
    $result = $num * $i;
    echo "$num x $i es $result<br>";
    $i++;
}

echo "<br>DO WHILE<br>";
$i = 1;
do {
    $result = $num * $i;
    echo "$num x $i es $result<br>";
    $i++;
} while ($i <= 10);