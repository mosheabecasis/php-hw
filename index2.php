<!-- EX3 -->
<?php
$txt = "";
$open = "";
$close = "";
$int = 1;

switch ($int) {
    case 0:
        $open = "<span>";
        $close = "</span>";
        $txt = "this is a span tag";
        break;
    case 1:
        $open = "<h1>";
        $close = "</h1>";
        $txt = "this is a h1 tag";
        break;
    case 2:
        $open = "<p>";
        $close = "</p>";
        $txt = "this is a p tag";
        break;
}
echo $open . $txt . $close;
?>