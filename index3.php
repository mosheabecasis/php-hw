<!-- EX4 -->
<?php
$array = array("1", "2");
function change($array)
{
    $i = 1;
    $newarray = [];
    foreach ($array as $n) {
        $newarray[$i] = $n;
        $i--;
    }
    var_dump($newarray);
    var_dump($array);
    return $newarray;
}
change($array);
?>