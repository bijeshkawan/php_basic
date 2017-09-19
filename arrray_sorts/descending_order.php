<html>
<body>
<?php
$cars = array("volkswagen", "hyndai", "kia", "bmw");
rsort($cars);
$x = count($cars);
for ($i = 0; $i < $x; $i++) {
    echo $cars[$i];
    echo "<br>";
}
?>
</body>
</html>