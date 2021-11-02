class Destination {
    constructor(id, city, state, country, image) {
        this.id = id;
        this.city = city;
        this.state = state;
        this.country = country;
        this.image = image;
    }
}

class Room {
    constructor(id, name, capacity, description, price, image) {
        this.id = id;
        this.name = name;
        this.capacity = capacity;
        this.description = description;
        this.price = price;
        this.image = image;
    }
}

class Hotel {
    constructor(id, name, price, rating, rooms, location, description, image) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.rating = rating;
        this.rooms = rooms;
        this.location = location;
        this.description = description;
        this.image = image;
    }
}

window.destinations = [
    new Destination(0, 'São Paulo', 'SP', 'Brasil', '0.jpg'),
    new Destination(1, 'Rio de Janeiro', 'RJ', 'Brasil', '1.jpg'),
    new Destination(2, 'Salvador', 'BA', 'Brasil', '2.jpg'),
    new Destination(3, 'Ilhéus', 'BA', 'Brasil', '3.jpg'),
    new Destination(4, 'Vitória', 'ES', 'Brasil', '4.jpg'),
    new Destination(5, 'Maceió', 'AL', 'Brasil', '5.jpg')
];

const rooms = [
    new Room(0, 'Quarto individual', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Aquecimento, Frigobar', 200, '0.jpg'),
    new Room(1, 'Quarto casal', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Aquecimento, Frigobar', 200, '1.jpg')
];

window.hotels = [
    new Hotel(0, 'Dan Inn Planalto São Paulo', 155, 4.5, [rooms[0], rooms[1]], destinations[0], 'Situado na região central de São Paulo, o Dan Inn Planalto São Paulo oferece buffet de café da manhã, 5 salas de reuniões e recepção 24h.', '0.jpg'),
];

window.getLowestRoomPrice = (hotelId) => {
    const hotel = window.hotels.find(hotel => hotel.id == hotelId);
    return Math.min(...hotel.rooms.map(room => room.price));
}

// new Hotel(1, 'Hotel São Paulo Inn', 152, 4.4, [], destinations[0], '0.jpg')