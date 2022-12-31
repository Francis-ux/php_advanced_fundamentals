<?php
session_start();
if (isset($_POST['delete'])) {
    $a = '../location.txt';
    $b = file_get_contents('../location.txt');
    $c = preg_replace('/[a-z0-9A-Z_.-]/', array(), $b);
    file_put_contents($a, $c);
    $folder = "../uploads/";
    $option_file = [];
    if ($dir = opendir($folder)) {
        while (($file = readdir($dir)) !== false) {
            array_push($option_file, $file);
        }
        closedir($dir);
    }
    foreach ($option_file as $key_file => $value_file) {
        unlink('../uploads/' . $value_file);
    }
    header('location:../algorithm.php');
    $_SESSION['success'] = "image deleted successfully";
} else {
}
