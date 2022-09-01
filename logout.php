<?php
include('config.php');
session_start();


//mysql_close($conn);

session_destroy();
header('location:index.php');
?>