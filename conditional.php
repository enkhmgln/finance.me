<?php
// if нөхцөл шалгалт ба Логик оператор
require 'inc/header.php';

$temprature = 16;

if ($temprature <= 0 and $temprature > -14) {
    echo 'Сэрүүхэн байна';
} elseif ($temprature >= 15) {
    echo 'Халуун байна';
} elseif ($temprature > 0 and $temprature <= 14) {
    echo ' Дулаан байна';
} elseif ($temprature <= -15) {
    echo ' Хүйтэн байна';
} else {
    echo 'Цаг агаар олдсонгүй';
}

require 'inc/header.php';
