<?php
include('config.php');
session_start();  // Starting Session


if(isset($_SESSION['ids'])){
header("location: feedSup.php");
} 
else{
$error=''; // Variable To Store Error Message

if (isset($_POST['login']) && $_POST['accountforlogin']=="supplier") {
    if (empty($_POST['emails']) || empty($_POST['pwds'])) {
        $error = "Username or Password is invalid!";
    }
    else{
        // Define $username and $password
        $username=$_POST['emails'];
        $password=$_POST['pwds'];
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        //mysql_connect("sql207.byethost7.com", "b7_16384139", "Password@5") or die('save_failed');
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $sqls = "select * from supplier where pwds='$password' AND emails='$username'";
        $results = $conn->query($sqls);
        $rows = $results->fetch_assoc();
            if ($results->num_rows == 1) {
                $_SESSION['ids']=$rows['ids']; // Initializing Session
                $_SESSION['unames']=$rows['umanes'];
                header("location: feedSup.php"); // Redirecting To Other Page
            } else {
                $error = "Username or Password is invalid!";
            }
    }
}
}

if(isset($_SESSION['idc'])){
header("location: feedCon.php");
} 
else{
$error=''; // Variable To Store Error Message

if (isset($_POST['login']) && $_POST['accountforlogin']=="consumer") {
    if (empty($_POST['emails']) || empty($_POST['pwds'])) {
        $error = "Username or Password is invalid!";
    }
    else{
        // Define $username and $password
        $emails=$_POST['emails'];
        $pwds=$_POST['pwds'];
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        //mysql_connect("sql207.byethost7.com", "b7_16384139", "Password@5") or die('save_failed');
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $sqlc = "select * from consumer where pwdc='$pwds' AND emailc='$emails'";
        $resultc = $conn->query($sqlc);
        $rowc = $resultc->fetch_assoc();
            if ($resultc->num_rows == 1) {
                $_SESSION['idc']=$rowc['idc']; // Initializing Session
                $_SESSION['emailc']=$rowc['emailc'];
                header("location: feedCon.php"); // Redirecting To Other Page
            } else {
                $error = "Username or Password is invalid!";
				echo $error;
            }
    }
}
}
?>