<?php
$title = "Edit Events - Eventers";
$bodyColor = "bg-white";
include 'includes/header.php';
include 'includes/navbar.php';
require '../db/dbconfig.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $event_id = $_GET['event_id'];
    $sql = "SELECT * FROM `event_details` WHERE ID = '$event_id'";
    $query_run = mysqli_query($link, $sql);
    foreach ($query_run as $row) {
?>
        <div class="container">
            <h5 class="text-center 600 h3 text-primary fs-3 fw-3 my-3">Edit Event</h5>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Event Name</label>
                        <input type="text" class="form-control form-control-user disabled" name="event_name" value="<?php echo $eventname = $row['EVENT_NAME']; ?>" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label>Sub event name</label>
                        <input type="text" class="form-control form-control-user" name="sub_event_name" value="<?php echo $subeventname = $row['SUB_EVENT_NAME']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>College Name</label>
                    <input type="text" class="form-control form-control-user" name="college_name" value="<?php echo $row['COLLEGE_NAME']; ?>">

                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Place</label>
                        <input type="text" class="form-control form-control-user" name="place" value="<?php echo $row['PLACE']; ?>" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Time</label>
                        <input type="text" class="form-control form-control-user" id="dtttextbox" name="time" value="<?php echo $row['CURRENT_STAMP']; ?>" required>
                        <script>
                            var dtt = document.getElementById('dtttextbox')
                            dtt.onfocus = function(event) {
                                this.type = 'datetime-local';
                                this.focus();
                            }
                        </script>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label>Event head name</label>
                        <input type="text" name="head_name" class="form-control form-control-user" value="<?php echo $row['EVENT_HEAD_NAME']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label>Description</label>
                        <textarea class="form-control form-control-user" name="description" required rows="3"><?php echo $row['DESCRIPTION']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control form-control-user" placeholder="Upload an photo">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col">
                        <input type="hidden" name="event_id_hidden" value=<?php echo $event_id ?>>

                        <button type="submit" name="update-Button" class="btn btn-success btn-user btn-block w-100">
                            Update Event
                        </button>
                    </div>
                    <div class="col">
                        <a name="cancel-button" role="button" class="btn btn-danger btn-user btn-block w-100" onclick="location.href='showevent.php';">
                            Cancel
                        </a>
                    </div>
                </div>


            </form>

    <?php
    }
}
    ?>

        </div>
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
            } else {
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

        <?php
        include 'includes/footer.php';
        ?>