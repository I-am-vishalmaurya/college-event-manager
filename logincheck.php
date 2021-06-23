<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "3112";
$db = "event-manager";
// Creating connection
$con = mysqli_connect($servername, $username, $password, $db);
//Check connection
if($con -> connect_errno){
    die("Connection Failed" . $con->connect_errno);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $uname = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $sql_query = "select count(*) as cntUser from login_details where emailid='".$uname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo "Login Success";
    }else{
        echo "Invalid username and password";
    }
}
?>