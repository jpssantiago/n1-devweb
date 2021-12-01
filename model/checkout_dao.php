<?php class CheckoutDAO {
    function getRoomById($connection, $id, $initialDate, $finalDate, $daysCount) {
        try {
            $query = $connection->query("SELECT * FROM rooms WHERE id = '$id'");
    
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $name = $data['name'];
                $price = $data['price'];
                $totalPrice = $price * $daysCount;
    
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
    
                        <input type="hidden" id="total-value-hidden-input" value="$totalPrice">
                    </span>
                EOT;
            }
        } catch (PDOException $e) {
            echo "Erro ao inserir: ".$e->getMessage();
        }
    }

    function saveCheckout($connection, $firstName, $lastName, $email, $phoneNumber, $roomId, $totalValue, $initialDate, $finalDate, $currentDate) {
        try {
            $name = $firstName.' '.$lastName;
        
            $insert = $connection->prepare(<<<EOT
                INSERT INTO orders (name, email, phone_number, room_id, total_value, initial_date, final_date, order_date)
                VALUES ('$name', '$email', '$phoneNumber', $roomId, $totalValue, '$initialDate', '$finalDate', '$currentDate')
            EOT);
            $insert->execute();

            echo <<<EOT
                <script>
                    alert('A sua ordem foi enviada. Você receberá mais informações por email.');
                    window.location.href = '../view/pages/index/index.php';
                </script>
            EOT;
        } catch (PDOException $e) {
            echo <<<EOT
                <script>
                    alert('Não foi possível enviar a sua ordem.');
                    window.location.href = '../view/pages/index/index.php';
                </script>
            EOT;
        }
    }
}
?>