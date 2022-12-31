<?php include('data.php') ?>
<?php include('config.php') ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (count($question) > $_POST['main_question']) {
        $_SESSION['question_number'] = $_POST['main_question'] + 1;
        header('location:inputfile.php');
    } else {
        echo "submitted";
    }

    // echo $_POST['option'];
} else {
    echo "error";
}