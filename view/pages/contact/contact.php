<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./contact.css">

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
                            <a href="../contact/contact.php" class="nav-link active">Contato</a>
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
        <h1>Entre em contato</h1>
        <p>Para qualquer dúvida, sugestão ou reclamação, preencha o formulário abaixo que entraremos em contato o mais rápido possível.</p>
    </div>

    <!-- Formulário -->
    <form class="main-form" id="contact-form" method="post" action="../../../controller/controller.php"> 
        <div class="mb-3 form-section">
            <label class="form-label">Nome *</label>
            <input name="name" required id="contact-form-name" type="text" class="form-control" placeholder="Matheus da Silva">
        </div>

        <div class="mb-3 form-section">
            <label class="form-label">E-mail *</label>
            <input name="email" required id="contact-form-email" type="email" class="form-control" placeholder="email@exemplo.com">
        </div>

        <div class="mb-3 form-section" style="width: 350px">
            <label class="form-label" for="guestCount">Assunto *</label>
            <select name="subject" id="contact-form-subject" class="form-control">
                <option>Dúvida</option>
                <option>Sugestão</option>
                <option>Reclamação</option>
                <option>Outros assuntos</option>
            </select>
        </div>

        <div class="mb-3 form-section">
            <label class="form-label">Mensagem *</label>
            <textarea name="message" required id="contact-form-message" type="text" class="form-control" placeholder="Informe a sua mensagem aqui" rows="8"></textarea>
        </div>

        <div class="mb-3 form-section">
            <button class="btn" type="submit" name="send_feedback">Enviar mensagem</button>
        </div>
    </form>

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

    <script src="./contact.js"></script>
</body>

</html>