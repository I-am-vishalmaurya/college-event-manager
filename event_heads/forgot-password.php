<?php
$bodyColor = 'bg-white';
$title = 'Forgot Password - Eventers';
include 'includes/header.php';
include 'includes/navbar.php';
require_once '../db/dbconfig.php';
?>

<div class="container">
    <div class="card border-0 my-5">
        <div class="row">
            <div class="col-12 my-4">
                <h3 class="text-center">Forgot Password</h3>
            </div>

            <div class="col-12">
                <form action="source/forgotPassword.php" method="post">
                    <div class="row mx-auto">
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm New Password</label>
                        <input type="password" class="form-control" name="newPasswordConfirm" placeholder="Confirm New Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" id = "btn-forgot-passoword-submit" class="btn btn-primary" value="Submit">
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include 'includes/footer.php';
?>