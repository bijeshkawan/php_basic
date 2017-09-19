<html>
<body>
<?php
$age=array("bikram"=>30,"bijesh"=>20,"bikesh"=>26,"npk"=>40);
asort($age);
foreach ($age as $x=>$x_value){
    echo "key: ", $x, " " , " value: ", $x_value;
    echo "<br>";

}
?>
</body>
</html>