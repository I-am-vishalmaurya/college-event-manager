<?php
$title = "Report - Eventers";
$bodyColor = 'bg-white';
include 'includes/header.php';
include 'includes/navbar.php';
include '../global/functions/functions.php';
?>

<div class="container-fluid">
    <div class="row">
        <h3 class="my-4 text-center fs-3 fw-bold h3 text-primary 600">Event Report</h3>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Event name</th>
                    <th scope="col">Sub event name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Responses</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db/dbconfig.php';
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM `event_details` WHERE unique_email = '$email'";
                $result = mysqli_query($link, $sql);
                $serial_count = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $serial_count +=1;
                        
                ?>

                        <tr>
                            <th scope="row"><?php echo $serial_count?></th>
                            <td><?php echo $row['EVENT_NAME']; ?></td>
                            <td><?php echo $row['SUB_EVENT_NAME']; ?></td>
                            <td><?php echo date('d F Y', strtotime($row['TIME'])); ?></td>
                            <td><?php echo numberOfJoiners($row['ID']); ?></td>
                            <form action="eventJoinersDetails.php" method="get">
                            <td><button class="btn btn-block btn-outline-primary" name = "buttoneventID"value=<?php echo $row['ID'] ?> onclick="location.href='eventJoinersDetails.php'">View</button></td>
                            </form>
                        </tr>
                <?php
                    }
                    
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php

include 'includes/footer.php';
?>