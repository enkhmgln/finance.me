<?php
require 'inc/header.php';

// Арифметик операторууд, эсрэг утга олгох
$a = 30;
$b = 2;
$c = $a * $b + 3;

// echo -$a * $b;

// Хаалт ашиглах, бодох дараалал
// echo ($a + $b - 3) * 3;

// Үлдэгдэл бодох
// echo 12 % 3;

// Нэмэгдүүлэх хорогдуулах
$a /= $b + 1;
// echo $a;

// логик эсрэг
$isValid = false;

$isValid = !$isValid;
var_dump($isValid);

require 'inc/footer.php';