<?php 
    $title = "Forgot Password";
    include '../includes/joiners_header.php';
    include '../includes/joiners_navbar.php';

?>

<div class="container">
    <div class="card border-0 my-5">
        <div class="row">
            <div class="col-12 my-4">
                <h3 class="text-center">Forgot Password</h3>
            </div>

            <div class="col-12">
                <form action="../source/forgotPassword.php" method="post">
                    <div class="row mx-auto">
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group my-4">
                        <label for="password">Confirm New Password</label>
                        <input type="password" class="form-control" name="newPasswordConfirm" placeholder="Confirm New Password">
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" id = "btn-forgot-passoword-submit" class="btn btn-primary" value="Submit">
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    include '../includes/joiners_footer.php';
?>