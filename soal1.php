<?php

$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
    $acc = 0;
    for ($b = $a; $b > 0; $b--)
    {
        $acc += $b;
    }
    echo "<tr><td colspan=$jml>TOTAL: $acc</td></tr>";
    echo "<tr>";
    for ($b = $a; $b > 0; $b--)
    {
        echo "<td>$b</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
