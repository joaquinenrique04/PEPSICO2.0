function validateEmail() {
    var email = document.getElementById("emailInput").value;
    var pattern = /^[a-zA-Z0-9._-]+@(gmail|hotmail)\.com$/;

    if (pattern.test(email)) {
        alert("¡Correo electrónico registrado correctamente!");
    } else {
        alert("Por favor ingrese un correo electrónico válido de Gmail o Hotmail.");
    }
}

function redirectToAnotherPage() {

    alert("¡Seras Redireccionada al Carrito de Compra!");

 
    window.location.href = "carrito.html";
}