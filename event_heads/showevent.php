<?php
$title = 'Manage events - Eventers';
$bodyColor = "bg-light";
include 'includes/header.php';
include 'includes/navbar.php';

?>
<div class="container mt-4">
    
    
    <div class="row">
        <?php
 
        require 'db/dbconfig.php';
        if ($email = $_SESSION['email']) {
            $sql = "SELECT * FROM `event_details` WHERE unique_email = '$email' ORDER BY ID DESC";

            $result = mysqli_query($link, $sql);
            //find number of record returns
            $nums_rows = mysqli_num_rows($result);
            if ($nums_rows > 0) {
                while ($row_data = mysqli_fetch_assoc($result)) {

        ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="img card-img-top" width="250px" height="200px" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_data['SUB_EVENT_NAME']; ?></h5>
                                <p class="card-text">
                                    <?php echo $row_data['DESCRIPTION']; ?>
                                </p>
                            </div>
                            <div class="card-footer">


                                <input type="hidden" name="event_id" value=<?php $_SESSION['EVENT_ID'] =  $id = $row_data['ID']; ?>>
                                <button type="submit" name="edit_button" class="btn btn-block btn-secondary mb-1" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>

                                <a href="#" class="" style="text-decoration: none;">
                                    <button type="button" class="btn btn-block btn-danger mb-1">Delete</button>
                                </a>
                            </div>

                        </div>
                    </div>

        <?php

                    echo "<br>";
                }
            }
        } else {
            echo "<h2>No Event Found</h2>";
        }
        ?>


    </div>
    <!-- Modal to edit the event -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                

                    
                    $sql = "SELECT * FROM `event_details` WHERE ID = '$id'";
                    $query_run = mysqli_query($link, $sql);
                    foreach ($query_run as $row) {
                    ?>
                        <form action="source/event-update-code.php" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Event Name</label>
                                    <input type="text" class="form-control form-control-user" name="event_name" value="<?php echo $row['EVENT_NAME']; ?>" required>
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
                                    <button type="submit" name="update-Button" class="btn btn-success btn-user btn-block">
                                        Update Event
                                    </button>
                                </div>
                                <div class="col">
                                    <button name="cancel-button" class="btn btn-danger btn-user btn-block" data-dismiss="modal">
                                        Cancel
                                    </button>
                                </div>
                            </div>


                        </form>
                        </form>

                    <?php

                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</div>


<?php
include 'includes/footer.php';
?>