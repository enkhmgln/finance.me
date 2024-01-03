<?php
require 'inc/header.php';

// $_SERVER массиваар давталт хийж хэвлэх
// arr($_SERVER);

// echo $_SERVER['REQUEST_URI'];

// $nums = [3, 12, 23, 44, 22, 13, -2, 345, 56, 16];

// foreach ($nums as $key => $value) {
//     $value *= 2;
//     echo ++$key . ') ' . $value . '<br>';
// }

foreach ($_SERVER as $index => $value) {
    echo $index . ' : ' . $value . '<br>';
}
// foreach ($_SERVER as $index => $utga) {
//     echo "$index : $utga" . '<br>';
// }

require 'inc/footer.php';
