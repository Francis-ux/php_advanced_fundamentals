<?php
session_start()
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
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div style="width:100%;background:#ACD8E5">
                    <div class="p-3">
                        <div>
                            <span>
                                <b>
                                    Choose image file:

                                </b> </span>
                        </div>
                        <div class="p-2" style="background-color:#E9E9ED;">
                            <form enctype="multipart/form-data" action="upload.php" method="post">
                                <input style="max-width:100%;" class="form-control-file" type="file" name="book_image" id="">


                        </div>

                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="p-3">
                            <input class="btn btn-success w-100" type="submit" value="Upload">

                        </div>
                        </form>
                        <?php
                        $location = "location.txt";
                        $fopen = fopen($location, 'r');
                        $option5 = [];
                        if ($fopen) {
                            while (($line = fgets($fopen)) != false) {
                                array_push($option5, $line);
                            }
                        }
                        if (!count($option5) == 0) : ?>
                            <div class="p-3">
                                <a href="delete.php">
                                    <button type="button" class="btn btn-primary">
                                        View
                                    </button>
                                </a>

                            </div>
                        <?php endif ?>
                    </div>

                </div>

                <div style="font-size:13px;color:red;">
                    <?php
                    echo isset($_SESSION['error']) ? $_SESSION['error'] : '';
                    ?>
                </div>
                <div style="font-size:13px;color:green">
                    <?php
                    echo isset($_SESSION['success']) ? $_SESSION['success'] : '';
                    ?>
                </div>
                <div style="font-size:13px;color:green">
                    <?php
                    echo isset($_SESSION['success1']) ? $_SESSION['success1'] : '';
                    ?>
                </div>

            </div>
            <!-- <div class="col-6">
                <div>
                    <?php
                    $location_sj = fopen("location.txt", "r");
                    ?>
                    <?php if ($location_sj) : ?>
                        <?php $option_sj = [] ?>
                        <?php while (($line_sj = fgets($location_sj)) != false) : ?>
                            <?php array_push($option_sj, $line_sj) ?>
                        <?php endwhile ?>
                        <?php fclose($location_sj) ?>
                    <?php else : ?>
                        <?php exit("Error opening file") ?>
                    <?php endif ?>
                    <div id="subject-selected" style="background-color: black;color:white;height:200px;overflow:scroll">
                        <?php foreach ($option_sj as $key => $value) : ?>
                            <img width="25%" src="<?php echo "uploads/" . $value ?>" alt="">
                        <?php endforeach ?>
                    </div>
                </div>

            </div> -->
        </div>

    </div>
    </div>


</body>

</html>

<?php
unset($_SESSION['error'])
?>
<?php
unset($_SESSION['success_message']);
unset($_SESSION['success']);


?>