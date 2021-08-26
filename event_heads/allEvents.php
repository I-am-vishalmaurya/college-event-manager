<?php
session_start();
require '../db/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventers</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300;400;700&display=swap" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/indexStyle.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow p-2 static-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allEvents.php"><i class="fas fa-calendar-alt"></i> Events</a>
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
                            <a class="dropdown-item dropdown-item-or"><?php echo "Hello " . $_SESSION['first_name']; ?></a>
                            <a class="dropdown-item dropdown-item-or" href="dashboard.php">Dashboard</a>
                            <a class="dropdown-item dropdown-item-or" href="#">Something</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item dropdown-item-or" href="logout.php">Log out</a>

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

    <div class="container mt-3">

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <form action="" method="GET">
                            <div class="card border-0">
                                <div class="card-header">
                                    <h5>Filter
                                        <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <h6>Category List</h6>
                                    <hr>
                                    <?php


                                    $filter_query = "SELECT * FROM `filter_tags`";
                                    $filter_query_run  = mysqli_query($link, $filter_query);

                                    if (mysqli_num_rows($filter_query_run) > 0) {
                                        foreach ($filter_query_run as $filterlist) {
                                            $checked = [];
                                            if (isset($_GET['filters'])) {
                                                $checked = $_GET['filters'];
                                            }
                                    ?>
                                            <div>
                                                <input type="checkbox" name="filters[]" value="<?= $filterlist['ID']; ?>" <?php if (in_array($filterlist['ID'], $checked)) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> />
                                                <?php echo $filterlist['category_name']; ?>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "No Events Found";
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                $filedestination = "../global/uploads/subEventThumbnail/";
                if (isset($_GET['filters'])) {
                    $filterchecked = [];
                    $filterchecked = $_GET['filters'];
                    foreach ($filterchecked as $filter_data) {
                        $filter_query_2 = "SELECT * FROM `event_details` WHERE CATEGORY IN ($filter_data)";
                        $filter_query_run_2 = mysqli_query($link, $filter_query_2);
                        if (mysqli_num_rows($filter_query_run_2) > 0) {
                            foreach ($filter_query_run_2 as $filter_data_2) :
                ?>
                                <div class="col-3 col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">

                                        <img class="img card-img-top" width="250px" height="200px" src="<?php
                                                                                                        if ($filter_data_2['THUMBNAIL']) {
                                                                                                            echo $filedestination . $filter_data_2['THUMBNAIL'];
                                                                                                        } else {
                                                                                                            echo 'images/placeholder.jpg';
                                                                                                        }
                                                                                                        ?>" alt="">

                                        <div class="card-footer bg-white">
                                            <h3><?php echo $filter_data_2['SUB_EVENT_NAME'] ?></h3>
                                            <p><?= date('d F Y', strtotime($filter_data_2['TIME'])); ?></p>
                                            <form action="joined_the_event.php" method="get">

                                                <input type="hidden" name="eventjoin" value=<?php echo $filter_data_2["ID"]; ?>>
                                                <button type="submit" class="btn btn-outline-primary btn-sm btn-block w-50">Join</button>
                                                <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-30">
                                                    Read more
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                                    <i class='bx bx-heart'></i>
                                                </a>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                            <?php
                            endforeach;
                        }
                    }
                } else {
                    $sql_all = "SELECT * FROM `event_details`";
                    $sql_all_run = mysqli_query($link, $sql_all);
                    if (mysqli_num_rows($sql_all_run) > 0) {
                        foreach ($sql_all_run as $sql_all_data) :
                            ?>
                            <div class="col-3 col-lg-4 col-md-6 mb-4">
                                <div class="card h-100 p-0">
                                    <img class="img card-img-top" width="250px" height="200px" src="<?php
                                                                                                    if ($sql_all_data['THUMBNAIL']) {
                                                                                                        echo $filedestination . $sql_all_data['THUMBNAIL'];
                                                                                                    } else {
                                                                                                        echo 'images/placeholder.jpg';
                                                                                                    }
                                                                                                    ?>" alt="">

                                    <div class="card-footer bg-white">
                                        <h3><?php echo $sql_all_data['SUB_EVENT_NAME'] ?></h3>
                                        <p><?= date('d F Y', strtotime($sql_all_data['TIME'])); ?></p>
                                        <form action="joined_the_event.php" method="get">

                                            <input type="hidden" name="eventjoin" value=<?php echo $sql_all_data["ID"]; ?>>
                                            <button type="submit" class="btn btn-outline-primary btn-sm btn-block w-50">Join</button>
                                            <a href="joined-event.php" class="btn btn-outline-primary btn-sm btn-block w-30">
                                                Read more
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </form>
                                    </div>

                                </div>
                            </div>
                <?php
                        endforeach;
                    } else {
                        echo "No Events Found";
                    }
                }


                ?>



            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">

                <span>Made with ❤️ by Vishal Maurya</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>