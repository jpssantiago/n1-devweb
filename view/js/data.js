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
    new Room(0, 'Quarto individual', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Aquecimento, Frigobar', 200, '0.jpg'), // SP
    new Room(1, 'Quarto casal', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Aquecimento, Frigobar', 200, '1.jpg'), // SP
    new Room(2, 'Quarto duplo standard', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Aquecimento, Frigobar', 300, '2.jpg'), // SP
    new Room(3, 'Quarto standard', 2, 'TV via satélite ou a cabo, Wi-Fi grátis, Ar condicionado, Frigobar', 231, '3.jpg'), // RJ
    new Room(4, 'Quarto de luxo', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Frigobar', 269, '4.jpg'), // Salvador
    new Room(5, 'Quarto padrão', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Frigobar', 329, '5.jpg'), // Ilhéus
    new Room(6, 'Quarto duplo standard', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Frigobar', 399, '6.jpg'), // Vitória
    new Room(7, 'Quarto duplo standard', 2, 'TV de tela plana, Wi-Fi grátis, Ar condicionado, Frigobar', 203, '7.jpg'), // Maceió
];

window.hotels = [
    new Hotel(0, 'Dan Inn Planalto São Paulo', 140, 4.5, [rooms[0], rooms[1]], destinations[0], 'Situado na região central de São Paulo, o Dan Inn Planalto São Paulo oferece buffet de café da manhã, 5 salas de reuniões e recepção 24h.', '0.jpg'),
    new Hotel(1, 'São Paulo Inn', 155, 4.8, [rooms[2]], destinations[0], 'Hotel São Paulo Inn encontra-se em São Paulo. Oferece wi-fi grátis nas áreas comuns, serviço de massagem e serviço de manobrista, assim como campo de golfe.', '0.jpg'),
    new Hotel(2, 'Savoy Othon', 230, 4.5, [rooms[3]], destinations[1], 'O Savoy Othon está localizado a 400 m da praia de Copacabana, uma das mais famosas do Rio de Janeiro. Situado a 500 m da estação de metrô Cantagalo, o que favorece a mobilidade para outras zonas da cidade e pontos turísticos, o hotel oferece café da manhã já incluído na diária. O Aeroporto Santos Dumont está a 11 km da propriedade.', '0.jpg'),
    new Hotel(3, 'Fiesta Bahia Hotel', 269, 4.9, [rooms[4]], destinations[2], 'O Fiesta Bahia Hotel, em Salvador, está a 1 km do Parque da Cidade, a 12 km do Pelourinho e do Mercado Modelo e a 25 km do Aeroporto Internacional de Salvador. Em frente à 5 shoppings, o hotel dispõe de piscina ao ar livre semiolímpica, Wi-Fi grátis e centro de convenções para 5.300 pessoas. ', '0.jpg'),
    new Hotel(4, 'Hotel Praia do Sol', 329, 4.2, [rooms[5]], destinations[3], 'O Hotel Praia do Sol, que oferece acesso direto à Praia do Sul, possui piscina com toboágua e solário, loja de conveniência 24h e ampla área verde, fica a 4 km do centro de Ilhéus. O Aeroporto de Ilhéus – Jorge Amado está a 2 km.', '0.jpg'),
    new Hotel(5, 'Hotel Senac Ilha do Boi', 263, 4.3, [rooms[6]], destinations[4], 'O Senac Ilha do Boi está localizado em Vitória, em frente à Praia da Jurema, com acesso direto ao mar. Dispõe de piscina e estacionamento privativo. O Aeroporto de Vitória - Eurico Salles encontra-se a 10 km do local.', '0.jpg'),
    new Hotel(6, 'Hotel Ponta Verde Maceió', 453, 4.1, [rooms[7]], destinations[5], 'Situado em Maceió, à beira-mar, em frente à Praia de Ponta Verde, o Hotel Ponta Verde Maceió oferece piscina adulto e infantil com área de lazer, bem como Wi-Fi gratuito e recepção 24h.', '0.jpg'),
];

window.getLowestRoomPrice = (hotelId) => {
    const hotel = window.hotels.find(hotel => hotel.id == hotelId);
    return hotel.rooms.length > 0 ? Math.min(...hotel.rooms.map(room => room.price)) : 0;
}