<?php
$bodyColor = "bg-white";
$title = "Forgot Password";
include '../includes/header.php';
include '../../db/dbconfig.php';
?>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_SESSION['email'];
    $newPassword = $_POST['newPassword'];
    $newPasswordConfirm = $_POST['newPasswordConfirm'];
    if($newPassword == $newPasswordConfirm){
        $password_hash = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE `login_details` SET password = '$password_hash' WHERE email = '$email'";
        $result = mysqli_query($link, $sql);
        header("location: ../login.php?passwordSuccessfullyreset");
    }
    else{
        echo "Passwords do not match";
    }
    
    

}

?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/admin_main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>