<?php
function display_triangle()
{
    $battery_level = $_POST['battery_amount'];
    $html = "<div id='battery_container'>";
    $html .= "<div id='battery'";
    if ($battery_level > 15) {
        $html .= ' class="green"';
    } elseif (empty($_POST['battery_amount']) || is_string($_POST['battery_amount'])) {
        echo "<p  style='color:red'> input a number </p>";
    } else {
        $html .= ' class="red"';
    }
    $html .= ' style="width:' . $battery_level . '%">';

    $html .= "</div>";

    $html .= "</div>";
    $html .= "<form action='' method='post'>";
    $html .= "<input type='text' name='battery_amount' placeholder='enter number'>";
    $html .= "<input type='submit' value='submit'>";
    $html .= " </form>";
    return $html;
}