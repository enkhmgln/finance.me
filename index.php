<?php
require 'inc/header.php';
echo "Hello world</br>";
// herodoc
$s = <<<END
wdasdsd

END;
echo $s;

// nowdoc
$h = <<<END
hello world
wasd
wasd
wasd
END;
echo $h;

require "inc/footer.php";
