<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./checkout.css">
    <title>Checkout | Hotelugar</title>
</head>
<body>
    <div class="main-container">
        <div class="wrapper">
            <form method="post" action="../../../controller/controller.php" class="checkout-form">
                <div class="mb-3 form-section-row">
                    <span>
                        <label class="form-label">Primeiro nome</label>
                        <input name="first_name" required id="checkout-form-firstname" type="text" class="form-control" placeholder="Matheus">
                    </span>
    
                    <span>
                        <label class="form-label">Sobrenome</label>
                        <input name="last_name" required id="checkout-form-lastname" type="text" class="form-control" placeholder="da Silva">
                    </span>
                </div>
    
                <div class="mb-3 form-section">
                    <label class="form-label">E-mail</label>
                    <input name="email" required id="checkout-form-lastname" type="email" class="form-control" placeholder="email@exemplo.com">
                </div>
    
                <div class="mb-3 form-section">
                    <label class="form-label">Número de telefone</label>
                    <input name="phone_number" required id="checkout-form-phonenumber" type="text" maxlength="15" class="form-control" placeholder="(__) ____-____">
                </div>
    
                <div class="mb-3 form-section">
                    <label class="form-label">Número do cartão</label>
                    <input required id="checkout-form-phonenumber" type="text" class="form-control" maxlength="19" placeholder="1234 5678 9012 3456">
                </div>
    
                <div class="mb-3 form-section-row">
                    <span>
                        <label class="form-label">Validade do cartão</label>
                        <input required id="checkout-form-phonenumber" type="text" class="form-control" maxlength="5" placeholder="01/24">
                    </span>
    
                    <span>
                        <label class="form-label">Código de segurança</label>
                        <input required id="checkout-form-phonenumber" type="text" class="form-control" placeholder="123" maxlength="3">
                    </span>
                </div>

                <input name="initial_date" required id="checkout-form-initialDate" type="hidden" value=<?php echo $_GET['initial_date'] ?>>
                <input name="final_date" required id="checkout-form-finalDate" type="hidden" value=<?php echo $_GET['final_date'] ?>>
                <input name="current_date" required id="checkout-form-currentDate" type="hidden" value="">
                <input name="room_id" required id="checkout-form-roomId" type="hidden" value=<?php echo $_GET['id'] ?>>
                <input name="total_value" required id="checkout-form-totalValue" type="hidden" value="">
    
                <div class="mb-3 form-section-button">
                    <button class="btn btn-outline-primary" type="submit" name="checkout">Finalizar compra</button>
                </div>
            </form>
    
            <div class="order-info">
                <?php

                include_once('../../../controller/controller.php');
                $checkoutDAO->getRoomById(
                    $connection, $_GET['id'], 
                    $_GET['initial_date'], 
                    $_GET['final_date'],
                    $_GET['days_count']
                );

                ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
    <script src="./checkout.js"></script>
</body>
</html>