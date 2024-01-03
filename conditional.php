<?php
require 'inc/header.php';

$t = 35;
$tenger = 'цэлмэг';

// Логик операторууд ба if
if ($t <= -20) {
    echo 'Хөлдөхөөр хүйтэн байна';
} elseif ($t < -10 && $t > -20) {
    echo 'аймаар хүйтэн байнаа';
} elseif ($t < 0 and $t > -10) {
    echo 'хүйтэн байнаа';
} elseif ($t > 0 and $t < 10) {
    echo 'сэрүүхэн байна';
}

if ($t > 10 and $t < 20) {
    echo 'дулаахан байна';
} elseif ($t > 20 && $t < 30 || $tenger == 'бороотой') {
    echo 'Гоё өдөр байна байна';
} else {
    echo 'шатмаар халуун байна';
}

$a = 123;
var_dump($a);

echo '<br>';

if ($a === '123') {
    echo 'тэнцүү';
} else {
    echo 'тэнцүү биш';
}

require 'inc/footer.php';