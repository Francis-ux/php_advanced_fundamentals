<?php
$index = 0;
$options = ['King', 'Queen', 'Success', 'House'];

$question = ['What is chemistry', 'type of chemistry', 'centre for chemistry reading', 'WHo is mr ufah'];

$question_number = isset($_SESSION['question_number']) ? $_SESSION['question_number'] - 1 : 0;

$questions = $question[$question_number];