<?php
session_start();

require '../db/dbconfig.php';
$event_name = $sub_event_name = $college_name = $place = $time = $head_name = $description = '';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $event_name = mysqli_real_escape_string($link, $_POST['event_name']);
    $sub_event_name = mysqli_real_escape_string($link, $_POST['sub_event_name']);
    $college_name = mysqli_real_escape_string($link, $_POST['college_name']);
    $place = mysqli_real_escape_string($link, $_POST['place']);
    $time = ($_POST['time']);
    $head_name = mysqli_real_escape_string($link, $_POST['head_name']);
    $description = mysqli_real_escape_string($link, $_POST['description']);

    if($event_name == $sub_event_name){
        $_SESSION['status'] = 'Event and sub event name should be different.';
    }
    else{
        $sql = "INSERT INTO `event_details` (`EVENT_NAME`, `SUB_EVENT_NAME`, `COLLEGE_NAME`, `PLACE`, `TIME`, `EVENT_HEAD_NAME`, `DESCRIPTION`) VALUES (?,?,?,?,?,?,?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssss",$event_name, $sub_event_name, $college_name, $place, $time, $head_name, $description);
        }
        if(mysqli_stmt_execute($stmt)){
            $_SESSION['status'] = "Event Added successfully";
            header("location: ../eventadd.php");
            die();
        }
        else{
            $_SESSION['status'] = "Ops! Something went wrong.";
        }
        mysqli_stmt_close($stmt);

    }
mysqli_close($link);    

}

