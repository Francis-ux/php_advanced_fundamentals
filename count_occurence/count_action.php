<?php

$name = $_POST['word'];
$split = str_split($name);
$num = count($split);

function count_letters($name, $num)
{
    $count = [];
    for ($i = 0; $i < $num; $i++) {
        $letter = $name[$i];
        //   array_push($count, $letter);
        if (array_key_exists($letter, $count)) {
            $count[$letter]++;
        } else {
            $count[$letter] = 1;
        }
    }
    return $count;
}
if (count_letters($name, $num)) {
    $letter_count1 = count_letters($name, $num);
    foreach ($letter_count1 as $letter => $count) {
        echo $letter . ":" . $count . "\n";
    }
} else {
    exit("error");
}
