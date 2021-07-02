<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'topnavbar.php';
?>
<div class="container mt-4">
    <div class="row">
        <?php
        include_once "db/dbconfig.php";
        $sql = "SELECT * FROM `event_details` ORDER BY ID DESC";
        $result = mysqli_query($link, $sql);
        //find number of record returns
        $nums_rows = mysqli_num_rows($result);
        if ($nums_rows > 0) {
            while ($row_data = mysqli_fetch_assoc($result)) {
                
                ?>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="img card-img-top" width="250px" height="200px" src="" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_data['SUB_EVENT_NAME']; ?></h5>
                            <p class="card-text">
                                <?php echo $row_data['DESCRIPTION']; ?>
                            </p>

                            <a href="#" class="btn btn-outline-primary btn-sm">
                                Card link
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="far fa-heart"></i></a>
                        </div>

                    </div>
                </div>

                <?php 
               
                echo "<br>";
            }
        }
        else{
            echo "<h2>No Event Found</h2>";
        }
        ?>
               

    </div>
</div>


<?php
    include 'includes/script.php';
    include 'includes/footer.php';
?>
