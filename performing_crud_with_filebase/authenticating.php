<?php


include('upload.php');

// $file_input = $POST['book_image'];
$file_input2 = $_FILES['book_image'];

// $Handle->validating_uploaded_file('book_image', $file_input, 'book_image');
$Handle->validating_uploaded_file('book_image', $file_input2, 'book_image');


if ($Handle->fault()) {
    return header('location:algorithm.php');
} else {
    $_SESSION['file'] = $file_input2;
    

    return header('location:algorithm.php');
}
