<?php
$title = 'Profile - Eventers';
$bodyColor = 'bg-light';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<?php
$email = $_SESSION['email'];
include 'db/dbconfig.php';
$sql = "SELECT * FROM `student_login` WHERE EMAIL = '$email'";
$result = mysqli_query($link, $sql);
$nums_rows = mysqli_num_rows($result);
if ($nums_rows > 0) {
    if ($data = mysqli_fetch_assoc($result)) {
?>
        <div class="container-fluid">
            <div class="col-8 mt-5 mx-auto ">
                <div class="row mx-auto">
                    <div class="update__profile__pic mb-4">
                        <img src="img/profile_placeholder.png" alt="" class="account__image mx-auto" style=" cursor: pointer;">
                        <div class="image__placeholder">
                            <label class="-label" for="file">
                                <i class='bx bxs-camera'></i>
                                <span>Change Image</span>
                            </label>
                            <input id="file" type="file" onchange="loadFile(event)" style="display: none;" />
                        </div>
                    </div>
                </div>
                <form action="#" class="user" method="get">
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label for="staticFname" class="col-sm-2 col-md-4 col-form-label">First name</label>
                            <input type="text" class="form-control form-control-user bg-white" readonly="" name="first_name" placeholder="First Name" value=<?php echo $data['FIRST_NAME']; ?>>
                        </div>
                        <div class="col-sm-6">
                            <label for="staticLname" class="col-sm-2 col-md-4 col-form-label">Last name</label>
                            <input type="text" class="form-control form-control-user bg-white" readonly="" name="last_name" placeholder="Last Name" value=<?php echo $data['LAST_NAME']; ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-md-4 col-form-label">Email</label>
                        <input type="email" class="form-control form-control-user bg-white" readonly="" name="email" placeholder="Email" value=<?php echo $data['EMAIL']; ?>>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label for="staticdob" class="col-sm-4 col-form-label">Date of birth</label>
                            <input type="text" class="form-control form-control-user" name="date_of_birth" placeholder="DOB" value="31 December 2000">
                        </div>
                        <div class="col-sm-6">
                            <label for="staticdob" class="col-sm-4 col-form-label">College Name</label>
                            <input type="text" class="form-control form-control-user" name="College" placeholder="DOB" value="MCC">
                        </div>
                    </div>
                    <div class="row form-group mb-4">
                        <div class="form-group col-md-6">
                            <label for="cityName" class="col-sm-4 col-form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="stateName" class="col-sm-4 col-form-label">State</label>
                            <input type="text" class="form-control" id="inputState" value="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="pinCode" class="col-sm-2 col-form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip" value="">

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col"><button type="submit" class="btn btn-success w-100">Update the account</button></div>
                        <div class="col"><button type="submit" class="btn btn-warning w-100">Password</button></div>
                        <div class="col"><button type="submit" class="btn btn-danger w-100">Delete account</button></div>
                    </div>
                </form>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-2 col-sm-12 col-md-12 mt-4 update__profile__pic text-center">
                    <img src="../assets/profile_placeholder.png" alt="" class="account__image">
                    <div class="image__placeholder">
                        <label class="-label" for="file">
                            <i class='bx bxs-camera'></i>
                            <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)" style="display: none;" />
                    </div>
            </div>
        </div> -->

        </div>
<?php
    }
}
?>


<?php

include 'includes/footer.php';
?>