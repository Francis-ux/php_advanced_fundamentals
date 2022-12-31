<?php
// working with check box on the back end
echo "<pre>";
// echo print_r($_POST);
// echo $_POST['username'];
// echo " You selected " . count($_POST['subjects']) . " which include: ";
// foreach ($_POST['subjects'] as $value) {
//     echo $value;
//     echo ",";
// } 
?>

<?php
//backend
echo "<pre>";
echo $_POST['username'];
echo " You selected " . count($_POST['subject']) . " which include:";
foreach ($_POST['subject'] as  $value) {
    echo $value;
    echo ",";
}
?>