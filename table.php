<?php
for ($i = 0; $i <= 1; $i++) {
    echo '<tr>';

    $a = $i;

    for ($j = 0; $j <= 1; $j++) {
        $b = $j;

        echo '<td>' . $a . '</td><td>' . $b . '</td>';

        echo '<td>' . (!$a ? 1 : 0) . '</td>'; 
        echo '<td>' . ($a || $b ? 1 : 0) . '</td>'; 
        echo '<td>' . ($a && $b ? 1 : 0) . '</td>'; 
        echo '<td>' . (($a xor $b) || (!$a && !$b) ? 1 : 0) . '</td>';

        echo '</tr>';
    }
}
?>
