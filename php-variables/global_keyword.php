<html>
<body>
<?php
$x = 10;
$y = 20;


function myFunc()
{
    global $x,$y;
    $y=$x+$y;
}
myFunc();
echo "<p>the value of yis $y</p>";

?>
</body>
</html>