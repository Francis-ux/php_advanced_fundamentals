<?php include('error_handling.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
    <style>
    .white {
        background-color: gray;
        color: black;
    }

    .black {
        background-color: black;
        color: white;
    }

    .box {
        width: 65px;
        height: 65px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    body {
        margin-left: 330px;
        overflow-x: hidden;
    }

    .row {
        display: flex;
    }

    .Selected {
        background-color: red;
    }

    .King {
        background-image: url(king.png);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }

    .Queen {
        background-image: url(queen.png);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }

    .Knight {
        background-image: url(knight.png);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }

    .Rook {
        background-image: url(rook.png);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }

    .Bishop {
        background-image: url(bishop.jpg);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }

    .Pawn {
        background-image: url(pawn.png);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post" class="mt-3">
            <div class="row">
                <div class="col-3">
                    <input class="form-control w-100" type="text" name="letters" id="" placeholder="Letters"
                        value="<?php echo isset($_POST['letters']) ? $_POST['letters'] : '' ?>">
                    <span
                        style="color:red;font-family:'Arial';font-weight:bolder;font-size:13px;"><?php echo $Validating->first_side() ?></span>

                </div>
                <div class="col-3">
                    <input class="form-control w-100" type="text1" name="numbers" id="" placeholder="Numbers"
                        value="<?php echo isset($_POST['numbers']) ? $_POST['numbers']  : '' ?>">
                    <span
                        style="color:red;font-family:'Arial';font-weight:bolder;font-size:13px;"><?php echo $Validating->second_side() ?></span>

                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-3">
                    <input class="form-control w-100" type="text1" name="option" id="" placeholder="Character"
                        value="<?php echo isset($_POST['option']) ? $_POST['option']  : '' ?>">
                    <span
                        style="color:red;font-family:'Arial';font-weight:bolder;font-size:13px;"><?php echo $Validating->third_side() ?></span>

                </div>
                <div class="col-3">
                    <input class="btn btn-outline-primary" type="submit" value="submit">

                </div>
            </div>

        </form>
    </div>
</body>

</html>