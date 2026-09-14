<?php
$friends=array(
    "sakil"=>9876543218,
    "dev"=>8765543789,
    "imr"=>9828889654,
    "ogi"=>7772986542,
    "sou"=>8937629868
);
foreach($friends as $name=>$phone){
    if($phone %2 !==0){
        echo "name:".$name."<br>";
        echo "phone:".$phone."<br><br>";
    }
}
?>
