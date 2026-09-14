<?php
if(isset($_GET['otp'])){
    echo $_GEt["otp"];
    echo"the otp passed in the url is:".$_GET["otp"];
}else{
    echo"no otp provided in the url ";
}
?>
