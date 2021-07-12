<nav class="navbar navbar-expand-lg navbar-light bg-white shadow mb-4 p-2 static-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
            <lottie-player src="https://assets7.lottiefiles.com/temporary_files/PH5YkW.json" background="transparent" speed="1" style="width: 70px; height: 35px;" class="d-inline-block align-text-top mt-0" loop autoplay></lottie-player>
            <strong>Eventers</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse show" id="navbarColor01">
            <ul class="navbar-nav" style="margin-left: auto; margin-right:5%">
                <li class="nav-item">
                    <form>
                        <div class="input-group ">
                            <input type="txt" class="form-control border-0 border-circle" name="search" placeholder="Search event...">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>&nbsp;
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../public_html/index.php"><i class="fas fa-home"></i> Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public_html/pages/events.php"><i class="fas fa-calendar-alt"></i> Events</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../public_html/pages/about-us.php"><i class="fas fa-info"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public_html/pages/contact-us.php"><i class="fas fa-id-card"></i> Contact us</a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle user-account-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> Account</a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <?php if ($_SESSION["loggedin"]) {
                            ?>
                            <a class="dropdown-item dropdown-item-or" href="../admin/login.php"><?php echo $_SESSION['first_name']; ?></a>
                            <a class="dropdown-item dropdown-item-or" href="../admin/register.php">Profile</a>
                            <a class="dropdown-item dropdown-item-or" href="#">Something</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item dropdown-item-or" href="../pages/logout.php">Log out</a>
                            <?php
                        } else {
                            ?>
                            <a class="dropdown-item dropdown-item-or" href="../../joiners/pages/joiners_login.php">Log in</a>
                            <a class="dropdown-item dropdown-item-or" href="../../admin/register.php">For Event Heads</a>
                            <a class="dropdown-item dropdown-item-or" href="#">Something</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item dropdown-item-or" href="#"></a>
                            <?php
                        } ?>

                    </div>
                    <style>
                        .user-account-toggle::after {
                            content: none;
                        }
                    </style>

                </li>
            </ul>



        </div>
    </div>
</nav>