<?php

date_default_timezone_set("Asia/Kolkata");

while (true) {
    $temperature = rand(20, 40);  
    $humidity    = rand(30, 90); 
    $timestamp   = date("Y-m-d H:i:s");

    $line = "$timestamp,$temperature,$humidity\n";

    file_put_contents("D:\php\data.csv", $line, FILE_APPEND);

    echo "Generated: $line";


    sleep(2);
}
?>
