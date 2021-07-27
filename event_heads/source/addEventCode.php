<?php
session_start();
include_once '../db/dbconfig.php';
$title = "Post an event - Eventers";
$bodyColor = "bg-light";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;400;800&display=swap" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="../styles/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/EH-style.css" rel="stylesheet">

</head>

<body class =<?php echo $bodyColor; ?>>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $event_name = $sub_event_name = $college_name = $place = $time = $head_name = $description = '';
    $event_name = mysqli_real_escape_string($link, $_POST['event_name']);
    $sub_event_name = mysqli_real_escape_string($link, $_POST['sub_event_name']);
    $college_name = mysqli_real_escape_string($link, $_POST['college_name']);
    $place = mysqli_real_escape_string($link, $_POST['place']);
    $time = ($_POST['time']);
    $head_name = mysqli_real_escape_string($link, $_POST['head_name']);
    $description = mysqli_real_escape_string($link, $_POST['description']);
    $category = $_POST['category'];
    $email =  $_SESSION["email"];
    //Code for Uploading the subevent thumbnail
    $file = $_FILES['subEventThumbnail'];
    $filename = $_FILES['subEventThumbnail']['name'];
    $tempname = $_FILES['subEventThumbnail']['tmp_name'];
    $fileSize = $_FILES['subEventThumbnail']['size'];
    $fileError = $_FILES['subEventThumbnail']['error'];
    $filetype = $_FILES['subEventThumbnail']['type'];

    $fileExtension = explode(".", $filename);
    $fileActualExtension = strtolower(end($fileExtension));
    $allowedFileTypes = array("jpg", "jpeg","png");
    if(in_array($fileActualExtension, $allowedFileTypes)){
        if($fileError === 0){
            if($fileSize <= 5242880){
                $newfileName = uniqid('', true).".".$fileActualExtension;
                $fileDestination = '../../global/uploads/subEventThumbnail/'.$newfileName;
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
    

    if ($event_name == $sub_event_name) {
        $_SESSION['status'] = 'Event and sub event name should be different.';
    } else {

        $sql = "INSERT INTO `event_details` (`EVENT_NAME`, `SUB_EVENT_NAME`,`unique_email`,`category`, `COLLEGE_NAME`, `PLACE`, `TIME`, `EVENT_HEAD_NAME`, `DESCRIPTION`, `THUMBNAIL`) VALUES (?,?,?,?,?,?,?,?,?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $event_name, $sub_event_name, $email,$category, $college_name, $place, $time, $head_name, $description, $newfileName);
        }

        if ($bp = mysqli_stmt_execute($stmt)) {

            echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert"></button>
                <strong>Well done!</strong> You added event successfully.
                </div>';
            header('Location: ../eventadd.php?event-added-successfully');
        } else {
            header('Location: ../eventadd.php?error-occured');
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>

   <!-- Footer -->
   <footer class="sticky-footer">
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
               <span>Copyright &copy; Your Website 2021</span>
           </div>
       </div>
   </footer>
   <!-- End of Footer -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="../js/admin_main.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>

   </html>