<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "registration";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){

    die("Failed To Connect !");
}