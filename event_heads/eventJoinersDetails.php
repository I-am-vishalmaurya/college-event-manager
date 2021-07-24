<?php
$title = "Event Reports - Eventers";
$bodyColor = "bg-white";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">
    <div class="row">
        <h3 class="my-4 text-center fs-3 fw-bold h3 text-primary 600">
            List of Joiners
        </h3>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db/dbconfig.php';
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    $eventID = $_GET['buttoneventID'];
                    $sql = "SELECT * FROM `joined_events` WHERE EVENT_ID = $eventID";
                    $result = $link->query($sql);
                    $serial_count = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $serial_count += 1;
                ?>
                            <tr>
                                <th scope="row"><?php echo $serial_count ?> </th>
                                <td><?php echo $row['FIRST_NAME'] ?></td>
                                <td><?php echo $row['LAST_NAME'] ?></td>
                                <td><?php echo $row['EMAIL'] ?></td>
                            </tr>
                <?php
                        }
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