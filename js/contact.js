const handleContactMailSubmit = event => {
    event.preventDefault();

    const name = $('#contact-form-name').val();
    const email = $('#contact-form-email').val();
    const subject = $('#contact-form-subject').val();
    const message = $('#contact-form-message').val();
    
    window.open(`mailto:${email}?subject=${name}: ${subject}&body=${message}`);
}