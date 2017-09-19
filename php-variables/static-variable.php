<html>
<body>
</body>
<?php
function myFunc(){
    static $x=10;
    echo $x;
    $x++;
}
myFunc();
echo "<br>";
myFunc();
echo "<br>";
myFunc();
echo "<br>";
myFunc();
?>
</body>
</html>