<?php
$a = 1234; // número decimal
$b = 0123; // número octal (equivalente a 83 em decimal)
$c = 0o123; // número octal (a partir do PHP 8.1.0)
$d = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
$e = 0b11111111; // número binário (equivalente a 255 em decimal)
$f = 1_234_567; // número decimal (a partir do PHP 7.4.0)

echo $a . "\n";
echo $b . "\n"; 
echo $c . "\n";
echo $d . "\n";
echo $e . "\n";
echo $f . "\n";


?>