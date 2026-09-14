<?php
;

if (file_exists("data.csv")) {
    $lines = file("data.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($timestamp, $temperature, $humidity) = explode(",", $line);
        echo "<tr><td>$timestamp</td><td>$temperature</td><td>$humidity</td></tr>";
    }
}

echo "</table>";
?>
