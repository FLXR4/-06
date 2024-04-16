<?php
// Set the range of numbers
$start = 4;
$end = 9;

// Start the HTML table
echo "<table>";


echo "<tr><th>Число</th><th>Квадрат</th></tr>";


for ($i = $start; $i <= $end; $i++) {
    echo "<tr><td>" . $i . "</td><td>" . ($i * $i) . "</td></tr>";
}

// Close the HTML table
echo "</table>";

echo "<table>";

// Create the table header
echo "<tr><th></th>";
for ($i = 4; $i <= 9; $i++) {
    echo "<th>" . $i . "</th>";
}
echo "</tr>";

// Create the table body
for ($i = 4; $i <= 9; $i++) {
    echo "<tr><th>" . $i . "</th>";
    for ($j = 4; $j <= 9; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

// Close the HTML table
echo "</table>";
?>