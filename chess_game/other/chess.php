<?php
$row = 8;
$col = 8;
$current_row = 0;
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
$user_letter = isset($_POST['text']) ? $_POST['text'] : '';
$user_number = isset($_POST['text1']) ? $_POST['text1'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .white {
        background-color: white;
        color: black;
    }

    .black {
        background-color: black;
        color: white;
    }

    .box {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    body {
        background-color: peru;
        display: flex;
        justify-content: space-around;
        align-content: center;
    }

    .row {
        display: flex;
    }

    .selected {
        background-image: url(chess.jpg);
        background-position: center;
        background-size: cover;
        color: rgba(0, 0, 0, 0);
    }

    .container {

        width: 50%;
        height: fit-content;
        background: gray;
        padding: 30px;
    }

    .chess {

        border: 10px solid gray;
        margin: 0 auto;
    }

    #error {
        color: red;
    }
    </style>
    <!-- <link rel="stylesheet" href="chess.css"> -->
</head>

<body>

    <div class="container">
        <form action="" method="post">
            <input type="text" name="text" id="" value="<?php echo isset($_POST['text']) ? $_POST['text'] : '' ?>">
            <input type="text" name="text1" id="" value="<?php echo isset($_POST['text1']) ? $_POST['text1'] : '' ?>">
            <input type="submit" value="submit" name="submit">
            <?php
            $user_letter = trim(isset($_POST['text']) ? $_POST['text'] : '');
            $user_number = trim(isset($_POST['text1']) ? $_POST['text1'] : '');
            ?>
        </form>

        <div class="chess">
            <?php


            ?>
            <?php for ($i = 1; $i <= $row; $i++) : ?>
            <?php $current_row++ ?>
            <?php if ($i % 2 == 0) : ?>
            <div class="row">
                <?php foreach ($letters as $key => $letter) : ?>
                <?php $class = $key % 2 ? 'white' : 'black' ?>
                <?php
                            if ($user_letter == $letter && $user_number == $current_row) {
                                $selected = 'selected';
                            } else {
                                $selected = false;
                            }
                            ?>

                <div class="box <?php echo $class . ' ' . $selected ?>"><?php echo $letter ?><?php echo $current_row ?>
                </div>
                <?php endforeach ?>
            </div>
            <?php else : ?>
            <div class="row">
                <?php foreach ($letters as $key => $letter) : ?>
                <?php $class = $key % 2 ? 'black' : 'white' ?>
                <?php
                            if ($user_letter == $letter && $user_number == $current_row) {
                                $selected = 'selected';
                            } else {
                                $selected = false;
                            }
                            ?>
                <div class="box <?php echo $class . ' ' . $selected ?>"><?php echo $letter ?><?php echo $current_row ?>
                </div>
                <?php endforeach ?>
            </div>
            <?php endif ?>
            <?php endfor ?>
        </div>
    </div>
</body>

</html>