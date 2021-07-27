<?php
$title = 'Latest events - Eventers';
$bodyColor = "bg-light";
include 'includes/header.php';
include 'includes/navbar.php';
include '../global/functions/functions.php';
require_once 'db/dbconfig.php';
?>

<div class="container mt-3">

    <div class="row">
        <div class="row my-3">
            <div class="col-sm-8">
                <h3 class="text-start 400 text-primary">Latest events</h3>
            </div>
            <div class="col-sm-4">
                <form class="row gy-2 gx-3 align-items-center" method="get" action="">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label my-1 col-form-label-sm">Filter</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="category-filter" id="autoSizingSelect">
                                <option value="">All categories</option>
                            
                                    
                            </select>
                        </div>
                        <span class="col-sm-2">
                            <button type="submit" name="" class="btn btn-primary"><i class='bx bx-filter-alt'></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <?php
        if(isset($_GET['submit'])){
            $filter = $_GET['category-filter'];
            
        }
        ?>
        <?php
       
        $sql = "SELECT * FROM `event_details` ORDER BY ID DESC WHERE CATEGORY = '$filter'";
        $result = mysqli_query($link, $sql);
        $nums_rows = mysqli_num_rows($result);
        //find number of record returns
        if ($nums_rows > 0) {
            while ($row_data = mysqli_fetch_assoc($result)) {

        ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">

                        <img class="img card-img-top" width="250px" height="200px" src="" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_data['SUB_EVENT_NAME']; ?></h5>
                            <h6 class="card-subtitle text-muted"><?php echo $row_data['EVENT_NAME']; ?></h6>

                            <div class="row p-0 mb-2" style="border: none !important;">
                                <div class="col">
                                    Location: <?php echo $row_data['PLACE']; ?>
                                </div>
                                <div class="col">
                                    Date: <?php echo date('d F Y', strtotime($row_data['TIME'])); ?>
                                </div>
                            </div>
                            <form action="../source/joined_the_event.php" method="get">

                                <input type="hidden" name="eventjoin" value=<?php echo $row_data["ID"]; ?>>
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
include 'includes/footer.php';
?>