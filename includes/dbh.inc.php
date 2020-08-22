<?php
$servername = "Localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpprj";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if(!$conn){

	die("Connection failed: ".mysqli_connecct_eror());
}