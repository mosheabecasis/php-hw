<!-- EX5 -->
<?php
$string = "mmhghgtmakkmk";
$tofind = "a";

for($i = 0; $i < count($string); $i++){
    $checka = strpos($string, $tofind);
    if ($checka) {
        echo "the string:" . $string . "contains the letter a , in position " . $checka;
    } else
        echo "the string: ", $string . "  does not contain the letter a ";
}

?>