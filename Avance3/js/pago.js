
// TARJETA

function togglePaymentMethod() {
    var selectedOption = document.getElementById('current-card').value;

    if (selectedOption === 'Tarjeta Debito o Credito') {
        document.getElementById('credit-card-info').style.display = 'block';
        document.getElementById('yape-plim-info').style.display = 'none';
    } else if (selectedOption === 'Yape o Plim') {
        document.getElementById('credit-card-info').style.display = 'none';
        document.getElementById('yape-plim-info').style.display = 'block';
    }
}

document.getElementById('current-card').addEventListener('change', togglePaymentMethod);

togglePaymentMethod();


function validateCardNumber(cardNumber) {

    cardNumber = cardNumber.replace(/\s/g, '');

    return /^\d{16}$/.test(cardNumber);
}


function validateCardHolderName(name) {

    return /^[a-zA-Z]+$/.test(name.trim());
}


function validateExpiryDate(expiryDate) {

    if (!/^\d{2}\/\d{2}$/.test(expiryDate)) {
        return false;
    }

    var currentYear = new Date().getFullYear() % 100;
    var currentMonth = new Date().getMonth() + 1;

    var [expiryMonth, expiryYear] = expiryDate.split('/');
    expiryMonth = parseInt(expiryMonth, 10);
    expiryYear = parseInt(expiryYear, 10);

    return (expiryYear > currentYear || (expiryYear === currentYear && expiryMonth >= currentMonth));
}


function validateCVC(cvc) {

    return /^\d{3}$/.test(cvc);
}


function handlePayment() {

    var cardNumber = document.querySelector('#credit-card-info .card-number').value;
    var cardHolderName = document.querySelector('#credit-card-info .card-holder-name').value;
    var expiryDate = document.querySelector('#credit-card-info .expiry-date').value;
    var cvc = document.querySelector('#credit-card-info .cvc').value;


    if (!validateCardNumber(cardNumber)) {
        alert('Por favor ingrese un número de tarjeta válido (16 dígitos).');
        return;
    }
    if (!validateCardHolderName(cardHolderName)) {
        alert('Por favor ingrese un nombre de titular de tarjeta válido (solo letras).');
        return;
    }
    if (!validateExpiryDate(expiryDate)) {
        alert('Por favor ingrese una fecha de expiración válida (MM/YY).');
        return;
    }
    if (!validateCVC(cvc)) {
        alert('Por favor ingrese un código de seguridad válido (3 dígitos).');
        return;
    }


    alert('¡Compra exitosa!');
}


document.querySelector('.pay-btn').addEventListener('click', handlePayment);



// YAPE
function validateAndSubmitImage() {
    var fileInput = document.getElementById("imageInput");
    var file = fileInput.files[0];
    if (!file) {
        alert('Por favor seleccione una imagen.');
        return;
    }

    var allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Tipos de archivo permitidos
    if (!allowedTypes.includes(file.type)) {
        alert('Por favor seleccione una imagen válida (JPEG, PNG o GIF).');
        return;
    }


    alert('¡Pedido enviado correctamente!');

}