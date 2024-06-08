document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById("menu");
    const navLat = document.getElementById("nav-lat");

    menuButton.addEventListener("click", function(event) {
        event.stopPropagation();  // Evita que el clic en el botón del menú cierre la barra lateral
        navLat.classList.toggle("open");
    });

    document.addEventListener("click", function(event) {
        if (!navLat.contains(event.target) && !menuButton.contains(event.target)) {
            navLat.classList.remove("open");
        }
    });

    // Evitar el cierre de la barra lateral al hacer scroll dentro de ella
    navLat.addEventListener("wheel", function(event) {
        event.stopPropagation();
    });

    // Cerrar la barra lateral si el usuario hace scroll fuera de ella
    document.addEventListener("wheel", function(event) {
        if (!navLat.contains(event.target) && navLat.classList.contains("open")) {
            navLat.classList.remove("open");
        }
    });
});