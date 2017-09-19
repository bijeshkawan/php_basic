<html>
<body>
<?php
$number=array(3,1,12,41,11,7,9,5,13,60);
sort($number);
$length=count($number);
for($i=0;$i<$length;$i++){
    echo $number[$i];
    echo "<br>";

}
?>
</body>
</html>