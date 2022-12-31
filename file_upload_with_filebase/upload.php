<?php
session_start();
class Handle_uploaded_file
{
    public function file_type()
    {
        $filetype = $_FILES['book_image']['type'];
        return $filetype;
    }
    public function write_to_file()
    {
        $_SESSION['all'] = $_FILES['book_image']['name'];
        $file_name = "location.txt";
        $fopen = fopen($file_name, 'a');
        $fwrite = fwrite($fopen, $_SESSION['all'] . "\n");
        fclose($fopen);
    }
    public function validating_uploaded_file()
    {
        if (!file_exists($_FILES["book_image"]["tmp_name"])) {
            $_SESSION['error'] = "Field Cannot be empty";
            header('location:algorithm.php');
        } else {
            if ($_FILES['book_image']['size'] > 2000000) {
                $_SESSION['error'] = "File too large";
                header('location:algorithm.php');
            } else {
                $check = getimagesize($_FILES["book_image"]["tmp_name"]);
                if ($check !== false) {
                    if ($this->file_type() == "image/png" || $this->file_type() == "image/jpeg") {
                        if (file_exists("uploads/" . $_FILES['book_image']['name'])) {
                            $_SESSION['error'] = "File already Exists";
                            header('location:algorithm.php');
                        } else {
                            move_uploaded_file($_FILES["book_image"]["tmp_name"], "uploads/" . $_FILES['book_image']['name']);
                            $this->write_to_file();
                            $_SESSION['success'] = "Upload successfully";
                            header('location:algorithm.php');
                        }
                    } else {
                        $all = $_FILES["book_image"]["name"];
                        $all2 = (pathinfo($all, PATHINFO_EXTENSION));
                        $_SESSION['error'] = $all2 . " Not allowed Only JPEG and PNG are allowed ";
                        header('location:algorithm.php');
                    }
                } else {
                    $_SESSION['error'] = "File is not an Image";
                    header('location:algorithm.php');
                }
            }
        }
    }
}
$Handle = new Handle_uploaded_file;
$Handle->file_type();
$Handle->validating_uploaded_file();
