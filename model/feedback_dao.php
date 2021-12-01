<?php class FeedbackDAO {
    function sendFeedback($connection, $name, $email, $subject, $message) {
       try {
            $insert = $connection->prepare(<<<EOT
                INSERT INTO feedbacks (name, email, subject, message)
                VALUES ('$name', '$email', '$subject', '$message')
            EOT);
            $insert->execute();

            echo <<<EOT
                <script>
                    alert('A sua mensagem foi enviada com sucesso.');
                    window.location.href = '../view/pages/contact/contact.php';
                </script>
            EOT;
       } catch (PDOException $e) {
            echo <<<EOT
                <script>
                    alert('Não foi possível enviar a sua mensagem.');
                    window.location.href = '../view/pages/contact/contact.php';
                </script>
            EOT;
       }
    }
}
?>