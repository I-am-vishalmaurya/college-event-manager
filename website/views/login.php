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
            <h1>Login</h1>
            
            <form action="logincheck.php" class="signup" method="POST">
                <div class="details row-2">
                    <input type="email" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="details row-3">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                </div>
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Log in</button>
                </div>
            </form>
        </div>

    </div>
    <?php include 'C:\xampp\htdocs\event-manager\public_html\includes\footer.php'; ?>

</html>