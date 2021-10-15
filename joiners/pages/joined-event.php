<?php
$title = 'View Event Details - Eventers';
include '../includes/joiners_header.php';
include '../includes/joiners_navbar.php';
?>
<!-- division to show the details of event -->
<?php 
    require_once '../../db/dbconfig.php';
    $event_id = $_GET['eventjoinID'];  
    $sql = "SELCT * FROM 'event_details' WHERE ID = $event_id";
    $result = mysqli_query($conn, $sql);
    var_dump($result);

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Event Details</h3>
                </div>
                <div class="panel-body">
</div>

<?php

include '../includes/joiners_footer.php';
?>