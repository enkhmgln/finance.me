<?php
require 'inc/header.php';

// $dun = 91;

// if ($dun < 60) {
//     $unelgee = 'F';
// } elseif ($dun < 70) {
//     $unelgee = 'D';
// } elseif ($dun < 80) {
//     $unelgee = 'C';
// } elseif ($dun < 90) {
//     $unelgee = 'B';
// } elseif ($dun < 100) {
//     $unelgee = 'A';
// } else {
//     $unelgee = 'Todorhoigui';
// }

$dun = 88;
switch ($dun) {
    case $dun < 60:$unelgee = 'F';
    case $dun < 70:$unelgee = 'D';
    case $dun < 80:$unelgee = 'C';
    case $dun < 90:$unelgee = 'B';
        echo 'B shuu';
        break;
    case $dun < 100:$unelgee = 'A';
        echo 'A shuu';
    default:$unelgee = 'Todorhoigui';
}

echo $unelgee;

require 'inc/footer.php';