<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./destination.css">

    <title>Hotelugar</title>
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
                            <a href="../index/index.php" class="nav-link" aria-current="page">Início</a>
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

    <div class="main-container">
        <?php
        
        include_once('../../../controller/destination_controller.php');
        $destinationModel->getDestinationById($connection, $_GET['id']);

        ?>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="../../js/data.js"></script>
    <script src="./destination.js"></script>
</body>
</html>