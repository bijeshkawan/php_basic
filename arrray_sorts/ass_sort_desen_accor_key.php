<html>
<body>
<?php
$age=array("anup"=>30,"ansa"=>20,"bikesh"=>26,"cpk"=>40);
krsort($age);
foreach ($age as $x=>$x_value){
    echo "key: ", $x, " " , " value: ", $x_value;
    echo "<br>";

}
?>
</body>
</html>