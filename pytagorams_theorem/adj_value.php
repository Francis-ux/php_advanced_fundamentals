<?php if ($_POST['adj'] == null) {
    echo $final_answer . $_POST['unit'];
} else {
    echo $_POST['adj']  . $_POST['unit'];
}
