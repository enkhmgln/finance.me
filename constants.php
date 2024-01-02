<?php
// const буюу дахин өөрчлөгдөхгүй хувьсагчийг зарлахдаа дараах түлхүүр үгийг ашиглана. define функц дотор 2 argument өгдөг ба
// эхний argument дээр const нэр 2 дах argument дээр value
define('NUM', 12);
// // echoNUM;
const NUM2 = 1234;
// // echoNUM2;
// Predefined constants буюу урьдчилан зарласан php аль хэдийн байдаг constants юм.
// echo'<br>Миний ашиглаж буй php хувилбар : ' . PHP_VERSION;
// echo'<br>Миний php хэлний байршиж буй хавтасны зам  : ' . PHP_LIBDIR;
// Magic constant - ууд эхлэхдээ доогуур 2 зураасаар эхэлдэг байна.

// ОДоо байгаа directory буюу folder - ийн замыг харуулдаг MAGIC CONSTANT.
// echo'<br>' . __DIR__;
// ямар file дээр ажиллаж байгаа замыг харуулдаг MAGIC CONSTANT
// echo__FILE__;
// Тухайн file - дотор LINE constant - ийг бичихэд аль мөр дээр байгааг зааж өгнө.
// Жишээ :
// echo'<BR>Энэ файлын кодын мөрийн тоо : ' . __LINE__;
