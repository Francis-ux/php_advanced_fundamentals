<?php


$topic;

if (isset($_GET['topic'])) {
    $topic = $_GET['topic'];
} else {
    $topic = "page not found";
}

switch ($topic) {
    case 'biology':
        echo "biology is the study of plant and animal";
        break;
    case 'chemistry':
        echo "chemistry is the study of chemicals";
        break;
    case 'physics':
        echo "physics is the study of magnitude and force";
        break;
    default:
        echo "subject not selected ";
        break;
}