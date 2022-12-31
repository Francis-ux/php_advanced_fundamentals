<?php $error = "Note:Answer appears in green color";
$unit = "cm";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Solving</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./font awesome/css/all.min.css">

</head>

<body class="bg-dark">

    <div class="container mt-3 ">
        <form action="pythagoras_theory.php" method="post">
            <p style="color:red;"><?php echo $error ?></p>
            <p class="text-capitalize font-weight-bold text-light">Solving for Pythagoras theorem</p>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-1 text-light">
                    <label for="opp">Opposite:</label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <input type="number" name="opp" id="opp" placeholder="Enter Value">

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-1 text-light">
                    <label for="hyp">hypotenuse:</label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <input type="number" name="hyp" id="hyp" placeholder="Enter Value">
                    <!-- <input type="text" name="unit1" id="" placeholder="Enter unit"> -->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-1 text-light">
                    <label for="adj">Adjacent:</label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <input type="number" name="adj" id="adj" placeholder="Enter Value">
                    <!-- <input type="text" name="unit2" id="" placeholder="Enter unit"> -->

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-1 text-light">
                    <label for=""> Unit</label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <input type="text" name="unit" id="" value="<?php echo $unit ?>" placeholder="Enter unit">

                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>

</html>