<?php
require 'inc/header.php';

$mn = "PХэЛhp   хэл456";
$eng = '<h1 style="color:green">PHP h1 h1 h1 ==> Hypertext Preprocessor</h1>';

// strlen
// echo mb_strlen($eng);

// trim
// echo mb_strlen(trim($mn));

// strtolower, strtoupper, mb_
// echo strtoupper($eng);

// substr, mb_substr
// echo mb_substr($eng, -3, 3);

// str_repeat
// $mn = str_repeat("12", 3);
// echo $mn;

// str_replace
// $newEng = str_replace('h1', 'h6', $eng, $count);
// echo $count;

// strpos, stripos, strstr
// echo mb_stristr($mn, 'хэл');

// htmlspecialchars
echo htmlspecialchars($eng);

// implode, join, explode
$str = "one two three five";
$arr = explode(' ', $str);
def($arr);

$newStr = implode('-', $arr);

echo $newStr;

require 'inc/footer.php';
