<?php
$title = 'Test Bootstrap';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

?>


<!-- site-body-main -->
<div class="waves first-visual">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd700" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,117.3C384,64,480,32,576,42.7C672,53,768,107,864,122.7C960,139,1056,117,1152,106.7C1248,96,1344,96,1392,96L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
</div>

<!-- -----x------site-body-main------x---- -->
<div class="new-events container">
    <?php
    include_once "../config/config.php";
    $sql = "SELECT * FROM `event_details`";
    $result = mysqli_query($link, $sql);
    //find number of record returns
    $nums_rows = mysqli_num_rows($result);
    if ($nums_rows > 0) {
        while ($row_data = mysqli_fetch_assoc($result)) {
            $event_name =  $row_data['EVENT_NAME'];
            $sub_event_name =  $row_data['SUB_EVENT_NAME'];
            $college_name =  $row_data['COLLEGE_NAME'];
            $place = $row_data['PLACE'];
            $dateandtime = $row_data['TIME'];
            $event_head_name = $row_data['EVENT_HEAD_NAME'];
            $description = $row_data['DECRIPTION'];
    ?>
            <div class="new-event-container">
                Event Name: <span><?php echo $sub_event_name; ?></span>
            </div>
    <?php
        }
    }
    ?>

</div>


<?php
require_once 'includes/footer.php';
?>