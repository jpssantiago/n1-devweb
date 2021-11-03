const DestinationCardTemplate = ({ id, image, city }) => `
    <div class="popular-destinations-card" onclick="window.location.href = 'destination.html?id=${id}'">
        <img class="popular-destinations-card-image" src="images/cities/${image}" alt="${city}">
        <div class="popular-destinations-card-container">
            <p>${city}</p>
        </div>
    </div>
`;

const HotelCardTemplate = ({ id, image, name, rating, location }) => `
    <div class="card popular-hotel-card" id="${id}">
        <img src="images/hotels/${id}/${image}" alt="${name}" class="card-img-top popular-hotel-card-image">
        <div class="card-body popular-hotel-card-body">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="card-title popular-hotel-card-title">${name}</h5>
                    <p class="card-text popular-hotel-card-text">${location.city}, ${location.country}</p>
                </div>
                <img src="images/icons/star.png" alt="Classificação do Hotel" class="popular-hotel-card-rating-icon">
                <p class="popular-hotel-card-rating-value">${rating}</p>
            </div>
            <button 
                type="button"
                class="btn btn-outline-primary popular-hotel-card-button"
                onclick="window.location.href = 'hotel.html?id=${id}'"
                >R$ ${new Intl.NumberFormat().format(window.getLowestRoomPrice(id))}
            </button>
        </div>
    </div>
`;

const loadDestinations = () => {
    $('.popular-destinations-list').append(window.destinations.map(DestinationCardTemplate));
}

const loadHotels = () => {
    $('.popular-hotels-grid').html(window.hotels.map(HotelCardTemplate));
}

loadDestinations();
loadHotels();