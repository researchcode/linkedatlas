<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>LinkedAtlas</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />

    <script src="../js/leaflet-search.js"></script>

    <link rel="stylesheet" href="../css/leaflet-search.css" />
    <link rel="stylesheet" href="../css/custom.css" />

</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark info-color ">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_self" href="#">
                    <strong>LinkedAtlas </strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <?php

                if (isset($_SESSION['user_user'])) {



                ?>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="#patlasco">Map</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="#intro">Policy for use</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav d-flex flex-row">
                            <!-- Icons -->
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php
                } else {
                }
                ?>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div id="intro" class="bg-image vh-100 shadow-1-strong">
            <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
                <source class="h-100" src="https://mdbootstrap.com/img/video/animation-intro-min.mp4" type="video/mp4" />
            </video>
            <div class="mask" style="
            background: linear-gradient(
              45deg,
              rgba(29, 236, 197, 0.7),
              rgba(91, 14, 214, 0.7) 100%
            );
          ">
                <div class="container d-flex align-items-center justify-content-center text-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">LinkedAtlas - Linked Data Interactive Atlas using DBpedia</h1>
                        <h5 class="mb-4">Navitage on the map and get information from a location-based entity</h5>
                        <h5 class="mb-4">Entity: parks</h5>
                        <a class="btn btn-outline-light btn-lg m-2" href="#patlasco" role="button" rel="nofollow" target="_self">Go to the map</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->