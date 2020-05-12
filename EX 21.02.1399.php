<!DOCTYPE html>
<html>

<?php

$cols = 10;
$rows = 10;

echo "<table class='bg' border=\"1\">";

for ($r =0; $r < $rows; $r++){

    echo('<tr class="bg2">');

    for ($c = 0; $c < $cols; $c++)
        echo( '<td class="">' .$c*$r.'</td>');

    echo('</tr>');

}

echo("</table>");



?>

<style>
    
    .bg2
    {
        background-color: rgba(255, 255, 128, .5);
    }
    .bg {
        background-color: teal;
        color: white;
    }
</style>
</html>
