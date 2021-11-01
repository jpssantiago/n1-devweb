class Hotel {
    constructor(id, name, price, rating, image) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.rating = rating;
        this.image = image;
    }
}

const popularHotels = [
    new Hotel(0, 'Barbados', 908, 4.5, './images/barbados.jpg'),
    new Hotel(1, 'Maceió', 476, 4.1, './images/maceio.jpg'),
    new Hotel(2, 'Salvador', 385, 4.7, './images/bahamas.jpg'),
    new Hotel(3, 'Nova Iorque', 4126, 4.8, './images/nova_iorque.jpeg'),
    new Hotel(4, 'Nairóbi', 3312, 4.6, './images/nairobi.jpg'),
    new Hotel(5, 'Bahamas', 1900, 4.9, './images/bahamas.jpg'),
    new Hotel(6, 'Atlanta', 2058, 4.9, './images/atlanta.jpg'),
    new Hotel(7, 'Zurique', 3395, 4.1, './images/zurique.jpg'),
];

const CardTemplate = ({ id, image, name, rating, price }) => `
    <div class="card popular-hotel-card" id="${id}">
        <img src="${image}" alt="${name}" class="card-img-top popular-hotel-card-image">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="card-title popular-hotel-card-title">${name}</h5>
                    <p class="card-text popular-hotel-card-text">4 noites, 3 dias</p>
                </div>
                <img src="./icons/star.png" alt="" class="popular-hotel-card-rating-icon">
                <p class="popular-hotel-card-rating-value">${rating}</p>
            </div>
            <button 
                type="button"
                class="btn btn-outline-primary popular-hotel-card-button"
                onclick="handleHotelClick(${id})"
                >R$ ${new Intl.NumberFormat().format(price)}
            </button>
        </div>
    </div>
`;

const loadPopularHotels = () => {   
    $('.popular-hotels-grid').html(popularHotels.map(CardTemplate));
}

window.handleHotelClick = (id) => {
    console.log('Showing hotel: ', id);
}

(() => {
    loadPopularHotels();
})();