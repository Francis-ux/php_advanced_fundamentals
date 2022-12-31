<?php
function battery_level($battery_level)
{
    return "style='width: {$battery_level}%'";
}
function set_class($battery_level)
{
    if ($battery_level > 50) {
        return "class='green' " . battery_level($battery_level);
    } else {
        return "class='red' " . battery_level($battery_level);
    }
}
function error($error)
{
    $html = "<div id='circle'>{$error}</div>";
    return $html;
}

function display_triangle($battery_level)
{
    $battery_level2 = (int) $battery_level;
    if (is_int($battery_level2) && !empty($battery_level2)) {
        $html = "<div id='battery_container'>";
        $html .= "<div id='battery'" . set_class($battery_level) . "> </div>";
        // $html .= "</div>";
        $html .= "</div>";
        return $html;
    } else {

        return error("Invalid text please try again later");
    }
}

// function validating($battery_level)
// {
//     if ($battery_level < 100 || $battery_level == 100) {
//         $html = "<div id='battery_container'>";
//         $html .= "<div id='battery'" . set_class($battery_level) . "> </div>";
//         // $html .= "</div>";
//         $html .= "</div>";
//         return $html;
//     } else {
//         return error("Invalid text please try again later");
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>battery life</title>
    <style>
    #battery_container {
        width: 500px;
        height: 100px;
        border: 1px solid gray;

    }

    #battery {
        max-width: 100%;
        height: 100px;
    }

    .green {
        background-color: green;
    }

    .red {
        background-color: red;
    }

    .yellow {
        background-color: yellow;
    }

    .white {
        background-color: white;
    }

    .yellow {
        background-color: yellow;
    }

    #circle {
        width: 300px;
        height: 300px;
        /* border-radius: 100%; */
        background-color: red;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $good = $_POST['good'];
        $battery_level = $_POST['good'];
        echo display_triangle($battery_level);
    } else {
        echo error("please try again");
    }

    ?>
    <form action="" method="post">
        <input type="text" name="good" id="">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
$ash = 50;
if ($ash == 10) {
    echo "yes";
} else {
    echo "no";
}
?>