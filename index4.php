<!-- EX5 -->
<?php
$stringarray = array("car", "dog", "baloon", "papa");
$tofind = "a";

foreach ($stringarray as $value) {
    if (strpos($value, $tofind)) {
        echo '=> ' . $value . "<br>";
    }
}
?>