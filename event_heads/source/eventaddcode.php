<?php
session_start();
include '../includes/header.php';

require '../db/dbconfig.php';
$event_name = $sub_event_name = $college_name = $place = $time = $head_name = $description = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $event_name = mysqli_real_escape_string($link, $_POST['event_name']);
    $sub_event_name = mysqli_real_escape_string($link, $_POST['sub_event_name']);
    $college_name = mysqli_real_escape_string($link, $_POST['college_name']);
    $place = mysqli_real_escape_string($link, $_POST['place']);
    $time = ($_POST['time']);
    $head_name = mysqli_real_escape_string($link, $_POST['head_name']);
    $description = mysqli_real_escape_string($link, $_POST['description']);
    $email =  $_SESSION["email"];

    if ($event_name == $sub_event_name) {
        $_SESSION['status'] = 'Event and sub event name should be different.';
    } else {
        
        $sql = "INSERT INTO `event_details` (`EVENT_NAME`, `SUB_EVENT_NAME`,`unique_email`, `COLLEGE_NAME`, `PLACE`, `TIME`, `EVENT_HEAD_NAME`, `DESCRIPTION`) VALUES (?,?,?,?,?,?,?,?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssssss", $event_name, $sub_event_name, $email, $college_name, $place, $time, $head_name, $description);
            
        }
       
        if ($bp = mysqli_stmt_execute($stmt)) {
            
            echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Well done!</strong> You added event successfully. <a href="../eventadd.php" class="alert-link">Redirect to previous page</a>.
                </div>';
        } else {
            $_SESSION['status'] = "Ops! Something went wrong.";
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
include '../includes/script.php';
include '../includes/footer.php';
?>