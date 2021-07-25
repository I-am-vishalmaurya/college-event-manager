<?php 
$title = "Edit Events - Eventers";
$bodyColor = "bg-white";
include 'includes/header.php';
include 'includes/navbar.php';
include_once 'db/dbconfig.php';


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $event_id = $_GET['event_id'];
        $sql = "SELECT * FROM `event_details` WHERE ID = '$event_id'";
        $query_run = mysqli_query($link, $sql);
        foreach ($query_run as $row) {
    ?>
            <div class="container">
                <h5 class="text-center 600 h3 text-primary fs-3 fw-3 my-3">Edit Event</h5>

                <form action="source/event-update-code.php" method="post">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Event Name</label>
                            <input type="text" class="form-control form-control-user disabled" name="event_name" value="<?php echo $row['EVENT_NAME']; ?>" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label>Sub event name</label>
                            <input type="text" class="form-control form-control-user" name="sub_event_name" value="<?php echo $row['SUB_EVENT_NAME']; ?>" required>
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
                    <div class="row">
                        <div class="col">
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
    include 'includes/footer.php';
?>