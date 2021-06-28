<?php 
    include_once 'C:\xampp\htdocs\event-manager\config\config.php';

    $name = $email = $password = $confirmPassword = "";
    $email_err = $confirmPasswordErr = $nameErr = $passwordErr = "";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty(trim($_POST['email']))){
            $email_err = "Please Enter your email.";
            echo $email_err;
        }
        else {
            $sql = "SELECT id from login_details where email = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                //setting parameter
                $param_email = trim($_POST['email']);
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_err = "This email is alredy registered with us.";
                        echo $email_err;
                    }
                    else{
                        $email = trim($_POST['email']);
                    }
                }
                else{
                    echo "Oops Something went wrong. Please try again later.";
                }
    
                mysqli_stmt_close($stmt);
            }
        }

        

        //validating passsword
        if(empty(trim($_POST['password']))){
            $passwordErr = "Please Enter your Password";
            echo $passwordErr;
        }
        elseif(strlen(trim($_POST['password'])) < 6){
            $passwordErr = "Password Length should be greater than 6 characters.";
            echo $passwordErr;
        }
        else{
            $password = trim($_POST['password']);
        }

        //validating confirm password
        $confirmPassword = trim($_POST['confirm_password']);
        if(empty(trim($confirmPassword))){
             $confirmPasswordErr = "Please enter confirm password";
             echo $confirmPassword;
        }
        else{
            
            if(empty($passwordErr) && ($password != $confirmPassword)){
                $confirmPasswordErr = "Password does not match.";
                echo $confirmPassword;
            }
        }

        //checking input errors
        if(empty($email_err) && empty($passwordErr) && empty($confirmPasswordErr)){
            $sql = "INSERT INTO login_details (name, email, password) VALUES (?,?,?)";
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sss", $param_name,$param_email, $param_password);
                $param_name = trim($_POST['name']);
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                if(mysqli_stmt_execute($stmt)){
                    header("location: login.php");
                    die();
                }
                else{
                    echo "Oops something went wrong. please try again after some time.";
                }

                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - College event manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container-sm">
        <div class="main">
            <h1>Join Eventers</h1>
            <p>Sign up to participate in events.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signup" method="POST">
                <div class="details row-1 name">
                    <input type="text" name="name" placeholder="Enter your full name" autocomplete="off" required>
                    <span class="invalid-feedback"><?php echo $nameErr; ?>
                </div>

                <div class="details row-2">
                    <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                    <span class="invalid-feedback"><?php echo $email_err; ?>
                </div>
                <div class="details row-3">
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                    <span class="invalid-feedback"><?php echo $passwordErr; ?>
                </div>
                <div class="details row-4">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="off" required>
                    <span class="invalid-feedback"><?php echo $confirmPasswordErr; ?>
                </div>
                <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </form>
        </div>

    </div>
    <?php include 'C:\xampp\htdocs\event-manager\public_html\includes\footer.php'; ?>

</html>