const handleContactMailSubmit = event => {
    event.preventDefault();

    const name = document.getElementById('contact-form-name').value;
    const email = document.getElementById('contact-form-email').value;
    const subject = document.getElementById('contact-form-subject').value;
    const message = document.getElementById('contact-form-message').value;
    
    alert(`
        Nome: ${name}
        E-mail: ${email}
        Assunto: ${subject}
        Mensagem: ${message}
    `);
}

document.getElementById('contact-form').addEventListener('submit', handleContactMailSubmit);