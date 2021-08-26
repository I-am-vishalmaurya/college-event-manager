<?php
include '../includes/joiners_header.php';
include '../includes/joiners_navbar.php';
require '../../db/dbconfig.php';
include '../../global/functions/functions.php';
?>
<?php
$email = $_SESSION['email'];
$sql = "SELECT EVENT_ID FROM `saved_events` WHERE EMAIL = '$email'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event_id = $row['EVENT_ID'];
        $sql_2 = "SELECT * FROM `event_details` WHERE ID = '$event_id'";
        $result_2 = $link->query($sql_2);
        if (mysqli_num_rows($result_2) > 0) {
            while ($row_data = $result_2->fetch_assoc()) {
?>
                <div class="container">
                <div class="row mx-auto mb-2">
            <h3 class="h3 text-center text-primary">Your Saved Events</h3>
        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_data['SUB_EVENT_NAME']; ?></h5>
                                    <h6 class="card-subtitle text-muted"><?php echo $row_data['EVENT_NAME']; ?></h6>
                                </div>
                                <img class="img card-img-top" width="250px" height="200px" src="" alt="">
                                <div class="card-body">

                                    <p class="card-text">
                                        <?php
                                        echo turnacteString($row_data['DESCRIPTION'], 85, false);
                                        ?>
                                    </p>
                                    <div class="row p-0 mb-2" style="border: none !important;">
                                        <div class="col">
                                            Location: <?php echo $row_data['PLACE']; ?>
                                        </div>
                                        <div class="col">
                                            Date: <?php echo date('d F Y', strtotime($row_data['TIME'])); ?>
                                        </div>
                                    </div>
                                    <form action="joined_the_event.php" method="get">

                                        <input type="hidden" name="eventjoin" value=<?php echo $row_data["ID"]; ?>>
                                        <button type="submit" class="btn btn-outline-primary btn-sm btn-block w-50">Join</button>
                                        <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-30">
                                            Read more
                                        </a>
                                        <a href="#" class="btn btn-outline-secondary btn-sm">
                                        ❤️ 
                                        </a>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
<?php
            }
        } else {
            echo "No events saved";
        }
    }
}
?>


<?php
include '../includes/joiners_footer.php';
?>