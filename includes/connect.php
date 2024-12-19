<?php

$conn=mysqli_connect('localhost:3306','root','','mystore');
if(!$conn){
    die(mysqli_error($conn));
}

?>