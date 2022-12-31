<?php
$location =  fopen('location.txt', 'r');
$option = [];
if ($location) {
    while (($line = fgets($location)) != false) {
        array_push($option, $line);
    }
}
?>
<?php foreach ($option as $key => $value) : ?>
    <img width="50%" src="<?php echo "uploads/" . $value ?>" alt="">
<?php endforeach ?>