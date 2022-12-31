<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="wrapper">

        <div id="file_div">
            <?php
            $folder = "../uploads/";
            if ($dir = opendir($folder)) : ?>
                <?php while (($file = readdir($dir)) !== false) : ?>
                    <form method="post" action="delete_file.php">
                        <p> <?php echo $file ?></p>
                        <input type="hidden" name="file_name" value="<?php echo $file ?>">
                        <input type='submit' name="delete_file" value="Delete File">
                    </form>
                <?php endwhile ?>
                <?php closedir($dir) ?>
            <?php endif ?>
        </div>





    </div>
</body>

</html>