<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the eSyllabus guide can
work correctly.
******************************************************/

//We log to the DataBase


//LocalHost Credentials
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'food';


/*
//Server Credentials
$servername = 'sql207.byethost7.com';
$username = 'b7_16384139';
$password = 'Password@5';
$dbname = 'b7_16384139_esyllabus';
*/

$conn = new mysqli($servername, $username, $password, $dbname)or die("cud not connect");



/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Muster Home Page
$url_home = 'index.php';

//Design Name
$design = 'css';

?>