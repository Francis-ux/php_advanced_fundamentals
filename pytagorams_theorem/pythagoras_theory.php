<?php require("function_side.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>My triangle</title>
    <?php require("style_side.php") ?>
</head>

<body>
    <div class="triangle"></div>
    <div class="all" id="first-side" id="all">
        <input id="<?php if ($_POST['opp'] == null) {
                        echo "first_one";
                    } ?>" type="text" name="opp" value="<?php require("opp_value.php") ?>" class="text-area" id="all" readonly>
    </div>
    <div class="all" id="second-side">
        <input id="<?php if ($_POST['hyp'] == null) {
                        echo "first_one";
                    } ?>" type="text" name="hyp" value="<?php require("hyp_value.php") ?>" class="text-area" readonly>
    </div>
    <div class="all" id="third-side">
        <input id="<?php if ($_POST['adj'] == null) {
                        echo "first_one";
                    } ?>" id="move" type="text" name="adj" value="<?php require("adj_value.php") ?>" class="text-area" readonly>
    </div>

</body>

</html>