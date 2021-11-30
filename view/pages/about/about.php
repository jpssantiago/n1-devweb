<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./about.css">

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
                            <a href="../about/about.php" class="nav-link active">Sobre</a>
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
    <div class="main-container">
        <h1>Sobre nós</h1>
        <p>
            Nossa missão é oferecer as melhores opções de hospedagens para a sua viagem ser perfeita. 
            <br>Oferecemos um serviço digital e totalmente focado na experiência do usuário.
        </p>
    </div>

    <!-- Seção da equipe -->
    <div class="team-section">
        <h1>Conheça a equipe</h1>

        <div class="team-section-grid">
            <div class="card devcard">
                <img src="https://github.com/jpssantiago.png" alt="GitHub" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">João Pedro Terra Santiago</h5>
                    <p class="card-text">Desenvolvedor front-end</p>
                    <div class="row justify-content-center">
                        <a href="https://github.com/jpssantiago"><img src="../../images/icons/github.png" alt="GitHub João Santiago"></a>
                        <a href="https://linkedin.com/in/jpssantiago"><img src="../../images/icons/linkedin.png" alt="LinkedIn João Santiago"></a>
                    </div>
                </div>
            </div>

            <div class="card devcard">
                <img src="https://github.com/JoPeGoCu.png" alt="GitHub" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">João Pedro Gonçalves da Cruz</h5>
                    <p class="card-text">Desenvolvedor front-end</p>
                    <div class="row justify-content-center">
                        <a href="https://github.com/JoPeGoCu"><img src="../../images/icons/github.png" alt="GitHub João da Cruz"></a>
                    </div>
                </div>
            </div>
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
</body>
</html>