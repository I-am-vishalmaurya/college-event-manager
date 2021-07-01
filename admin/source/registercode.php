<?php
include '../db/dbconfig.php';
include '../includes/header.php';

session_start();

$name = $email = $password = $confirmPassword = "";
$email_err = $confirmPasswordErr = $nameErr = $passwordErr = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty(trim($_POST['email']))) {
        $email_err = "Please Enter your email.";
        $_SESSION['email_error'] = $email_err;
    } else {
        $sql = "SELECT id from login_details where email = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            //setting parameter
            $param_email = trim($_POST['email']);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is alredy registered with us.";
?>
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <h4 class="alert-heading">Warning!</h4>
                        <p class="mb-0"><?php echo $email_err; ?></p>
                    </div>
        <?php
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "Oops Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }



    //validating passsword
    if (empty(trim($_POST['password']))) {
        $passwordErr = "Please Enter your Password";
        $_SESSION['password_error'] = $passwordErr;
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $passwordErr = "Password Length should be greater than 6 characters.";
        ?>
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0"><?php echo $passwordErr; ?></p>
        </div>
<?php
    } else {
        $password = trim($_POST['password']);
    }

    //validating confirm password
    $confirmPassword = trim($_POST['confirm_password']);
    if (empty(trim($confirmPassword))) {
        $confirmPasswordErr = "Please enter confirm password";
        ?>
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0"><?php echo $passwordErr; ?></p>
        </div>
        <?php
    } else {

        if (empty($passwordErr) && ($password != $confirmPassword)) {
            $confirmPasswordErr = "Password does not match.";
            ?>
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">Warning!</h4>
                <p class="mb-0"><?php echo $confirmPasswordErr; ?></p>
            </div>
            <?php
        }
    }

    //checking input errors
    if (empty($email_err) && empty($passwordErr) && empty($confirmPasswordErr)) {
        $sql = "INSERT INTO login_details (first_name, last_name, email, password) VALUES (?,?,?,?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_first_name, $param_last_name, $param_email, $param_password);
            $param_first_name = trim($_POST['first_name']);
            $param_last_name = trim($_POST['last_name']);
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['status'] = "Registration Successful";
                header("location: index.php");
                die();
            } else {
                $_SESSION['status'] = "Registration unsuccessful";
                echo "Oops something went wrong. please try again after some time.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}

include '../includes/script.php';
?>