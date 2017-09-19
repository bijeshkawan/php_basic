<html>
<body>
<?php
function prime($x)
{
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return 0;
        }

    }

    return 1;

}

$val = prime(11);
if ($val == 0) {
    echo "not prime number";
} else {
    echo " it is Prime number";
}


?>
</body>
</html>
</html>