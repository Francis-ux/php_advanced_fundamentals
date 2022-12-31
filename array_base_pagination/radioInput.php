<?php include "config.php"; ?>
<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="controller.php" method="post">
        <input type="text" name="current_question" value="<?php echo isset($_SESSION['question_no']) ? $_SESSION['question_no'] : 1 ?>">
        <h3><?php echo $question; ?></h3>
        <ol type="A">
            <?php foreach ($options as $key => $value) : ?>
                <li>
                    <input type="radio" value="<?php echo $value; ?>" required name="answer" id="option<?php echo $key; ?>">
                    <label for="option<?php echo $key; ?>"><?php echo $value; ?></label>
                </li>
            <?php endforeach; ?>
        </ol>
        <a href="#"><button>Previous</button></a>
        <button type="submit">Next</button>
    </form>
</body>

</html>