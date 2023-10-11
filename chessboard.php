<?php
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($column = 1; $column <= 10; $column++) {
        $total = $row + $column;
        if ($total % 2 == 0) {
            echo "<td class='td-pink'></td>";
        } else {
            echo "<td class='td-grey'></td>";
        }
    }
    echo "</tr>";
}
?>
