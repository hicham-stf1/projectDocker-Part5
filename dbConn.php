<?php
$db = mysqli_connect("172.31.0.3","root","hicham","dockerprojdb");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>