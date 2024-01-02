<?php
// require хийсэн файл руу хувьсагч дамжуулах боломжтой юу ?
// Хариулт мэдээж боломжтой  php compile хийх үед бүх хувьсагчийг үүсгээд require хийсэн файл дотор байгаа кодыг хуулж авчирдаг тул require хийхийн өмнө хувьсагчаа зарлаад require хийж оруулж ирсэн файл дотроо хувьсагчаа ашиглах боломжтой юм.
require 'inc/header.php';
// echo"Hello world</br>";
// herodoc
$s = <<<END
wdasdsd

END;
// echo$s;

// nowdoc
$h = <<<END
hello world
wasd
wasd
wasd
END;
// // echo$h;

require "inc/footer.php";
