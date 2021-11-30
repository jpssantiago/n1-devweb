let selectedRoomId = undefined;

const loadDatePickers = () => {
    $('#checkInDatePicker, #checkOutDatePicker').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });

    const date = new Date();

    $('#checkInDatePicker').datepicker("setDate", date);
    $('#checkOutDatePicker').datepicker("setDate", new Date(
        date.getFullYear(),
        date.getMonth(),
        date.getDate() + 5
    ));
}

const updateSelectedRoomButtons = () => {
    $('.btn-selected-room').map((_, button) => {
        if (button.id == selectedRoomId) {
            button.classList.add('active-room');
            button.innerHTML = 'Selecionado';
        } else {
            button.classList.remove('active-room');
            button.innerHTML = 'Reservar agora';
        }
    });
}

const selectRoom = (roomId) => {
    selectedRoomId = selectedRoomId == roomId ? undefined : roomId;
    updateSelectedRoomButtons();
}

const handleCheckoutClick = () => {
    if (selectedRoomId === undefined || selectedRoomId === null) {
        return toastr.error("Selecione um quarto para prosseguir.");
    }

    const initialDate =  $('#checkInDatePicker').datepicker('getDate');
    const finalDate =  $('#checkOutDatePicker').datepicker('getDate');
    const diffTime = Math.abs(finalDate - initialDate);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
    console.log(diffDays);

    const formatedInitialDate = initialDate.toLocaleString('pt-BR').substring(0, 10);
    const formatedFinalDate = finalDate.toLocaleString('pt-BR').substring(0, 10);

    window.location.href = `../checkout/checkout.php?id=${selectedRoomId}&initial_date=${formatedInitialDate}&final_date=${formatedFinalDate}&days_count=${diffDays}`;
}

loadDatePickers();