<?php
try {
    if (file_exists('location.txt')) {
    } else {
        throw new Exception("Error Processing Request Could not locate file");
    }
} catch (\Exception $error) {
    echo $error->getMessage();
    exit;
}
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
    <div class="card mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="../delete.php">List View</a></li>
                    <li class="breadcrumb-item " aria-current="page"><a class="text-dark" href="slide/slide.php">Grid View</a></li>
                </ol>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            </div>
            <?php
            try {
                if (file_exists('location.txt')) {
                } else {
                    throw new Exception("Error Processing Request Could not locate file");
                }
            } catch (\Exception $error) {
                echo $error->getMessage();
                exit;
            }
            ?>

            <?php
            $location = "location.txt";
            $fopen = fopen($location, 'r');
            $option = [];
            try {
                if ($fopen) {
                    while (($line = fgets($fopen)) != false) {
                        array_push($option, $line);
                    }
                } else {
                    throw new Exception("Error Processing Request Could not open file");
                }
            } catch (\Exception $error) {
                echo $error->getMessage();
                exit;
            }

            ?>

            <ul>
                <?php if (count($option) == 0) {
                    header('location:algorithm.php');
                } else {
                    # code...
                }
                ?>
                <?php foreach ($option as $key => $value) : ?>
                    <tr>
                        <td><img name="image" width="10%" src="<?php echo "uploads/" . $value; ?>" alt="">
                        </td>
                        <td>
                            <?php if (count($option) == 1) : ?>

                                <form action="delete_all.php" method="post">
                                    <button class="btn btn-danger" name="delete" type="submit">Delete</button>
                                </form>

                            <?php else : ?>
                                <a href="delete_processing.php?num=<?php echo $key ?>"> <button class="btn btn-danger" name="submit" type="submit">Delete</button></a>
                            <?php endif ?>
                        </td>
                    </tr>

                <?php endforeach ?>

                <?php if (count($option) != 1) : ?>
                    <tr>
                        <td colspan="2">
                            <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Delete All</button>
                        </td>
                    </tr>
                <?php endif ?>
                </table>
        </div>
    </div>

    <!-- Button trigger modal -->

    <form action="delete_all.php" method="post">


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete All</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-capitalize text-center">
                        Are you sure you want to delete all?This action cannot be reverse
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button name="delete" type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>