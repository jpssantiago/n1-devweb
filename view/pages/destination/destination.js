let destination;
let hotels = [];

const getDestinationFromParams = () => {
    const params = (new URL(document.location)).searchParams;
    const id = params.get('id');

    destination = window.destinations.find(hotel => hotel.id == id);
}

const loadDestinationData = () => {
    $('.main-container-title').text(`Principais hotéis em ${destination.city}`);
    $('.main-container-subtitle').text(`Confira a lista dos hotéis mais populares de ${destination.city}. Encontre a melhor opção para sua viagem.`);
}

const HotelTemplate = ({ id, name, image, description, rating }) => `
    <div class="hotel-item">
        <img class="hotel-item-img" src="../../images/hotels/${id}/${image}" alt="${name}">

        <div class="hotel-item-content">
            <span>
                <h1>${name}</h1>
                <img src="../../images/icons/star.png" alt="Classificação">
                <p>${rating}</p>
            </span>
            <p>${description}</p>
        </div>

        <div class="hotel-item-actions">
            <p>Quartos a partir de</p>
            <h1>R$ ${window.getLowestRoomPrice(id)}</h1>
            <button 
                class="btn btn-outline-primary" 
                onclick="window.location.href = '../hotel/hotel.php?id=${id}'"
                >Ver detalhes
            </button>
        </div>
    </div>
`;

const loadHotels = () => {
    hotels = window.hotels.filter(hotel => hotel.location.id == destination.id);
    $('.hotel-list').html(hotels.map(HotelTemplate));
}

// getDestinationFromParams();
// loadDestinationData();
// loadHotels();