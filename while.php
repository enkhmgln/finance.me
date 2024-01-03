<?php
require 'inc/header.php';

// while loop
$i = 101;
while ($i <= 100) {
    echo $i++ . ' ';
}

// do while loop
$i = 107;
do {
    echo $i . ' ';
    $i += 2;
} while ($i < 101);

require 'inc/footer.php';