<?php
$title = "Manage events - Eventers";
$bodyColor = "bg-white";
include 'includes/header.php';
include 'includes/navbar.php';

?>

<!-- Checking the url and getting the validation alerts -->
<?php 
    $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
    "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . 
    $_SERVER['REQUEST_URI'];
    $url = substr($currentURL, strrpos($currentURL, '?' ) + 1);
    if($url == "eventAddedSuccessfully"){
        echo '<div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close close" data-dismiss="alert"></button>
        <strong>Your Event is live now.</strong> Add sub event for your event here.
      </div>';
    }

?>


<div class="container-fluid  p-4">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row border-0">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select name="event_name" class="form-select" placeholder="Select event name" id="eventNameDD">
                                    <?php
                                    require '../db/dbconfig.php';
                                    $email = $_SESSION['email'];
                                    $sqlEventNameDD = "SELECT event_name FROM events_name WHERE HOSTED_BY = '$email'";
                                    $result = mysqli_query($link, $sqlEventNameDD);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?php echo $row['event_name']; ?>"><?php echo $row['event_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="sub_event_name" placeholder="Sub-event Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="college_name" placeholder="College Name">

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="place" placeholder="City" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="dtttextbox" name="time" placeholder="Date & Time" required>
                                <script>
                                    var dtt = document.getElementById('dtttextbox')
                                    dtt.onfocus = function(event) {
                                        this.type = 'datetime-local';
                                        this.focus();
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" name="head_name" class="form-control form-control-user" placeholder="Event head name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <textarea class="form-control form-control-user" name="description" placeholder="Enter details about event" required rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <select name="category" class="form-select" placeholder="Choose Category">
                                    <option value="Choose category" selected disabled>Choose the category</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Sports">Outdoor activity</option>
                                    <option value="Indoor sports">Indoor sports</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Entertainment">Quiz games</option>
                                    <option value="Games">Games</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="formFile2" class="form-label">Thumbnail for sub-event</label>
                                <input class="form-control" name="subEventThumbnail" type="file" id="formFile2">
                            </div>
                        </div>

                        <button type="submit" id="post_event_btn" name="post-event-button" class="btn btn-primary btn-user btn-block w-100">
                            Post Event
                        </button>

                    </form>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="text-start my-2">
            <h3 class="h3 text-gray-700 text-bold">Manage subevent</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas molestias cupiditate minus alias sed qui nemo! Maiores animi officia possimus enim? Dignissimos magnam molestias porro, facere dolorum dolorem doloribus mollitia.</p>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <button class="btn p-3 bg-white font-weight-bold h-100 add-event-button w-100" data-toggle="modal" data-target="#exampleModalCenter"><i class='bx bx-plus'> Add event</i></button>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="showevent.php"><button class="btn p-3 bg-white font-weight-bold h-100 add-event-button w-100"><i class='bx bx-plus'> Show event</i></button></a>
        </div>

    </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $event_name = $sub_event_name = $college_name = $place = $time = $head_name = $description = '';
    $event_name = mysqli_real_escape_string($link, $_POST['event_name']);
    $sub_event_name = mysqli_real_escape_string($link, $_POST['sub_event_name']);
    $college_name = mysqli_real_escape_string($link, $_POST['college_name']);
    $place = mysqli_real_escape_string($link, $_POST['place']);
    $time = ($_POST['time']);
    $head_name = mysqli_real_escape_string($link, $_POST['head_name']);
    $description = mysqli_real_escape_string($link, $_POST['description']);
    $email =  $_SESSION["email"];
    //Code for Uploading the subevent thumbnail
    $file = $_FILES['subEventThumbnail'];
    $filename = $_FILES['subEventThumbnail']['name'];
    $tempname = $_FILES['subEventThumbnail']['tmp_name'];
    $fileSize = $_FILES['subEventThumbnail']['size'];
    $fileError = $_FILES['subEventThumbnail']['error'];
    $filetype = $_FILES['subEventThumbnail']['type'];

    $fileExtension = explode(".", $filename);
    $fileActualExtension = strtolower(end($fileExtension));
    $allowedFileTypes = array("jpg", "jpeg", "png");
    if (in_array($fileActualExtension, $allowedFileTypes)) {
        if ($fileError === 0) {
            if ($fileSize <= 5242880) {
                $newfileName = uniqid('', true) . "." . $fileActualExtension;
                $fileDestination = 'uploads/subEventThumbnail/' . $newfileName;
                (move_uploaded_file($tempname, $fileDestination));
            } else {
                echo "File size is too big.";
            }
        } else {
            echo "Error: Uploading the file";
        }
    } else {
        echo "Invalid File Type";
    }
    //End of Uploading the thumbnail


    if ($event_name == $sub_event_name) {
        $_SESSION['status'] = 'Event and sub event name should be different.';
    } else {

        $sql = "INSERT INTO `event_details` (`EVENT_NAME`, `SUB_EVENT_NAME`,`unique_email`, `COLLEGE_NAME`, `PLACE`, `TIME`, `EVENT_HEAD_NAME`, `DESCRIPTION`, `THUMBNAIL`) VALUES (?,?,?,?,?,?,?,?,?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssssss", $event_name, $sub_event_name, $email, $college_name, $place, $time, $head_name, $description, $newfileName);
        }

        if ($bp = mysqli_stmt_execute($stmt)) {

            echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert"></button>
                <strong>Well done!</strong> You added event successfully.
                </div>';
            
        } else {
          
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>

<?php
include 'includes/footer.php';
?>