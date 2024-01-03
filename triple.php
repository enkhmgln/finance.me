<?php
require 'inc/header.php';
$shoo = 6;
// if ($shoo > 3) {
//     $urDun = 'hojloo';
// } else {
//     $urDun = 'hojigdloo';
// }

// $urDun = $shoo > 3 ? 'hojloo' : 'hojigdloo';

// echo $urDun;
// $b = 8;
// if ($b === null) {
//     $a = 10;
// } else {
//     $a = $b;
// }
$b = 3;
$a = $b ?? 15;
echo $a;

require 'inc/footer.php';