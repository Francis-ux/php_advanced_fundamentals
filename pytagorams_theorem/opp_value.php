<?php if ($_POST['opp'] == null) {
    echo $final_answer . $_POST['unit'];
} else {
    echo $_POST['opp'] . $_POST['unit'];
}
