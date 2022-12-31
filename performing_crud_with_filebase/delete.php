<?php
session_start();
// $a = 'location.txt';
// $b = file_get_contents('location.txt');
// $c = preg_replace('/[a-z0-9A-Z_.-]/', array(), $b);
// file_put_contents($a, $c);
// $_SESSION['success'] = "image deleted successfully";
// header('location:algorithm.php');

$location = fopen("location.txt", "r"); //open the file we are reading from
$option = []; // empty array
if ($location) {
    while (($line = fgets($location)) != false) { //writing condition to check if the file is opened
        // array_push($option, $line); assigning the line to the option  with array push
    }
}
foreach ($option as $key => $value) {
    if (isset($_POST['submit'])) {

        if (trim($value) == trim("Capture.PNG")) {
            $a = $value;
            $b = file_get_contents($value);
            $c = preg_replace('/[a-z0-9A-Z_.-]/', array(), $b);
            file_put_contents($a, $c);
            $_SESSION['success'] = "image deleted successfully";
            echo "yex";
            header('location:algorithm.php');
        } else {
            echo "no";
        }
    }
}
// exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

</head>

<body>
    <form action="delete.php" method="post">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-image mr-1"></i>
                Image List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                </div>

                <?php
                $location = "location.txt";
                $fopen = fopen($location, 'r');
                $option = [];
                if ($fopen) {
                    while (($line = fgets($fopen)) != false) {
                        array_push($option, $line);
                    }
                }
                ?>
                <ul>
                    <?php foreach ($option as $key => $value) : ?>
                        <tr>
                            <td><img name="image" width="10%" src="<?php echo "uploads/" . $value; ?>" alt="">
                            </td>
                            <td><button class="btn btn-danger" name="submit" type="submit">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </ul>

                </table>
            </div>
        </div>

    </form>
</body>

</html>