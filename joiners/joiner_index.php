<?php
session_start();
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    
</head>

<body>
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
                        <a class="nav-link" href="../joiners/pages/all_events.php"><i class="fas fa-calendar-alt"></i> Events</a>
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
                            <a class="dropdown-item dropdown-item-or" ><?php echo "Hello ".$_SESSION['first_name']; ?></a>
                            <a class="dropdown-item dropdown-item-or" href="pages/dashboard.php">Dashboard</a>
                            <a class="dropdown-item dropdown-item-or" href="#">Something</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item-or" href="source/logout.php">Log out</a>

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
    <!-- body for the illustration -->
    <div class="container-fluid">
        <div class="row sm-h-200">
            <img src="assets/fresh.png" alt="main body image with text">
        </div>
    </div>

    <!-- featured event -->
    <div class="container-fluid">
        <div class="row gx-0">
            <h2 class="text-center featured-event-text mb-3">Featured events</h2>
            <div class="row mt-2">
                <div class="col col-lg-3 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>

                </div>
                <div class="col col-lg-3 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-sm-6 col-12 pr-0">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <a href="#" class="text-center">More event...</a>
            </div>
        </div>
    </div>

    <!-- Popular Event -->
    <div class="container-fluid">
        <div class="row gx-0">
            <h2 class="text-center featured-event-text mb-3">Popular events</h2>
            <div class="row mt-2">
                <div class="col col-lg-3 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>

                </div>
                <div class="col col-lg-3 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-sm-6 col-12 pr-0">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <a href="#" class="text-center">More event...</a>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <!-- Similar to joined evenet -->

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