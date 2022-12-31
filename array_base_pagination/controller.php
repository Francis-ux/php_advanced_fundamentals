<!-- Validate -->
<!-- Check if user is even logged in -->
<!-- Check if the user made the right request -->
<!-- Check if its a post method -->

<?php include "config.php"; ?>
<?php include "data.php"; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo $_POST['answer']; // Gets the selected answer
    // echo $_POST['current_question'];
    if (count($questions) > $_POST['current_question']) {
        $_SESSION['question_no'] = $_POST['current_question'] + 1;
        header("location:radioInput.php");
    } else {
        echo "Submitted";
    }
    // Store the answer
    // Give us another question if any
} else {
    echo "Access Denied";
}
