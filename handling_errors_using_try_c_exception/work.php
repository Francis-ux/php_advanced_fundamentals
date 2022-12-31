<?php function yob($yob)
{
    $yob1 = (int) $yob;
    // echo strlen($yob);
    // // var_dump($yob1);
    // exit;
    if ($yob1 != 0) {
        return date("Y") - $yob1;
    } elseif (empty($yob)) {
        echo "waka";
    } else {
        return "Error processing your request:Numbers only";
    }
}
echo yob($_POST['yob']);