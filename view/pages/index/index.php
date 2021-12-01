<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./index.css">

    <title>Hotelugar | Bem-vindo</title>
</head>


<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-color" role="navigation">
        <div class="container-fluid mg-100">
            <a href="../index/index.php" class="navbar-brand">Hotelugar</a>

            <div class="d-flex">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a href="../index/index.php" class="nav-link active" aria-current="page">Início</a>
                        </li>

                        <li class="navbar-item">
                            <a href="../about/about.php" class="nav-link">Sobre</a>
                        </li>

                        <li class="navbar-item">
                            <a href="../contact/contact.php" class="nav-link">Contato</a>
                        </li>
                    </ul>
                </div>

                <button 
                    class="navbar-toggler"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    type="button"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Container principal -->
    <div class="main-container bg-primary-color">
        <h1>Encontre o melhor hotel para a sua viagem</h1>
        <p>Procure os hotéis por preço, classificação ou duração de sua estadia.</p>
        <a class="btn bg-primary-color" href="#popular-hotels">Procurar destinos</a>
    </div>

    <!-- Container sobreposto -->
    <div class="overflow-container">
        <div class="overflow-card">
            <img class="overflow-card-icon" src="../../images/icons/star.png">
            <p class="overflow-card-text">Garanta o melhor hotel para a sua viagem</p>
        </div>

        <div class="overflow-card">
            <img class="overflow-card-icon" src="../../images/icons/star.png">
            <p class="overflow-card-text">Os melhores preços e acomodações</p>
        </div>

        <div class="overflow-card">
            <img class="overflow-card-icon" src="../../images/icons/star.png">
            <p class="overflow-card-text">Atendimento VIP e especializado</p>
        </div>

        <div class="overflow-card">
            <img class="overflow-card-icon" src="../../images/icons/star.png">
            <p class="overflow-card-text">Sem burocracia, filas de espera ou tarifas escondidas</p>
        </div>
    </div>

    <!-- Destinos populares -->
    <div class="index-section popular-destinations-section" id="popular-destinations">
        <h1 class="section-title" id="popular-destinations-carousel">Destinos populares</h1>

        <div class="popular-destinations-list">
            <?php 

            include_once('../../../controller/controller.php');
            $destinationDAO->getAllDestinations($connection);

            ?>
        </div>
    </div>

    <!-- Hotéis em alta -->
    <div class="index-section popular-hotels-section" id="popular-hotels">
        <h1 class="section-title">Hotéis em alta</h1>

        <div class="popular-hotels-grid">
            <?php 

            include_once('../../../controller/controller.php');
            $hotelDAO->getAllHotels($connection);

            ?>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid bfooter">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2021 Hotelugar</p>

            <ul class="nav">
                <li class="nav-item">
                    <a href="../index/index.php" class="nav-link px-2 text-muted">Início</a>
                </li>

                <li class="nav-item">
                    <a href="../about/about.php" class="nav-link px-2 text-muted">Sobre</a>
                </li>

                <li class="nav-item">
                    <a href="../contact/contact.php" class="nav-link px-2 text-muted">Contato</a>
                </li>
            </ul>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 

    <script src="./index.js"></script>
</body>

</html>