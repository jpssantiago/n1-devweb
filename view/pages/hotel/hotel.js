let hotel;
let selectedRoomId;

const getHotelFromParams = () => {
    const params = (new URL(document.location)).searchParams;
    const id = params.get('id');

    hotel = window.hotels.find(hotel => hotel.id == id);
}

const RoomItemTemplate = ({ id, name, capacity, description, price, image }) => `
    <div class="room-item">
        <img class="room-item-img" src="../../images/rooms/${image}" alt="${name}">

        <div class="room-item-content">
            <h1>${name}</h1>
            <p>Acomoda ${capacity} pessoas (incluíndo até 1 criança)</p>
            <p>${description}</p>
        </div>

        <div class="room-item-actions">
            <p>Preço total (sem impostos)</p>
            <h1>R$ ${price}</h1>
            <button 
                class="btn btn-outline-primary ${selectedRoomId == id ? 'active-room' : ''}" 
                onclick="selectRoom(${id})"
                >${selectedRoomId == id ? 'Selecionado' : 'Reservar agora'}
            </button>
        </div>
    </div>
`;

const loadRooms = () => {
    $('.room-list').html(hotel.rooms.map(RoomItemTemplate));
}

const loadHotelData = () => {
    $('.main-image').attr('src', `../../images/hotels/${hotel.id}/${hotel.image}`);
    $('.hotel-name').text(hotel.name);
    $('.hotel-rating-value').text(hotel.rating);
    $('.hotel-location').text(`${hotel.location.city}, ${hotel.location.country}`);
    $('.hotel-description').text(hotel.description);

    loadRooms();
}

const loadDatePickers = () => {
    $('#checkInDatePicker, #checkOutDatePicker').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
}

const selectRoom = (roomId) => {
    selectedRoomId = selectedRoomId == roomId ? undefined : roomId;
    loadRooms();
}

const handleCheckoutClick = () => {
    if (selectedRoomId !== null && selectedRoomId !== undefined) {
        toastr.success("Redirecionando...");
    } else {
        toastr.error("Selecione um quarto para prosseguir.");
    }
}

getHotelFromParams();
loadHotelData();
loadDatePickers();