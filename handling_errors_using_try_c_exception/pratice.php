<?php
function practice($dob)
{


    if ($dob != 0) {
        return date("Y") - $dob;
    } elseif (empty($dob)) {
        throw new UnexpectedValueException("Error Processing Request:value cannot be empty");
    } else {
        throw new LogicException("Value must be a number");
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        echo practice($_POST['number']);
    } catch (\LogicException $msg) {
        echo "Error occured while processing your request:this is the reason \n";
        echo $msg->getMessage();
    } catch (\UnexpectedValueException $msg) {
        echo "Error occured while processing your request:this is the reason \n";
        echo $msg->getMessage();
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
        <input type="text" name="number" id="">
        <input type="submit" value="submit">

    </form>
</body>

</html>