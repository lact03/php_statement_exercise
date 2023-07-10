<?php
$maxNumber = 10;

echo "<table style='border-collapse: collapse;'>";
echo "<tr><th></th>";
for ($column = 1; $column <= $maxNumber; $column++) {
    echo "<th>$column</th>";
}
echo "</tr>";

for ($row = 1; $row <= $maxNumber; $row++) {
    echo "<tr>";
    echo "<th>$row</th>";
    for ($col = 1; $col <= $maxNumber; $col++) {
        $quotient = $row / $col;
        echo "<td style='border: 1px solid black; padding: 5px;'>$quotient</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>