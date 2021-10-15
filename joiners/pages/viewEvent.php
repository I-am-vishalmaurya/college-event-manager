<?php
$title = "View Events - Eventers";
include '../includes/joiners_header.php';
include '../includes/joiners_navbar.php';
require '../../db/dbconfig.php';
?>
<!-- Get the selected event id with get method -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $event_id = $_GET['joinedEventID'];
    if ($event_id) {
        $imgDestination = "../../global/uploads/subEventThumbnail/";
        $sql = "SELECT * FROM event_details WHERE ID = $event_id";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $event_name = $row['EVENT_NAME'];
        $sql2 = "SELECT * FROM `events_name` WHERE  = $event_name";
        $result2 = mysqli_query($link, $sql2);
        echo var_dump($result2);
        echo $event_name;
        echo mysqli_error($link);
        $row2 = mysqli_fetch_assoc($result2);

?>
        <div class="card mb-3 col-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['SUB_EVENT_NAME'] ?></h5>
                <h6 class="card-subtitle text-muted"><?php echo $row['EVENT_NAME'] ?></h6>
            </div>
            <img class="img card-img-top card-thumbnail-image" src="<?php echo $imgDestination . $row['THUMBNAIL']; ?>" alt="">
            <div class="card-body">
                <div class="row text-left">
                    <p class="card-text"><?php echo $row['DESCRIPTION'] ?></p>
                    <div class="col">
                        <p class="card-text"><?php echo "Venue: " . $row['COLLEGE_NAME'];  ?></p>
                    </div>
                    <div class="col">
                        <p class="card-text"><?php echo "Location: " . $row['PLACE'] ?></p>
                    </div>
                </div>
                <div class="row text-left">
                <p class="card-text"><?php echo "Date: " . date('d F Y', strtotime($row['TIME']));  ?></p>
                    <div class="col">
                        <p class="card-text"><?php echo "Number of Days: " . $row2['NO_DAYS_EVENTS'];  ?></p>
                    </div>
                    <div class="col">
                        <p class="card-text"><?php echo "Visitor Count: " . $row['NO_VISITORS'] ?></p>
                    </div>
                </div>

                
                <hr>
                <div class="row text-left">
                    <div class="col">
                    <p class="card-text"><?php echo "Event Head: " . $row['EVENT_HEAD_NAME'];  ?></p>
                    </div>
                    <div class="col">
                    <p class="card-text"><?php echo "Contact Details: " . "9076260427";  ?></p>
                    </div>
                </div>
                <div class="row text-left">
                <p class="card-text"><?php echo "Email ID: " . $row['unique_email'];  ?></p>
                </div>
                
               
                
                
            </div>

            <div class="card-body">
                <a href="#" class="card-link btn btn-primary w-100">Unjoin the event</a>
            </div>
        </div>
<?php
    } else {
        include 'errorPage.php';
    }
}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!-- Main JS -->
<script src="../js/main.js"></script>
</body>

</html>