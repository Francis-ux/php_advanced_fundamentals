<?php
class Validating
{
    function first_side()
    {
        $name = isset($_POST['letters']) ? $_POST['letters'] : '';
        if ($name == '') {
            return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be empty</span>";
        } else {
            if (strlen($_POST['letters']) > 1) {
                return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be more than one numbers</span>";
            } else {
                $letters = (int) $_POST['letters'];
                if ($letters != 0) {
                    return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be a number</span>";
                } else {
                    if ($_POST['letters'] == 'a' || $_POST['letters'] == 'b' || $_POST['letters'] == 'c' || $_POST['letters'] == 'd' || $_POST['letters'] == 'e' || $_POST['letters'] == 'f' || $_POST['letters'] == 'g' || $_POST['letters'] == 'h' || $_POST['letters'] == 'i' || $_POST['letters'] == 'j' || $_POST['letters'] == 'k' || $_POST['letters'] == 'l' || $_POST['letters'] == 'm' || $_POST['letters'] == 'o' || $_POST['letters'] == 'p' || $_POST['letters'] == 'q' || $_POST['letters'] == 'r' || $_POST['letters'] == 's' || $_POST['letters'] == 't' || $_POST['letters'] == 'u' || $_POST['letters'] == 'v' || $_POST['letters'] == 'w' || $_POST['letters'] == 'x' || $_POST['letters'] == 'y' || $_POST['letters'] == 'z') {
                        return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Upper case only</span>";
                    } else {
                        if ($_POST['letters'] == 'I' || $_POST['letters'] == 'J' || $_POST['letters'] == 'K' || $_POST['letters'] == 'L' || $_POST['letters'] == 'M' || $_POST['letters'] == 'N' || $_POST['letters'] == 'O' || $_POST['letters'] == 'P' || $_POST['letters'] == 'Q' || $_POST['letters'] == 'R' || $_POST['letters'] == 'S' || $_POST['letters'] == 'T' || $_POST['letters'] == 'U' || $_POST['letters'] == 'V' || $_POST['letters'] == 'W' || $_POST['letters'] == 'X' || $_POST['letters'] == 'Y' || $_POST['letters'] == 'Z') {
                            return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>A to H only</span>";
                        }
                    }
                }
            }
        }
    }
    function second_side()
    {
        $numbers = isset($_POST['numbers']) ? $_POST['numbers'] : '';
        if ($numbers == '') {
            return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be empty</span>";
        } else {
            if (strlen($_POST['numbers']) > 1) {
                return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be more than one numbers</span>";
            } else {
                $letters = (int) $_POST['numbers'];
                if ($letters <= 0) {
                    return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be a letter</span>";
                } else {
                    if ($_POST['numbers'] == 9) {
                        return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Field cannot be more than 8 numbers</span>";
                    }
                }
            }
        }
    }
    function third_side()
    {
        if (empty($_POST['option'])) {
            return "<span style='color:red;font-size:13px;font-family:consolas;font-weight:bolder'>Select character<span class='text-success'>(Optional)</span></span>";
        }
    }
}
$Validating = new Validating();