<?php include('config.php') ?>
<?php include("data.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>

<body>
    <form action="validate.php" method="post">
        <input type="text" name="main_question"
            value="<?php echo isset($_SESSION['question_number']) ? $_SESSION['question_number'] : 1 ?>">
        <h3><?php echo $questions  ?></h3>
        <ul type="A">
            <?php while ($index < count($options)) : ?>
            <li>
                <input type="radio" name="option" id="option<?php echo $index ?>">
                <label for="option<?php echo $index ?>"><?php echo $options[$index];
                                                            $index++;
                                                            ?></label>
            </li>
            <?php endwhile ?>
        </ul>
        <button type="submit">Previous</button>
        <button type="submit">Next</button>
    </form>
</body>

</html>