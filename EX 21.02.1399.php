
<!DOCTYPE html>
<html>

<?php

$cols = 10;
$rows = 10;

echo "<table class='bg' border=\"1\">";

for ($r =0; $r < $rows; $r++){


    echo('<tr>');

    for ($c = 0; $c < $cols; $c++)
        echo( '<td>' .$c*$r.'</td>');

    echo('</tr>');

}

echo("</table>");





?>

<style>
    .bg {
        background-color: teal;
        color: white;
    }
</style>
</html>
