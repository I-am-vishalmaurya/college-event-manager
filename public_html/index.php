<?php
session_start(['cookie_lifetime' => 86400]);
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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include 'includes/ph_navbar.php';
    
    ?>
    <div class="container-fluid p-0">
        <section class="background__hero">
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,64L34.3,101.3C68.6,139,137,213,206,250.7C274.3,288,343,288,411,272C480,256,549,224,617,224C685.7,224,754,256,823,245.3C891.4,235,960,181,1029,144C1097.1,107,1166,85,1234,101.3C1302.9,117,1371,171,1406,197.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            </svg>
        </section>
        <div class="card hero__card p-3" style="max-width: 30rem;">

            <div class="card-body">
                <h4 class="hero-card-header text-white">GET READY!</h4>
                <p class="hero-card-text text-white">DISCOVER THE BEST EVENTS HAPPENING IN THE CITY</p>
            </div>
            <button class="btn btn-block btn-primary w-100" onclick="location.href='../joiners/pages/joiners_login.php'">Learn More</button>
        </div>
    </div>


    <!-- featured event -->
    <div class="container my-4">
        <div class="row">
            <div class="col-4">
                <h4 class="text-left">STAFF PICKS</h4>
                <h2>FEATURED - ROCK AND ROLL</h2>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio pariatur qui, laborum harum natus aspernatur maiores similique enim? Assumenda impedit similique nam doloribus dolorem cumque sint adipisci ex quo placeat?</P>
            </div>

            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <div class="card border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">No of stars and category</p>
                            </div>

                            <div class="card-footer bg-white">
                                <h3>Title</h3>
                                <p>Date and Place</p>
                                <button class="btn btn-block btn-primary" onclick="location.href='../joiners/pages/joiners_login.php'">Details and Join</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0">



                            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">No of stars and category</p>
                            </div>

                            <div class="card-footer bg-white">
                                <h3>Title</h3>
                                <p>Date and Place</p>
                                <button class="btn btn-block btn-primary">Details and Join</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- featured event -->
    <div class="container-fluid bg-light py-4">
        <div class="container my-5">
            <div class="row">
                <div class="col-4">
                    <h4 class="text-left my-3">STAFF PICKS</h4>
                    <h2>FEATURED - GAMESathon</h2>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio pariatur qui, laborum harum natus aspernatur maiores similique enim? Assumenda impedit similique nam doloribus dolorem cumque sint adipisci ex quo placeat?</P>
                </div>

                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <div class="card border-0">

                                <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">No of stars and category</p>
                                </div>

                                <div class="card-footer bg-white">
                                    <h3>Title</h3>
                                    <p>Date and Place</p>
                                    <button class="btn btn-block btn-primary">Details and Join</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">

                                <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">No of stars and category</p>
                                </div>

                                <div class="card-footer bg-white">
                                    <h3>Title</h3>
                                    <p>Date and Place</p>
                                    <button class="btn btn-block btn-primary">Details and Join</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <!-- Similar to joined evenet -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
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