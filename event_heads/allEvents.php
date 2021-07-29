<?php
$title = 'Latest events - Eventers';
$bodyColor = "bg-light";
include 'includes/header.php';
include 'includes/navbar.php';
include '../global/functions/functions.php';
require_once 'db/dbconfig.php';
?>

<div class="container mt-3">

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <form action="" method="GET">
                        <div class="card border-0">
                            <div class="card-header">
                                <h5>Filter
                                    <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <h6>Category List</h6>
                                <hr>
                                <?php


                                $filter_query = "SELECT * FROM `filter_tags`";
                                $filter_query_run  = mysqli_query($link, $filter_query);

                                if (mysqli_num_rows($filter_query_run) > 0) {
                                    foreach ($filter_query_run as $filterlist) {
                                        $checked = [];
                                        if (isset($_GET['filters'])) {
                                            $checked = $_GET['filters'];
                                        }
                                ?>
                                        <div>
                                            <input type="checkbox" name="filters[]" value="<?= $filterlist['ID']; ?>" <?php if (in_array($filterlist['ID'], $checked)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> />
                                            <?php echo $filterlist['category_name']; ?>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "No Events Found";
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            $filedestination = "../global/uploads/subEventThumbnail/";
            if (isset($_GET['filters'])) {
                $filterchecked = [];
                $filterchecked = $_GET['filters'];
                foreach ($filterchecked as $filter_data) {
                    $filter_query_2 = "SELECT * FROM `event_details` WHERE CATEGORY IN ($filter_data)";
                    $filter_query_run_2 = mysqli_query($link, $filter_query_2);
                    if (mysqli_num_rows($filter_query_run_2) > 0) {
                        foreach ($filter_query_run_2 as $filter_data_2) :
            ?>
                            <div class="col-3 col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">

                                    <img class="img card-img-top" width="250px" height="200px" src="<?php
                                                                                                    if ($filter_data_2['THUMBNAIL']) {
                                                                                                        echo $filedestination . $filter_data_2['THUMBNAIL'];
                                                                                                    } else {
                                                                                                        echo 'images/placeholder.jpg';
                                                                                                    }
                                                                                                    ?>" alt="">

                                    <div class="card-footer bg-white">
                                        <h3><?php echo $filter_data_2['SUB_EVENT_NAME'] ?></h3>
                                        <p><?= date('d F Y', strtotime($filter_data_2['TIME'])); ?></p>
                                        <form action="joined_the_event.php" method="get">

                                            <input type="hidden" name="eventjoin" value=<?php echo $filter_data_2["ID"]; ?>>
                                            <button type="submit" class="btn btn-outline-primary btn-sm btn-block w-50">Join</button>
                                            <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-30">
                                                Read more
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        <?php
                        endforeach;
                    }
                }
            } else {
                $sql_all = "SELECT * FROM `event_details`";
                $sql_all_run = mysqli_query($link, $sql_all);
                if (mysqli_num_rows($sql_all_run) > 0) {
                    foreach ($sql_all_run as $sql_all_data) :
                        ?>
                        <div class="col-3 col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 p-0">
                                <img class="img card-img-top" width="250px" height="200px" src="<?php
                                                                                                if ($sql_all_data['THUMBNAIL']) {
                                                                                                    echo $filedestination . $sql_all_data['THUMBNAIL'];
                                                                                                } else {
                                                                                                    echo 'images/placeholder.jpg';
                                                                                                }
                                                                                                ?>" alt="">

                                <div class="card-footer bg-white">
                                    <h3><?php echo $sql_all_data['SUB_EVENT_NAME'] ?></h3>
                                    <p><?= date('d F Y', strtotime($sql_all_data['TIME'])); ?></p>
                                    <form action="joined_the_event.php" method="get">

                                        <input type="hidden" name="eventjoin" value=<?php echo $sql_all_data["ID"]; ?>>
                                        <button type="submit" class="btn btn-outline-primary btn-sm btn-block w-50">Join</button>
                                        <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-30">
                                            Read more
                                        </a>
                                        <a href="#" class="btn btn-outline-secondary btn-sm">
                                            <i class='bx bx-heart'></i>
                                        </a>
                                    </form>
                                </div>

                            </div>
                        </div>
            <?php
                    endforeach;
                } else {
                    echo "No Events Found";
                }
            }


            ?>



        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>