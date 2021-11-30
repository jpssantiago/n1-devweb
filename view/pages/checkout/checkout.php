<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./checkout.css">
    <title>Checkout | Hotelugar</title>
</head>
<body>
    <div class="main-container">
        <div class="wrapper">
            <form action="" class="checkout-form">
                <div class="mb-3 form-section-row">
                    <span>
                        <label class="form-label">Primeiro nome</label>
                        <input required id="checkout-form-firstname" type="text" class="form-control" placeholder="Matheus">
                    </span>
    
                    <span>
                        <label class="form-label">Sobrenome</label>
                        <input required id="checkout-form-lastname" type="text" class="form-control" placeholder="da Silva">
                    </span>
                </div>
    
                <div class="mb-3 form-section">
                    <label class="form-label">E-mail</label>
                    <input required id="checkout-form-lastname" type="email" class="form-control" placeholder="email@exemplo.com">
                </div>
    
                <div class="mb-3 form-section">
                    <label class="form-label">Número de telefone</label>
                    <input required id="checkout-form-phonenumber" type="number" class="form-control" placeholder="(11) 91234-5678">
                </div>
    
                <div class="mb-3 form-section">
                    <label class="form-label">Número do cartão</label>
                    <input required id="checkout-form-phonenumber" type="number" class="form-control" placeholder="1234 5678 9012 3456">
                </div>
    
                <div class="mb-3 form-section-row">
                    <span>
                        <label class="form-label">Validade do cartão</label>
                        <input required id="checkout-form-phonenumber" type="number" class="form-control" placeholder="01/24">
                    </span>
    
                    <span>
                        <label class="form-label">Código de segurança</label>
                        <input required id="checkout-form-phonenumber" type="number" class="form-control" placeholder="123">
                    </span>
                </div>
    
                <div class="mb-3 form-section-button">
                    <button class="btn btn-outline-primary" type="submit">Finalizar compra</button>
                </div>
            </form>
    
            <div class="order-info">
                <?php

                include_once('../../../controller/controller.php');
                $checkoutModel->getRoomById(
                    $connection, $_GET['id'], 
                    $_GET['initial_date'], 
                    $_GET['final_date'],
                    $_GET['days_count']
                );


                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>