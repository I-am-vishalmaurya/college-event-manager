<?php
$title = 'Manage events - Eventers';
$bodyColor = "bg-light";
include 'includes/header.php';
include 'includes/navbar.php';

?>
<div class="container mt-4">


    <div class="row">
        <?php

require '../db/dbconfig.php';
        if ($email = $_SESSION['email']) {
            $sql = "SELECT * FROM `event_details` WHERE unique_email = '$email' ORDER BY ID DESC";

            $result = mysqli_query($link, $sql);
            //find number of record returns
            $nums_rows = mysqli_num_rows($result);
            $imgDestination = "../global/uploads/subEventThumbnail/";
            if ($nums_rows > 0) {
                while ($row_data = mysqli_fetch_assoc($result)) {

        ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="img card-img-top event__thumbnail" width="250px" height="200px" src="<?php echo $imgDestination . $row_data['THUMBNAIL'] ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_data['SUB_EVENT_NAME']; ?></h5>
                                <p class="card-text">
                                    <?php echo $row_data['DESCRIPTION']; ?>
                                </p>
                            </div>
                            <div class="card-footer">

                                <form action="updateEventCode.php" method="get">
                                    <div class="row">
                                    <input type="hidden" name="event_id" value=<?php echo $id = $row_data['ID']; ?>>
                                    <div class="col">
                                    <button type="submit" name="edit_button" class="btn btn-block btn-secondary mb-1 w-100">Edit</button>
                                    </div>
                                    <div class="col">
                                    <button type="button" class="btn btn-block btn-danger mb-1 w-100">Delete</button>
                                    </div>
                                    </div>
                                </a>
                                </form>
                                
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

    

<?php
include 'includes/footer.php';
?>