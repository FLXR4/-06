<table border="1">
    <?php

    echo "<tr><th></th>";
    for ($i = 4; $i <= 9; $i++) {
        echo "<th>" . $i . "</th>";
    }
    echo "</tr>";

    for ($i = 4; $i <= 9; $i++) {
        echo "<tr><td>" . $i . "</td>";
        for ($j = 4; $j <= 9; $j++) {
            $product = $i * $j;
            $style = "";

            if ($product < 40) {
                $style .= "color: green;";
            } elseif ($product > 75) {
                $style .= "font-weight: bold; color: red;";
            }

            if ($product % 2 == 0) {
                $style .= " background-color: gray;";
            }

            echo "<td style='$style'>" . $product . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>