<?php

function count_occurrence($word)
{

    $word_to_array =  str_split($word);
    $no_of_letters = count($word_to_array);
    $result = [];
    for ($i = 0; $i < $no_of_letters; $i++) {
        $letter = $word[$i];
        if (array_key_exists($word, $result)) {
            $result[$letter]++;
        } else {
            $result[$letter] = 1;
        }
    }
    return $result;
}
$word =  $_REQUEST['word'];
if (count_occurrence($word)) {
    foreach (count_occurrence($word) as $key => $value) {
        echo $key . ":" . $value . "\n";
    }
}
