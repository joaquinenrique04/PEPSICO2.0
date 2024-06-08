document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById("menu");
    const navLat = document.getElementById("nav-lat");
    menuButton.addEventListener("click", function(event) {
        event.stopPropagation();  
        navLat.classList.toggle("open");
    });
    document.addEventListener("click", function(event) {
        if (!navLat.contains(event.target) && !menuButton.contains(event.target)) {
            navLat.classList.remove("open");
        }
    });
    navLat.addEventListener("wheel", function(event) {
        event.stopPropagation();
    });
    document.addEventListener("wheel", function(event) {
        if (!navLat.contains(event.target) && navLat.classList.contains("open")) {
            navLat.classList.remove("open");
        }
    });
});