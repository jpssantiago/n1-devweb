<?php class ConnectionModel {
    function connect() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=hotelugar","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) { 
            echo "[database] Erro ao conectar.<br>".$e->getMessage();
        } 
    }
}

?>