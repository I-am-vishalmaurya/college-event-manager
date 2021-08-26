<?php
session_start();
require '../../db/dbconfig.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $eventName = $_POST['newEventName'];
    $location = $_POST['newEventLocation'];
    $noOfDays = $_POST['newEventdays'];
    $desc = $_POST['newEventDescription'];
    $range = $_POST['newEventVisitorRange'];
    $hosted_by = $_SESSION['email'];
    $query1 = "SELECT * FROM `events_name` WHERE EVENT_NAME = $eventName";
    $result1 = $link->query($query1);
    //Code for Uploading the thumbnail
    $files = $_FILES['newEventThumbnail'];
    $filename = $_FILES['newEventThumbnail']['name'];
    $tempname = $_FILES['newEventThumbnail']['tmp_name'];
    $fileSize = $_FILES['newEventThumbnail']['size'];
    $fileError = $_FILES['newEventThumbnail']['error'];
    $filetype = $_FILES['newEventThumbnail']['type'];

    $fileExtension = explode(".", $filename);
    $fileActualExtension = strtolower(end($fileExtension));
    $allowedFileTypes = array("jpg", "jpeg","png");
    if(in_array($fileActualExtension, $allowedFileTypes)){
        if($fileError === 0){
            if($fileSize <= 5242880){
                $newfileName = uniqid('', true).".".$fileActualExtension;
                $fileDestination = '../../global/uploads/eventThumbnail/'.$newfileName;
                (move_uploaded_file($tempname, $fileDestination));
                

            }
            else{
                echo "File size is too big.";
            }
        }
        else{
            echo "Error: Uploading the file";
        }
    }
    else{
        echo "Invalid File Type";
    }
    //End of Uploading the thumbnail
    if ($result1 == false) {
        
        $query = "INSERT INTO `events_name`(`HOSTED_BY`,`EVENT_NAME`,`LOCATION`, `NO_DAYS_EVENTS`,`NO_VISITORS`,`DESCRIPTION`,`THUMBNAIL`) VALUES ('$hosted_by','$eventName', '$location','$noOfDays','$range','$desc','$newfileName')";
        $result = mysqli_query($link, $query);
        if ($result) {
            echo "Successfully added";
            header("Location: ../eventadd.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($link);
        }
    } 
    
    else {
        echo "Event name already exists";
    }

}
?>