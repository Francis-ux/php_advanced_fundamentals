<?php

$num = [
    'even' => [],
    'odd'  => []
];

for ($i = 0; $i < 8; $i++) {
    if ($i % 2 == 0 && $i != 0) {
        array_push($num['even'], $i);
    } elseif ($i != 0) {
        array_push($num['odd'], $i);
    }
}
function loop_array($num, $ind)
{
    $even = "";
    $odd = "";
    if (isset($num['even'][$ind])) {
        $even = $num['even'][$ind];
    } else {
        $even = "?";
    }
    if (isset($num['odd'][$ind])) {
        $odd = $num['odd'][$ind];
    } else {
        $odd = "?";
    }

    $tr = "<tr> <td>" . $even . "</td> <td>" . $odd . "</td> </tr>";
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
    <table border="1" style="width:100px;" class="m-5">
        <?php for ($i = 0; $i < count($num['even']); $i++) {
            echo loop_array($num, $i);
        } ?>
    </table>
</body>

</html>