<?php
echo ("<table height='10' width=10><tr>");
for ($i=1; $i <= 10; $i++) {
    echo ("<td>");
    for ($a=1; $a <= 10; $a++) {
        echo ("$i X $a = ");
        echo $a * $i."<br>";
    }
    echo ("</td>");
}
echo ("</tr></table>");
?>