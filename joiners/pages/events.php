<?php
$title = 'Latest events - Eventers';
include '../includes/joiners_header.php';
include '../includes/joiners_navbar.php';
include '../../global/functions/functions.php';
?>

<div class="container mt-4">
    <div class="row">
        <?php
        $imgDestination = "../../global/uploads/subEventThumbnail/";
        require "../db/dbconfig.php";
        $sql = "SELECT * FROM `event_details` ORDER BY ID DESC";
        $result = mysqli_query($link, $sql);
        $nums_rows = mysqli_num_rows($result);
        //find number of record returns
        if ($nums_rows > 0) {
            while ($row_data = mysqli_fetch_assoc($result)) {
        
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
                            <form action="joined_the_event.php" method="get">
                           
                            <input type="hidden" name="eventjoin" value=<?php echo $row_data["ID"];?>>
                            <button type="submit" class="btn btn-outline-primary btn-sm btn-block w-50">Join</button>
                            <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-30">
                                Read more
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="far fa-heart"></i>
                            </a> 
                        </form>
                        
                           
                        </div>

                    </div>
                </div>

        <?php

                echo "<br>";
            }
        } else {
            echo "<h2>No Event Found</h2>";
        }
        ?>


    </div>
</div>

<?php
include '../includes/joiners_footer.php';
?>