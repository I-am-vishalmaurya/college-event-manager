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
    }
}
?>
