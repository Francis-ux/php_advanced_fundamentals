<?php

// $date = date('F D,Y');
// print ($date) . "\n";

// function greet_user($my_name)
// {
//     $present_time  = date('a');

//     if ($present_time == 'am') {
//         echo "Good morning, $my_name";
//     } else {
//         echo "Good afternoon, $my_name";
//     }
// }

// greet_user("francis");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function all($user)
    {
        //defining the variable of date
        $date = date("G");

        //starting condition base on our time
        if ($date >= 0 && $date <= 11)
            echo "Good morning $user";
        elseif ($date >= 12 && $date <= 17)
            echo "Good afternoon $user";

        elseif ($date >= 18 && $date <= 23)
            echo "Good night $user";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>hello welcome</h1>
        <input type="text" name="text" id="">
        <input type="submit" value="submit"><br>
        <?php all($_POST['text']) ?>

    </form>
</body>

</html>