<?php

require_once './models/Genere.php';
require_once './Traits/Ratable.php';
require_once './models/Movie.php';
require_once './db.php';


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GhostFilms</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: gray !important;
        }

        .jumb {
            background-image: url('https://www.jamovie.it/wp-content/uploads/2022/08/01-1.jpg');
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5) !important;
            background-size: cover;
            background-position: center;
            height: 400px;

            h1 {
                color: white !important;
                font-size: 3rem !important;
                font-weight: bold !important;
                text-shadow:
                    0 0 20px rgba(255, 215, 0, 0.8),
                    0 0 40px rgba(255, 165, 0, 0.6),
                    3px 3px 0px rgba(0, 0, 0, 0.8) !important;
                -webkit-text-stroke: 1px rgba(255, 215, 0, 0.5) !important;
                letter-spacing: 2px !important;
                transform: scaleY(1.1) !important;
                filter: drop-shadow(0 0 10px rgba(255, 165, 0, 0.6)) !important;
            }
        }

        li {
            a {
                color: white !important;

                &:hover {
                    color: gold !important;
                    text-decoration: underline !important;
                }
            }
        }

        img {
            width: 160px;
            height: 40px;
            object-fit: cover;
        }

        .card {
            background-color: #1d1c1c !important;
            color: white !important;
            border: none;
            padding: 0 !important;
            box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.4) !important;
            width: 400px !important;

            &:hover {
                transform: translateY(-5px) !important;
                box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.6) !important;
            }


            p {
                text-transform: uppercase;
            }

            img {
                border-top-left-radius: 10px !important;
                border-top-right-radius: 10px !important;
                width: 100%;
                height: 554px;
                object-fit: cover;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid justify-content-around">
                <a class="navbar-brand" href="#">
                    <img src="./img/dff4c5d5-360c-4893-abb4-b13899c3f506.png" alt="Logo" class="d-inline-block align-text-top">
                </a>
                <div class="navbar" id="navbarNav">
                    <ul class="navbar-nav d-flex flex-row gap-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./pages/ChiSiamo.php">Chi Siamo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/Servizi.php">Servizi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/Contatti.php">Contatti</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="jumb">
            <h1 class="text-center text-white p-5">Benvenuti su GhostFilms</h1>
        </div>
        <div class="container justify-content-center d-flex flex-wrap gap-4 py-5">
            <?php foreach ($movies as $movie) { ?>
                <div class="card m-2">
                    <div class="card-img-top">
                        <img src="<?php echo $movie->cover; ?>" alt="<?php echo $movie->title; ?>">
                    </div>
                    <div class="align-items-center p-3">
                        <h1><?php echo $movie->title; ?></h1>
                        <p><?php echo $movie->hours; ?> ore</p>
                        <p><?php echo $movie->description; ?></p>
                        <p>Valutazione: <?php echo $movie->rating; ?></p>
                        <p>Genere: <?php echo $movie->getGenere(); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    <footer>
        <nav class="navbar bg-dark justify-content-center">
            <p class="text-white m-0">© 2024 GhostFilms. Tutti i diritti riservati.</p>
        </nav>
    </footer>
</body>

</html>