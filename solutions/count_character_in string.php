<html>
<body>
<?php
$text="My name is Bijesh kawan";
$search="i";
$count=0;
for($x=0;$x<strlen($text);$x++){
    if(substr($text,$x,1)==$search)
    {
        $count=$count+1;
    }

}
echo "the repetition of character i is : " ,$count;


?>
</body>
</html>