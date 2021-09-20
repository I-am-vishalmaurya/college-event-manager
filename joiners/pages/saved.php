<?php
$title = "Saved Events - Eventers";
include '../includes/joiners_header.php';
include '../includes/joiners_navbar.php';
require '../../db/dbconfig.php';
include '../../global/functions/functions.php';
?>
<div class="container mt-4">
    <div class="row">
<?php
$imgDestination = "../../global/uploads/subEventThumbnail/";
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
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_data['SUB_EVENT_NAME']; ?></h5>
                            <h6 class="card-subtitle text-muted"><?php echo $row_data['EVENT_NAME']; ?></h6>
                        </div>
                        <img class="img card-img-top" width="250px" height="200px" src="<?php echo $imgDestination . $row_data['THUMBNAIL']; ?>" alt="">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="../source/joined_the_event.php" method="get">

                                        <input type="hidden" name="eventjoin" value=<?php echo $row_data["ID"]; ?>>
                                        <button type="submit" name="submitButtonHandler" class="btn btn-outline-primary btn-sm btn-block w-100">Join</button>


                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-100">
                                        Read more
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <?php
                                    $id = $row_data['ID'];
                                    $sql_check = "SELECT * FROM `saved_events` WHERE `EMAIL` = '$email' AND `EVENT_ID` = $id";
                                    $result_check = mysqli_query($link, $sql_check);
                                    $nums_rows_check = mysqli_num_rows($result_check);
                                    if ($nums_rows_check > 0) {
                                    ?>
                                        <form action="../source/joined_the_event.php" method="GET">
                                            <input type="hidden" name="unsaveEventID" value=<?php echo $id ?>>
                                            <a class="btn btn-outline-secondary btn-sm bg-white" method="GET">
                                                <button type="submit" class="bx bxs-bookmark border-0 bg-white" name="unSaveTheEvent"></button>
                                            </a>
                                        </form>
                                    <?php
                                    } else {
                                    ?>
                                        <form action="../source/joined_the_event.php" method="GET">
                                            <input type="hidden" name="eventjoinID" value=<?php echo $id ?>>
                                            <a class="btn btn-outline-secondary btn-sm bg-white" method="GET">
                                                <button type="submit" class="bx bx-bookmark border-0 bg-white" name="saveTheEvent"></button>
                                            </a>
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
        echo "<br>";
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