<?php 
session_start();
    include '../db/dbconfig.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_SESSION['email'];


        //Code for Uploading the subevent thumbnail
    $file = $_FILES['profileImage'];
    $filename = $_FILES['profileImage']['name'];
    $tempname = $_FILES['profileImage']['tmp_name'];
    $fileSize = $_FILES['profileImage']['size'];
    $fileError = $_FILES['profileImage']['error'];
    $filetype = $_FILES['profileImage']['type'];

    $fileExtension = explode(".", $filename);
    $fileActualExtension = strtolower(end($fileExtension));
    $allowedFileTypes = array("jpg", "jpeg","png");
    if(in_array($fileActualExtension, $allowedFileTypes)){
        if($fileError === 0){
            if($fileSize <= 5242880){
                $newfileName = uniqid('', true).".".$fileActualExtension;
                $fileDestination = '../../global/uploads/profileImage/'.$newfileName;
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
   
        $dob = $_POST['date_of_birth'];
        $collegeName = mysqli_escape_string($link,$_POST['College']);
        $city = mysqli_escape_string($link,$_POST['city']);
        $state = mysqli_escape_string($link,$_POST['state']);
        $zip = $_POST['zipcode'];
        
        $sql = "UPDATE `student_login` SET `DOB` = '$dob',`COLLEGE_NAME` = '$collegeName', `CITY` ='$city', `STATE` ='$state' ,`ZIP` =$zip, `THUMBNAIL` = '$newfileName' WHERE EMAIL = '$email' ";
        $result = mysqli_query($link,$sql);
        if($result){
            header("location: ../pages/view-profile.php?success");
        }
        else{
            echo "Error Updating";
            echo mysqli_error($link);
        }
    }
    

?>