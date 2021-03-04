<!-- EX4 -->
<?php
$array = array("1", "2");
function change($anarray){
     $holder1 = $anarray[0];
     $holder2 = $anarray[1];
     $newarray = array($holder2,$holder1);
    var_dump($newarray);
}
change($array);

?>


