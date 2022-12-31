<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body class="">
  <?php
  try {
    if (file_exists('../location.txt')) {
    } else {
      throw new Exception("Error Processing Request Could not locate file");
    }
  } catch (\Exception $error) {
    echo $error->getMessage();
    exit;
  }
  ?>
  <?php
  $location = "../location.txt";
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
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-dark" href="../delete.php">List View</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="slide.php">Grid View</a></li>
      </ol>
    </nav>
  </div>
  <div class="container" style="display:flex;justify-content:center">
    <div class="card" style="width: 60rem">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol> -->
          <div class="carousel-inner">
            <div class="carousel-item active" style="width:100%;height:550px;">
              <img src=" <?php echo  "../uploads/" . $option[0] ?> " class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <?php if (count($option) == 1) : ?>

                  <form action="../delete_all.php" method="post">
                    <button class="btn btn-danger" name="delete" type="submit">Delete</button>
                  </form>

                <?php else : ?>
                  <a href="../delete_processing.php?num=<?php echo $option[0] ?>"> <button class="btn btn-danger" name="submit" type="submit">Delete</button></a>
                <?php endif ?>
              </div>
            </div>
            <?php foreach ($option as $key => $value) : ?>
              <div class="carousel-item" style="width:100%;height:550px;">
                <img src="<?php echo "../uploads/" . $value; ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <?php if (count($option) == 1) : ?>

                    <form action="../delete_all.php" method="post">
                      <button class="btn btn-danger" name="delete" type="submit">Delete</button>
                    </form>

                  <?php else : ?>
                    <a href="../delete_processing.php?num=<?php echo $key ?>"> <button class="btn btn-danger" name="submit" type="submit">Delete</button></a>
                  <?php endif ?>
                </div>
              </div>

            <?php endforeach ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="text-danger"><button style="background-color:red;color:white" class="btn">Previous</button></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class=""><button style="background-color:green;color:white" class="btn">Next</button></span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
      <!-- <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div> -->
    </div>

  </div>

  <center>
    <div class="h1 text-success text-capitalize">
      <?php echo isset($_SESSION['success']) ? $_SESSION['success'] : '';
      unset($_SESSION['success']);

      ?>
    </div>

  </center>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
</body>

</html>