<?php
include '../includes/header.php';
include '../db/dbconfig.php';
$email = $_SESSION['email'];
$sql = "SELECT * FROM `event_details` WHERE unique_email = '$email'";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

    }

}

?>