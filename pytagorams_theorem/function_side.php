<?php


function calculate($adj = null, $opp = null, $hyp = null)
{
    $adj = (int) $adj;
    $opp = (int) $opp;
    $hyp = (int) $hyp;
    if (empty($adj) && !empty($opp) && !empty($hyp)) {
        if (is_int($opp) && is_int($hyp)) {
            $hypotenuse_value = pow($hyp, 2);
            $opposite_value = pow($opp, 2);
            $answer = $hypotenuse_value - $opposite_value;
            $square = sqrt($answer);
            $round = round($square);
            return "{$square} when Approximated it gives us {$round}" . $_POST['unit'];
        }
    }
    if (empty($opp) && !empty($adj) && !empty($hyp)) {
        if (is_int($adj) && is_int($hyp)) {
            $hypotenuse_value = pow($hyp, 2);
            $adjacent_value = pow($adj, 2);
            $answer = sqrt($hypotenuse_value - $adjacent_value);
            $round = round($answer);
            return "{$answer} when Approximated it gives us {$round}" . $_POST['unit'];
        }
    }
    if (empty($hyp) && !empty($opp) && !empty($adj)) {
        if (is_int($adj) && is_int($opp)) {
            $adjacent_value = pow($adj, 2);
            $opposite_value = pow($opp, 2);
            $answer = sqrt($adjacent_value + $opposite_value);
            $round = round($answer);
            return "{$answer} when Approximated it gives us {$round}" . $_POST['unit'];
        }
    } elseif (empty($adj) && empty($opp) && empty($hyp)) {
        echo "Input your value:Take Note:\n\nonly numbers are allowed";
    } elseif (!is_int($opp) && !is_int($hyp) && !is_int($adj)) {
        echo "numbers only";
    } else {
        echo "two value only";
    }
}
echo calculate($_POST['adj'], $_POST['opp'], $_POST['hyp']);
$answer = calculate($_POST['adj'], $_POST['opp'], $_POST['hyp']);
$final_answer = round($answer);
