<?php
$string = 'A B C ';
$a = str_split($string);
function count_occurrence(array $array): array
{
    $occurrence = [];
    foreach ($array as $key => $value) {
        if (isset($occurrence[$value])) {
            $occurrence[$value]++;
        } else {
            $occurrence[$value] = 1;
        }
    }
    return $occurrence;
}
$names = [1, 2, 3, 3, 3, 2, 2];
print_r(count_occurrence($a));
