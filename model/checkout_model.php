<?php class CheckoutModel {
    function getRoomById($connection, $id, $initialDate, $finalDate, $daysCount) {
        $query = $connection->query("SELECT * FROM rooms WHERE id = '$id'");

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $name = $data['name'];
            $price = $data['price'];
            $totalPrice = $price * 3; // pegar qtd de dias

            echo <<<EOT
                <h1>Sua ordem</h1>
    
                <span>
                    <p>$name</p>
                    <p>R$ $price</p>
                </span>

                <span>
                    <p>Check-in</p>
                    <p>$initialDate</p>
                </span>

                <span>
                    <p>Check-out</p>
                    <p>$finalDate</p>
                </span>

                <span>
                    <p>Duração</p>
                    <p>$daysCount diárias</p>
                </span>
    
                <div class="order-info-divider"></div>
    
                <span>
                    <h1 class="order-total-label">Total</h1>
                    <h1 class="order-total-value">R$ $totalPrice</h1>
                </span>
            EOT;
        }
    }
}
?>