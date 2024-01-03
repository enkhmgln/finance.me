<?php
require 'inc/header.php';

// Тэмдэгт мөрийг залгах
$name = "сараа";
$name .= " нараа болдоо";
// echo $name;

// Reference буюу заалт
$a = 23;
$b = &$a;

$a = 28;
$b = 15;

echo "$a $b";

require 'inc/footer.php';