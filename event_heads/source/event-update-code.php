<?php
session_start();
require '../../db/dbconfig.php';
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

$event_name = $sub_event_name = $college_name = $place = $time = $head_name = $description = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    $sub_event_name = mysqli_real_escape_string($link, $_POST['sub_event_name']);
    $college_name = mysqli_real_escape_string($link, $_POST['college_name']);
    $place = mysqli_real_escape_string($link, $_POST['place']);
    $time = ($_POST['time']);
    $head_name = mysqli_real_escape_string($link, $_POST['head_name']);
    $description = $_POST['description'];
    $email =  $_SESSION["email"];
    $id = $_POST['event_id_hidden'];

        
        $sql = "UPDATE `event_details` SET  `SUB_EVENT_NAME` = ?, `COLLEGE_NAME` = ?, `PLACE` = ?, `TIME` = ?, `EVENT_HEAD_NAME` = ?, `DESCRIPTION` = ? WHERE ID =  $id";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssss", $sub_event_name, $college_name, $place, $time, $head_name, $description);
            
        }
        else{
            echo "Query Prep Failed";
        }
       
        if (mysqli_stmt_execute($stmt)) {
            
           
            echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Well done!</strong> You updated event successfully <a href="../eventadd.php" class="alert-link">Redirect to previous page</a>.
                </div>';
            

            
        } else {
            echo "Ops! Something went wrong.";
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);

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