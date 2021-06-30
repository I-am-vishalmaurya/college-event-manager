<?php
$title = 'Test Bootstrap';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/footer.php';

?>

<?php
    include_once "../config/config.php";
    $sql = "SELECT * FROM `event_details` ORDER BY ID DESC";
    $result = mysqli_query($link, $sql);
    //find number of record returns
    $nums_rows = mysqli_num_rows($result);
    if ($nums_rows > 0) {
        while ($row_data = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="column">
                    Hello
                </div>
            </div>
        </div>
        <?php
        }
    }
?>