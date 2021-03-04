<!-- EX 1 -->
<?php
$array = array(
    "name" => "john doe",
    "id" => "044765765",
    "dob" => "20/08/1984"
);

foreach ($array as $value) {
    echo "<br>" . $value;
}
?>

<!-- EX2 -->
<?php
$array = array(
    "name" => "john doe",
    "id" => "044765765",
    "dob" => "20/08/1984"
);
?>
<h1><?php echo $array['name']; ?></h1>
<p style="color:green; text-decoration:underline;"><?php echo $array['id']; ?></p>
<input type="date" value="<?php echo $array['dob']; ?>"></input> <!--  not working -->