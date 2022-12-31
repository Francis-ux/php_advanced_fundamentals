<?php


function set_number($total)
{
    $num = [
        'even' => [],
        'odd'  => [],
        'numbers_divisible_by_3' => [],
        'numbers_divisible_by_5' => [],
        'numbers_divisible_by_7' => [],
    ];

    for ($i = 0; $i < $total; $i++) {
        if ($i % 2 == 0 && $i != 0) {
            array_push($num['even'], $i);
        } elseif ($i != 0) {
            array_push($num['odd'], $i);
        }
    }
    for ($i = 0; $i < $total; $i++) {
        if ($i % 3 == 0 && $i != 0) {
            array_push($num['numbers_divisible_by_3'], $i);
        }
    }
    for ($i = 0; $i < $total; $i++) {
        if ($i % 5 == 0 && $i != 0) {
            array_push($num['numbers_divisible_by_5'], $i);
        }
    }
    for ($i = 0; $i < $total; $i++) {
        if ($i % 7 == 0 && $i != 0) {
            array_push($num['numbers_divisible_by_7'], $i);
        }
    }
    return $num;
}
$num = set_number($_POST['number']);
function loop_array($num, $ind)
{
    $even = "";
    $odd = "";
    if (isset($num['even'][$ind])) {
        $even = $num['even'][$ind];
    } else {
        $even = "<p class='text-danger font-weight-bold'> ? </p>";
    }
    if (isset($num['odd'][$ind])) {
        $odd = $num['odd'][$ind];
    } else {
        $odd = "<p class='text-danger font-weight-bold'> ? </p>";
    }
    if (isset($num['numbers_divisible_by_3'][$ind])) {
        $three = $num['numbers_divisible_by_3'][$ind];
    } else {
        $three = "<p class='text-danger font-weight-bold'> ? </p>";
    }
    if (isset($num['numbers_divisible_by_5'][$ind])) {
        $five = $num['numbers_divisible_by_5'][$ind];
    } else {
        $five = "<p class='text-danger font-weight-bold'> ? </p>";
    }
    if (isset($num['numbers_divisible_by_7'][$ind])) {
        $seven = $num['numbers_divisible_by_7'][$ind];
    } else {
        $seven = "<p class='text-danger font-weight-bold'> ? </p>";
    }



    $tr = "<tr> <td>" . $even . "</td> <td>" . $odd . "</td> <td>" . $three . "</td> <td>" . $five . "</td> <td>" . $seven . "</td> </tr>";
    return $tr;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <table border="1" class="table text-center">
        <tr>
            <th>Even</th>
            <th>odd</th>
            <th>Divisible by 3</th>
            <th>Divisible by 5</th>
            <th>Divisible by 7</th>

        </tr>
        <?php for ($i = 0; $i < count($num['odd']); $i++) {
            echo loop_array($num, $i);
        } ?>
    </table>
    <form action="" method="post">
        <input type="text" name="number" id="">
        <input type="submit" value="submit">
    </form>
</body>

</html>