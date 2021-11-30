<?php class HotelModel {
    function getAllHotels($connection) {
        $query = $connection->query(<<<EOT
            SELECT hotels.id, hotels.image, hotels.name, hotels.rating, destinations.city, destinations.state FROM hotels
            INNER JOIN destinations ON hotels.location_id = destinations.id
        EOT);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $data['id'];
            $image = $data['image'];
            $name = $data['name'];
            $rating = $data['rating'];
            $city = $data['city'];
            $state = $data['state'];
            $price = 150;

            echo <<<EOT
                <div class="card popular-hotel-card" id="$id">
                    <img src="$image" alt="$name" class="card-img-top popular-hotel-card-image">
                    <div class="card-body popular-hotel-card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title popular-hotel-card-title">$name</h5>
                                <p class="card-text popular-hotel-card-text">$city, $state</p>
                            </div>
                            <img src="../../images/icons/star.png" alt="Classificação do Hotel" class="popular-hotel-card-rating-icon">
                            <p class="popular-hotel-card-rating-value">$rating</p>
                        </div>
                        <button 
                            type="button"
                            class="btn btn-outline-primary popular-hotel-card-button"
                            onclick="window.location.href = '../hotel/hotel.php?id=$id'"
                            >R$ $price
                        </button>
                    </div>
                </div>
            EOT;
        }
    }

    function getHotelRooms($connection, $hotelId) {
        $query = $connection->query("SELECT * FROM rooms WHERE hotel_id = '$hotelId'");

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $data['id'];
            $image = $data['image'];
            $name = $data['name'];
            $capacity = $data['capacity'];
            $description = $data['description'];
            $price = $data['price'];

            echo <<<EOT
                <div class="room-item">
                    <img class="room-item-img" src="$image" alt="$name">
        
                    <div class="room-item-content">
                        <h1>$name</h1>
                        <p>Acomoda $capacity pessoas (incluíndo até 1 criança)</p>
                        <p>$description</p>
                    </div>
        
                    <div class="room-item-actions">
                        <p>Preço total (sem impostos)</p>
                        <h1>R$ $price</h1>
                        <button 
                            class="btn btn-outline-primary active-room" 
                            onclick="selectRoom($id)"
                            >Reservar agora
                        </button>
                    </div>
                </div>
            EOT;
        }
    }

    function getHotelById($connection, $id) {
        $query = $connection->query(<<<EOT
            SELECT hotels.id, hotels.image, hotels.name, hotels.rating, hotels.description, destinations.city, destinations.state FROM hotels
            INNER JOIN destinations ON hotels.location_id = destinations.id
            WHERE hotels.id = '$id'
        EOT);

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $data['id'];
            $image = $data['image'];
            $name = $data['name'];
            $rating = $data['rating'];
            $city = $data['city'];
            $state = $data['state'];
            $description = $data['description'];

            echo <<<EOT
                <img class="main-image" src="$image" alt="Imagem principal do Hotel">

                <span class="hotel-name-row">
                    <h1 class="hotel-name">$name</h1>
                    <img class="hotel-rating-img" src="../../images/icons/star.png" alt="Classificação">
                    <p class="hotel-rating-value">$rating</p>
                </span>
                <p class="hotel-location">$city, $state</p>
                <p class="hotel-description">$description</p>

                <div class="options-form">
                    <form>
                        <div class="form-group options-group">
                            <label for="checkinDate">Check-in</label>
                            <input type="text" placeholder="Entrada" id="checkInDatePicker" class="form-control">
                        </div>
            
                        <div class="form-group options-group">
                            <label for="checkoutDate">Check-out</label>
                            <input type="text" placeholder="Saída" id="checkOutDatePicker" class="form-control">
                        </div>
            
                        <div class="form-group options-group">
                            <label for="guestCount">Hóspedes</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </form>

                    <button id="checkoutButton" onclick="handleCheckoutClick()" class="btn btn-outline-primary">Ir para o pagamento</button>
                </div>
            EOT;

            echo "<div class='room-list'>";
            $this->getHotelRooms($connection, $id);
            echo "</div>";
        }
    }
}
?>