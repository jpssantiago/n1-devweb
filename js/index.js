class Destination {
    constructor(id, city, country, image) {
        this.id = id;
        this.city = city;
        this.country = country;
        this.image = image;
    }
}

class Hotel {
    constructor(id, name, price, rating, city, country, image) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.rating = rating;
        this.city = city;
        this.country = country;
        this.image = image;
    }
}

const destinations = [
    new Destination(3, 'São Paulo', 'Brasil', 'nova_iorque.png'),
    new Destination(2, 'Salvador', 'Brasil', 'salvador.png'),
    new Destination(1, 'Maceió', 'Brasil', 'maceio.png'),
    new Destination(0, 'Nassau', 'Bahamas', 'nassau.png'),
    new Destination(3, 'Nova Iorque', 'EUA', 'nova_iorque.png'),
    new Destination(3, 'Atlanta', 'EUA', 'nova_iorque.png'),
    new Destination(3, 'Chicago', 'EUA', 'nova_iorque.png'),
];

const hotels = [
    new Hotel(0, 'Blue Orchids Beach Hotel', 1516, 4.8, 'Bridgetown', 'Barbados', 'bridgetown.jpg'),
    new Hotel(1, 'Ritz Lagoa Da Anta', 992, 4.8, 'Maceió', 'Brasil', 'maceio.jpg'),
    new Hotel(2, 'Wish Hotel da Bahia', 642, 4.9, 'Salvador', 'Brasil', 'salvador.jpg'),
    new Hotel(3, 'Residence Inn New York Manhattan/Central Park', 2150, 4.4, 'Nova Iorque', 'EUA', 'nova_iorque.jpeg'),
    new Hotel(4, 'Emara Ole-sereni', 1128, 4.7, 'Nairóbi', 'Quênia', 'nairobi.jpg'),
    new Hotel(5, 'Margaritaville Beach Resort - Nassau', 1440, 4.9, 'Nassau', 'Bahamas', 'nassau.jpg'),
    new Hotel(6, 'Holiday Inn Express and Suites Atlanta Downtown', 1014, 4.6, 'Atlanta', 'EUA', 'atlanta.jpg'),
    new Hotel(7, 'Wellenberg Boutique Hotel', 1602, 4.6, 'Zurique', 'Suíça', 'zurique.jpg'),
];

const DestinationCardTemplate = ({ image, city }) => `
    <div class="popular-destinations-card">
        <img class="popular-destinations-card-image" src="images/cities/${image}" alt="${city}">
        <div class="popular-destinations-card-container">
            <p>${city}</p>
        </div>
    </div>
`;

const HotelCardTemplate = ({ id, image, name, rating, price, city, country }) => `
    <div class="card popular-hotel-card" id="${id}">
        <img src="images/hotels/${image}" alt="${name}" class="card-img-top popular-hotel-card-image">
        <div class="card-body popular-hotel-card-body">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="card-title popular-hotel-card-title">${name}</h5>
                    <p class="card-text popular-hotel-card-text">${city}, ${country}</p>
                </div>
                <img src="./icons/star.png" alt="" class="popular-hotel-card-rating-icon">
                <p class="popular-hotel-card-rating-value">${rating}</p>
            </div>
            <button 
                type="button"
                class="btn btn-outline-primary popular-hotel-card-button"
                onclick="window.location.href = 'hotel.html'"
                >R$ ${new Intl.NumberFormat().format(price)}
            </button>
        </div>
    </div>
`;

const loadDestinations = () => {
    $('.popular-destinations-list').append(destinations.map(DestinationCardTemplate))
}

const loadHotels = () => {
    $('.popular-hotels-grid').html(hotels.map(HotelCardTemplate));
}

loadDestinations();
loadHotels();

$('#popular-destinations-carousel').carousel({
    interval: 10000
})