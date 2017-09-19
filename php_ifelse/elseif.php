<html>
<body>
<?php
date_default_timezone_set("Europe/London");

$x=date("Y-m-d - h:m:s");
echo $x;
echo "<br>";
if($x<"10"){
    echo "good morning";
}
elseif($x<"20"){
    echo "good day";

}
else{
    echo "good night";
}
?>
</body>
</html>