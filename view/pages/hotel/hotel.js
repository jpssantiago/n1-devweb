let selectedRoomId;

const loadDatePickers = () => {
    $('#checkInDatePicker, #checkOutDatePicker').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
}

const selectRoom = (roomId) => {
    selectedRoomId = selectedRoomId == roomId ? undefined : roomId;
}

const handleCheckoutClick = () => {
    if (selectedRoomId !== null && selectedRoomId !== undefined) {
        toastr.success("Redirecionando...");
    } else {
        toastr.error("Selecione um quarto para prosseguir.");
    }
}

loadDatePickers();