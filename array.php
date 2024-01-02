<?php
require 'inc/header.php';
$students = ['bold', 'naraa', 'saraa'];
// def($students);
$name = 'John';
// Array эсэхийг шалгах
// echovar_dump(is_array($name));
$data = ['naraa' => 21, 'saraa' => 36, 'enkhee' => 20];
// echo'Энх-амгалангийн нас : ' . $data['enkhee'];
// Array - ийг хязгаарлах range func,
// 1 - ээс 100 хүртэл element-тай massive үүсгэж байна.
$numbers = range(1, 100);
// def($numbers);
// array - ийг элемэнтийг тоолох , count , sizeof
// echo'<br>' . 'Нийт тоонууд : ' . count($numbers);
// // echosizeof($numbers);
// massive - ийн элемэнтийг string дотор хэвлэх
// echo"<br>Таны нас   : {$data['enkhee']}<br>";
// massive - аас элемэнт задлаж авах  extract func
extract($data);
// echo'Дата массиваас задлаад гарж ирсэн хувьсагч дээр байгаа утга : ' . $enkhee;
// explode function
// extract - ийн эсрэг буюу утгуудийг нийлүүлээд массив болгоно.
// Энэ жишээ дээр доогуур зураас орсон хэсэгээр таслаад массивын элемент үүсгэж байна.
$names = 'hell_zail_sainuu_muu2_amidral';
$str = explode('_', $names);
// def($str);
// massive - т элемент нэмэх
// Хэрвээ custom index-тэй байвал :
$data['shineIndex'] = 'hamgiin suulyn element - iin utga';
// custom биш 0 - ээс эхэлсэн index-тэй байвал :
$students[] = 'hamgiin suulyn element - iin utga';
// massive - аас элемент устгах
// def($students) . '<br>';
// array_pop($students);
// array_pop($students);
// def($students);
// массиваас element хасах , index-тэйн хамт устгана.
/*
Жишээ нь : $students = ['bold', 'naraa', 'saraa'];
байгаад unset($students['naraa']); гээд massive - аа хэвлээд үзэх үед  (0)=>'bold', (1)=> 'saraa' гарна */
def($str); # index : 0,1,2,3,4
unset($str[1]);
def($str); # unset ashiglasanii daraa index : 0,1,3,4

// massive - ИЙГ ДАХИН ИНДЕХЛЭХ function
$str = array_values($str); # $arr - ийг дахин index - лээд буцаана; .map function бүтэцээрээ адилхан.
def($str); #array_values function - ыг ашигласаны дараа index  : 0,1,2,3
// Массиваас эрэмблэх sort , rsort , ksort
sort($str); # sort function  дараалалаар эрэмблэнэ
rsort($str); # rsort function  дараалалаас эсрэгээр эрэмблэнэ
ksort($str); #ksort function key буюу утгыг агуулж буй index - ээр эрэмблэнэ.
krsort($str); #krsort function нь  key буюу утгыг агуулж буй index - ийн эсрэгээр эрэмблэнэ.
def($str);

// Санамсаргүй байдлаар холих функц
shuffle($str); #Math.random() function-тай төстэй
// array дотроос index эсвэл value буюу утгуудыг авах функц :
// index - ийг авах : array_keys(array) утгуудыг авах : array_values(array);
// Жишээ :
// var_dump(array_keys($str));
// def(array_values($str));

// array_merge
// $a = range(1, 10);
// $b = range(4, 10);
// $c = array_merge($a, $b);
// sort($c);
// def($c);

// array splice buyu tasalj awah
// element iig tasalj awna undsen massive aas ustgana
// def($students);
// $newStudents = array_splice($students, 0, 1);
// def($newStudents);
// def($students);

// massive - aas haih , array_search() , in_array();
#array_search function deer 2 argument ugdug ba ehnii argument der haih gej bga utgaa bicheed 2dah argument deer array - aa ugnu.. herweee olwol index iin butsaana olohgu bol null butsaana
# in_array function adilhan uildel hiih  ba gol ylgaa ni in_array true , false butsaadag bol array_search indexiig butsaaana
