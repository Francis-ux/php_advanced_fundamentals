<?php

$questions = [
    'Who is Jesus\'s Mother?',
    'Who denied Jesus?',
    'Who is among the student in your school?',
];
$options = ['James', 'Peter', 'Gift', 'Mary'];

$question_no = isset($_SESSION['question_no']) ? $_SESSION['question_no'] - 1 : 0;

$question = $questions[$question_no];
?>