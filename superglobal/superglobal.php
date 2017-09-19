<html>
<body>
<?php
 $x=10;
 $y=20;
 function multi(){
     $GLOBALS['z']=$GLOBALS['x']* $GLOBALS['y'];
 }
 multi();
 echo $z;
?>
</body>
</html>


