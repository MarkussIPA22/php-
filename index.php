<?php

// 11.17.23
// for ($i = 2; $i<=100; $i = $i + 2) {
// echo $i . "<br>" ;

// }
 

// $fak = 1;
// for($i =10; $i>=1; $i =$i -1) {
//     $fak = $fak * $i;
// }
// echo $fak;

$a=1;
$b=1;

echo "sie ir visi fibonaci skaitli zem 1000 <br>";

while($b < 1000) {
    echo $b . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;
}

// ?>