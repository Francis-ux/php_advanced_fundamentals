<?php
if (isset($_POST['delete_file'])) {
    $filename = $_POST['file_name'];
    unlink('../uploads/' . $filename);
    header('location:read.php');
}
