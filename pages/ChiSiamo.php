<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Siamo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: gray !important;
        }

        .card {
            margin-top: 20px !important;
            background-color: #1d1d1d !important;
        }

        .chiSiamo {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            color: white !important;
        }



        .jumb {
            background-image: url('https://i1.wp.com/www.comicsuniverse.it/wp-content/uploads/2016/08/suicide-squad-poster-4k.jpg?fit=1800%2C1012&ssl=1');
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

        .navbar {
            img {
                width: 160px;
            }
        }

        .card {
            img {
                width: 300px;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header></header>
    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-around">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/dff4c5d5-360c-4893-abb4-b13899c3f506.png" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav d-flex flex-row gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ChiSiamo.php">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Servizi.php">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Contatti.php">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <main class="mb-4">
        <div class="jumb">
            <h1 class="text-center text-white p-5">Chi Siamo</h1>
        </div>

        <div class="container">
            <div class="card">
                <div class="card-img-top text-center p-3">
                    <img src="../img/dff4c5d5-360c-4893-abb4-b13899c3f506.png" alt="Chi Siamo">
                </div>
                <div class="chiSiamo align-items-center p-3">
                    <h1>GhostFilms</h1>
                    <p><strong>GhostFilms è una piattaforma di streaming dedicata agli amanti del cinema. Offriamo una vasta selezione di film, dalle ultime uscite ai classici intramontabili, per soddisfare ogni gusto cinematografico. La nostra missione è portare il meglio del cinema direttamente a casa tua, con un'interfaccia intuitiva e un'esperienza di visione senza interruzioni. Unisciti a noi e scopri un mondo di emozioni, avventure e storie indimenticabili su GhostFilms</strong>.</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <nav class="navbar bg-dark justify-content-center">
            <p class="text-white m-0">© 2024 GhostFilms. Tutti i diritti riservati.</p>
        </nav>
    </footer>

</body>

</html>