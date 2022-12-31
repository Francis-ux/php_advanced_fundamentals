<?php if ($_POST['hyp'] == null) {
    echo $final_answer . $_POST['unit'];
} else {
    echo $_POST['hyp']  . $_POST['unit'];
}
