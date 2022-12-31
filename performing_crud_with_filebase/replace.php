<?php
$a = 'location.txt';
$b = file_get_contents('location.txt');
// echo "File contents before using "
//     . "preg_replace() function<br>";
// echo $b;
// echo "<br><br>File contents after using "
//     . "preg_replace() function<br> ";
$c = preg_replace('/[a-z0-9A-Z_.-]/', array(), $b);
echo $c;
file_put_contents($a, $c);
