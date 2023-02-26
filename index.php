<?php

include "about.php";
include "img.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #1fa8a1">
        <div class="container">
            <a class="navbar-brand" href="#">My<span>Portofolio</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galery">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section Start -->
    <section class="hero text-center">
        <img src="img/gm2.jpg" alt="#" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4 "><?= $name ?></h1>
        <p class="lead fw-bold">Student | Mente Gits id</p>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#96e9e5" fill-opacity="1" d="M0,288L0,64L42.4,64L42.4,224L84.7,224L84.7,224L127.1,224L127.1,128L169.4,128L169.4,288L211.8,288L211.8,288L254.1,288L254.1,192L296.5,192L296.5,256L338.8,256L338.8,320L381.2,320L381.2,192L423.5,192L423.5,64L465.9,64L465.9,256L508.2,256L508.2,160L550.6,160L550.6,224L592.9,224L592.9,192L635.3,192L635.3,288L677.6,288L677.6,192L720,192L720,192L762.4,192L762.4,32L804.7,32L804.7,64L847.1,64L847.1,128L889.4,128L889.4,128L931.8,128L931.8,224L974.1,224L974.1,256L1016.5,256L1016.5,64L1058.8,64L1058.8,224L1101.2,224L1101.2,288L1143.5,288L1143.5,192L1185.9,192L1185.9,32L1228.2,32L1228.2,128L1270.6,128L1270.6,256L1312.9,256L1312.9,224L1355.3,224L1355.3,224L1397.6,224L1397.6,160L1440,160L1440,0L1397.6,0L1397.6,0L1355.3,0L1355.3,0L1312.9,0L1312.9,0L1270.6,0L1270.6,0L1228.2,0L1228.2,0L1185.9,0L1185.9,0L1143.5,0L1143.5,0L1101.2,0L1101.2,0L1058.8,0L1058.8,0L1016.5,0L1016.5,0L974.1,0L974.1,0L931.8,0L931.8,0L889.4,0L889.4,0L847.1,0L847.1,0L804.7,0L804.7,0L762.4,0L762.4,0L720,0L720,0L677.6,0L677.6,0L635.3,0L635.3,0L592.9,0L592.9,0L550.6,0L550.6,0L508.2,0L508.2,0L465.9,0L465.9,0L423.5,0L423.5,0L381.2,0L381.2,0L338.8,0L338.8,0L296.5,0L296.5,0L254.1,0L254.1,0L211.8,0L211.8,0L169.4,0L169.4,0L127.1,0L127.1,0L84.7,0L84.7,0L42.4,0L42.4,0L0,0L0,0Z"></path>
    </svg>

    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4 mb-3">
                    <p><?= $about1 ?></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><?= $about1 ?></p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#96e9e5" fill-opacity="1" d="M0,224L0,32L57.6,32L57.6,128L115.2,128L115.2,192L172.8,192L172.8,224L230.4,224L230.4,160L288,160L288,288L345.6,288L345.6,32L403.2,32L403.2,32L460.8,32L460.8,128L518.4,128L518.4,0L576,0L576,192L633.6,192L633.6,160L691.2,160L691.2,96L748.8,96L748.8,288L806.4,288L806.4,32L864,32L864,256L921.6,256L921.6,256L979.2,256L979.2,64L1036.8,64L1036.8,64L1094.4,64L1094.4,64L1152,64L1152,288L1209.6,288L1209.6,0L1267.2,0L1267.2,32L1324.8,32L1324.8,0L1382.4,0L1382.4,288L1440,288L1440,320L1382.4,320L1382.4,320L1324.8,320L1324.8,320L1267.2,320L1267.2,320L1209.6,320L1209.6,320L1152,320L1152,320L1094.4,320L1094.4,320L1036.8,320L1036.8,320L979.2,320L979.2,320L921.6,320L921.6,320L864,320L864,320L806.4,320L806.4,320L748.8,320L748.8,320L691.2,320L691.2,320L633.6,320L633.6,320L576,320L576,320L518.4,320L518.4,320L460.8,320L460.8,320L403.2,320L403.2,320L345.6,320L345.6,320L288,320L288,320L230.4,320L230.4,320L172.8,320L172.8,320L115.2,320L115.2,320L57.6,320L57.6,320L0,320L0,320Z"></path>
        </svg>
    </section>
    <!-- About Section End -->

    <!-- Galery Start -->
    <section id="galery">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Galery</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/g1.jpg" class="card-img-top" alt="img">
                            <div class="card-body">
                                <p class="card-text"><?= $g1 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/g2.png" class="card-img-top" alt="img">
                            <div class="card-body">
                                <p class="card-text"><?= $g2 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/g3.jpg" class="card-img-top" alt="img">
                            <div class="card-body">
                                <p class="card-text"><?= $g3 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/g4.jpg" class="card-img-top" alt="img">
                            <div class="card-body">
                                <p class="card-text"><?= $g4 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/g5.jpg" class="card-img-top" alt="img">
                            <div class="card-body">
                                <p class="card-text"><?= $g5 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/g6.jpg" class="card-img-top" alt="img">
                            <div class="card-body">
                                <p class="card-text"><?= $g6 ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#96e9e5" fill-opacity="1" d="M0,0L0,224L57.6,224L57.6,192L115.2,192L115.2,256L172.8,256L172.8,128L230.4,128L230.4,96L288,96L288,32L345.6,32L345.6,224L403.2,224L403.2,128L460.8,128L460.8,288L518.4,288L518.4,96L576,96L576,288L633.6,288L633.6,160L691.2,160L691.2,96L748.8,96L748.8,224L806.4,224L806.4,128L864,128L864,192L921.6,192L921.6,96L979.2,96L979.2,256L1036.8,256L1036.8,160L1094.4,160L1094.4,288L1152,288L1152,96L1209.6,96L1209.6,256L1267.2,256L1267.2,160L1324.8,160L1324.8,256L1382.4,256L1382.4,224L1440,224L1440,0L1382.4,0L1382.4,0L1324.8,0L1324.8,0L1267.2,0L1267.2,0L1209.6,0L1209.6,0L1152,0L1152,0L1094.4,0L1094.4,0L1036.8,0L1036.8,0L979.2,0L979.2,0L921.6,0L921.6,0L864,0L864,0L806.4,0L806.4,0L748.8,0L748.8,0L691.2,0L691.2,0L633.6,0L633.6,0L576,0L576,0L518.4,0L518.4,0L460.8,0L460.8,0L403.2,0L403.2,0L345.6,0L345.6,0L288,0L288,0L230.4,0L230.4,0L172.8,0L172.8,0L115.2,0L115.2,0L57.6,0L57.6,0L0,0L0,0Z"></path>
    </svg>
    <!-- Galery End -->

    <!-- contact  -->
    <section id="contact">
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center">
                    <h2>Contact Me</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                                <textarea class="form-control" id="textarea" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1fa8a1" fill-opacity="1" d="M0,224L0,96L102.9,96L102.9,64L205.7,64L205.7,256L308.6,256L308.6,64L411.4,64L411.4,128L514.3,128L514.3,256L617.1,256L617.1,96L720,96L720,192L822.9,192L822.9,192L925.7,192L925.7,0L1028.6,0L1028.6,160L1131.4,160L1131.4,160L1234.3,160L1234.3,288L1337.1,288L1337.1,288L1440,288L1440,320L1337.1,320L1337.1,320L1234.3,320L1234.3,320L1131.4,320L1131.4,320L1028.6,320L1028.6,320L925.7,320L925.7,320L822.9,320L822.9,320L720,320L720,320L617.1,320L617.1,320L514.3,320L514.3,320L411.4,320L411.4,320L308.6,320L308.6,320L205.7,320L205.7,320L102.9,320L102.9,320L0,320L0,320Z"></path>
    </svg>
    <!-- contact end -->

    <!-- footer -->
    <footer class="footer text-white text-center pb-2">
        <p>Created with <i class="bi bi-laptop"></i> by <a href="https://www.instagram.com/g_mauul/" class="text-white fw-bold text-decoration-none">Gilang Maulana Ramadhani</a></p>
    </footer>
    <!-- end footer -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>