<?php
include 'includes/header.php';
?>
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

                        <form action="source/registercode.php" class="user" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="first_name" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group my-2">

                                <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" id="inputPassword5" name="password" class="form-control form-control-user" aria-describedby="passwordHelpBlock" placeholder="Enter Password">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Your password must be 8-20 characters long.
                                    </small>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="confirm_password" aria-describedby="cpasswordHelpBlock" placeholder="Repeat Password">
                                    <small id="cpasswordHelpBlock" class="form-text text-muted">
                                        Enter same password.
                                    </small>
                                </div>
                            </div>
                            <button type="submit" name="registerbutton" class="btn btn-primary btn-user btn-block my-2 w-100">
                                Register Account
                            </button>
                            <hr>
                            <div class="row text-center">
                                <div class="col-6">
                                    <a href="index.html" class="btn btn-google btn-user btn-block w-40">
                                        <i class='bx bxl-google'></i> Register with Google
                                    </a>
                                </div>
                                <div class="col-6">
                                <a href="index.html" class="btn btn-facebook btn-user btn-block w-40">
                                <i class='bx bxl-facebook' ></i> Register with Facebook
                                </a>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.php">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>