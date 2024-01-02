<?php
require 'inc/header.php';
$students = ['bold', 'naraa', 'saraa'];
def($students);
$name = 'John';
// Array эсэхийг шалгах
echo var_dump(is_array($name));
$data = ['naraa' => 21, 'saraa' => 36, 'enkhee' => 20];
echo 'Энх-амгалангийн нас : ' . $data['enkhee'];
// Array - ийг хязгаарлах range func,
// 1 - ээс 100 хүртэл element-тай massive үүсгэж байна.
$numbers = range(1, 100);
// def($numbers);
// array - ийг элемэнтийг тоолох , count , sizeof
echo '<br>' . 'Нийт тоонууд : ' . count($numbers);
// echo sizeof($numbers);
// massive - ийн элемэнтийг string дотор хэвлэх
echo "<br>Таны нас   : {$data['enkhee']}<br>";
// massive - аас элемэнт задлаж авах  extract func
extract($data);
echo 'Дата массиваас задлаад гарж ирсэн хувьсагч дээр байгаа утга : ' . $enkhee;
// explode function
// extract - ийн эсрэг буюу утгуудийг нийлүүлээд массив болгоно.
// Энэ жишээ дээр доогуур зураас орсон хэсэгээр таслаад массивын элемент үүсгэж байна.
$names = 'hell_zail_sainuu_muu2_amidral';
$str = explode('_', $names);
def($str);
// massive - т элемент нэмэх
// Хэрвээ custom index-тэй байвал :
$data['shineIndex'] = 'hamgiin suulyn element - iin utga';
// custom биш 0 - ээс эхэлсэн index-тэй байвал :
$students[] = 'hamgiin suulyn element - iin utga';
