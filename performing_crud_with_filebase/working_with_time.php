<?php 

$username = $_POST['username'];
$main_time = $_POST['time'];

$manual = date('g a', strtotime($main_time));
if ($manual == '12 am') {
    print "Good Morning {$username}";
}
if ($manual == '12 pm') {
    print "Good Afternoon {$username}";
}
if ($manual == '8 pm') {
    print "Good night {$username}";
}

