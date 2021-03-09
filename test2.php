<?php 
echo "test<br>";
$mysqli = new $mysqli ("localhost","Admin","cHaR8LNgG2QZmlwQ","test_2");

//chk conn.
if($mysqli -> connect errno) {
    echo "Failed to connect to MySQL :" . $mysqli -> connect_error;
    exit();
}else{
    echo Db "Connected"
}
?>