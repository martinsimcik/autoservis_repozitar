<?php

$db = mysqli_connect("localhost","root","","autoservis");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>