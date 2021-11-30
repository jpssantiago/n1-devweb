<?php class DestinationModel {
    function getAllDestinations($connection) {
        $query = $connection->query('SELECT * FROM destinations');
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $data['id'];
            $city = $data['city'];
            $image = $data['image'];

            echo <<<EOT
                <div class='popular-destinations-card' onclick="location.href = '../destination/destination.php?id=$id'">
                    <img class='popular-destinations-card-image' src='$image'>
                    <div class='popular-destinations-card-container'>
                        <p>$city</p>
                    </div>
                </div>
            EOT;
        }
    }

    function getDestinationHotels($connection, $destinationId) {
        $query = $connection->query(<<<EOT
        SELECT hotels.id, hotels.image, hotels.name, hotels.rating, hotels.description, hotels.average_price FROM hotels 
        INNER JOIN destinations ON destinations.id = hotels.location_id 
        WHERE hotels.location_id = $destinationId
        EOT);

        $html = '';

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $hotelId = $data['id'];
            $image = $data['image'];
            $name = $data['name'];
            $rating = $data['rating'];
            $description = $data['description'];
            $averagePrice = $data['average_price'];

            echo <<<EOT
                <div class="hotel-item">
                    <img class="hotel-item-img" src="$image" alt="$name">
            
                    <div class="hotel-item-content">
                        <span>
                            <h1>$name</h1>
                            <img src="../../images/icons/star.png" alt="Classificação">
                            <p>$rating</p>
                        </span>
                        <p>$description</p>
                    </div>
            
                    <div class="hotel-item-actions">
                        <p>Quartos a partir de</p>
                        <h1>R$ $averagePrice</h1>
                        <button 
                            class="btn btn-outline-primary" 
                            onclick="location.href = '../hotel/hotel.php?id=$hotelId'"
                            >Ver detalhes
                        </button>
                    </div>
                </div>
            EOT;
        }
    }

    function getDestinationById($connection, $id) {
        $query = $connection->query('SELECT * FROM destinations WHERE id = "'.$id.'"');

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $city = $data['city'];

            echo <<<EOT
                <h1 class='main-container-title'>Principais hotéis em $city</h1>
                <p class='main-container-subtitle'>
                    Confira a lista dos hotéis mais populares de $city. Encontre a melhor opção para sua viagem.
                </p>
            EOT;

            echo "<div class='hotel-list'>";
            $this->getDestinationHotels($connection, $id);
            echo "</div>";
        }
    }
}

?>