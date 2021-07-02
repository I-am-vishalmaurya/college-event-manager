<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';
include 'topnavbar.php';
?>

<div class="container-fluid">
    <?php echo $_SESSION['status']; ?>
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
                    <form action="source/eventaddcode.php" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="event_name" placeholder="Event Name" required>
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
                                <input type="text" class="form-control form-control-user" id= "dtttextbox" name="time" placeholder="Date & Time" required>
                                <script>
                                    var dtt = document.getElementById('dtttextbox')
                                    dtt.onfocus = function (event) {
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
                                <textarea class="form-control form-control-user" name="description" placeholder="Enter details about event" required  rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="file" name="thumbnail" class="form-control form-control-user" placeholder="Upload an photo">
                            </div>
                            <script>
                                // Add the following code if you want the name of the file appear on select
                                $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                            </script>
                        </div>
                        <button type="submit" name="registerbutton" class="btn btn-primary btn-user btn-block">
                            Post Event
                        </button>
                       
                    </form>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Events</h1>
    </div>
    <!-- Total No of events card -->
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card border-left-info rounded shadow h-100 pt-2 pb-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                                Total Events
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---x--- Total No of events card----x---- -->
        <!-- Total No of registred people in events -->
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary-text text-uppercase mb-2">
                                Total Registration
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                120
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -----x----- Total No of registred people in events-----x---- -->

    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">

            <button class="btn p-3 border-primary font-weight-bold h-100" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus" aria-hidden="true"> Add event</i></button>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <button class="btn p-3 border-primary font-weight-bold h-100"><i class="fa fa-search" aria-hidden="true"> Search event</i></button>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="showevent.php"><button class="btn p-3 border-primary font-weight-bold h-100"><i class="fa fa-plus" aria-hidden="true"> Show event</i></button></a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <button class="btn p-3 border-primary font-weight-bold h-100"><i class="fa fa-plus" aria-hidden="true"> Show event</i></button>
        </div>
        
    </div>
</div>

<?php
include 'includes/script.php';
include 'includes/footer.php';
?>