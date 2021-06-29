<?php
$title = 'Test Bootstrap';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

?>
<div class="new-events container">
    <?php
    include_once "../config/config.php";
    $sql = "SELECT * FROM `event_details` ORDER BY ID DESC";
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

            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x180" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in.
                                    Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x180" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in.
                                    Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>


            <?php
        }
    }
            ?>




                </div>